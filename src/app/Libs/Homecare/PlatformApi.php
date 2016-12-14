<?php

namespace App\Libs\Homecare;

use App\Constants;
use Curl\Curl;

class PlatformApi
{
    private $api_base_url = '';

    public function __construct()
    {
        $this->api_base_url = getenv('PLATFORM_API_BASE_URL');

        if(empty($this->api_base_url )) {
            throw new \Exception('env.PLATFORM_API_BASE_URL not defined!');
        }
    }

    protected function checkResponseFormat($response)
    {
        return is_object($response) && property_exists($response, 'err');
    }

    /**
     * 调用服务器API
     *
     * @param unknown $api
     * @param unknown $params
     */
    protected function call($api, $params, $usePost = false) {
        if ($usePost) {
            $urlParams = [];
            $data = json_encode($params);
        } else {
            $urlParams = $params;
            $data = null;
        }
        $urlParams = $this->filterParams($urlParams);
        $urlParams['sign'] = $this->calcSignature($urlParams, $data);
        $curl = new Curl();
        $curl->setTimeout(5);

        $url = $this->api_base_url . $api;
        if ($usePost) {
            $url .= '?'.http_build_query($urlParams);
            $curl->post($url, $data);
        } else {
            $curl->get($url, $urlParams);
        }

        if ($curl->error) {
            $errText = 'Platform API error: code: '.$curl->errorCode.' message: '.$curl->errorMessage;
            $errText .= "\nurl: ".$curl->url;
            if ($usePost) {
                $errText .= "\nPost Body: ".$data;
            }
            $errText .= "\n";
            log_exception(new \Exception($errText));

            return (object)['err' => $curl->errorCode, 'msg' => $curl->errorMessage]; // same as $curl->response
        }

        $response = $curl->response;

        if (!$this->checkResponseFormat($response)) {
            $errText = 'Platform API malformed response: ';
            $errText .= "\nurl: ".$curl->url;
            if ($usePost) {
                $errText .= "\nPost Body: ".$data;
            }
            $errText .= "\nrawResponse: ".$curl->rawResponse;
            $errText .= "\n";
            log_exception(new \Exception($errText));

            return (object)['err' => Constants::ERR_API_SYSTEM, 'msg' => Constants::$errorMsg[Constants::ERR_API_SYSTEM]];
        }

        return $response;
    }

    protected function filterParams($params)
    {
        foreach ($params as $key => $value) {
            if (is_null($value)) {
                $params[$key] = '';
            }
        }
        $params['nonce'] = uniqid();
        $params['ts'] = time();

        return $params;
    }

    protected function calcSignature($params, $data = null)
    {
        $str = $this->paramsToSignatureString($params);
        $str .= 'key='.getenv('PLATFORM_API_KEY');
        if (is_string($data)) {
            $str .= $data;
        }

        return md5($str);
    }

    protected function paramsToSignatureString($params)
    {
        $str = '';

        ksort($params, SORT_STRING);
        foreach ($params as $key => $value) {
            if (!is_array($value)) {
                $str .= $key.'='.$value;
            }
        }

        return $str;
    }
}
