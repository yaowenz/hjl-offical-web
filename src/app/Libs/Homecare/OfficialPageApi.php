<?php

namespace App\Libs\Homecare;

class OfficialPageApi
{
    protected $api;

    public function __construct()
    {
        $this->api = new OfficialApi;
    }

    public function getJobList()
    {
        $perGroup = 4;
        $params = ['offset' => 0, 'pagesize' => 12];
        $result = $this->api->getJobList($params);
        if ($this->checkResult($result)) {
            $jobs = $this->roundGroupList($result->data->rows, $perGroup);
        } else {
            $jobs = [];
        }

        array_walk($jobs, function ($job) {
            $job->time_ago = time_ago($job->created_at);
        });

        return $jobs;
    }

    public function getWorkerList()
    {
        $perGroup = 4;
        $params = ['offset' => 0, 'pagesize' => 12];
        $result = $this->api->getWorkerList($params);
        if ($this->checkResult($result)) {
            $workers = $this->roundGroupList($result->data->rows, $perGroup);
        } else {
            $workers = [];
        }

        return $workers;
    }

    protected function checkResult($result)
    {
        return is_object($result) && property_exists($result, 'err') && $result->err == 0;
    }

    protected function roundGroupList($list, $perGroup)
    {
        $count = count($list);
        if ($count % $perGroup !== 0) {
            $list = array_slice($list, 0, (int)($count / $perGroup) * $perGroup);
        }
        return $list;
    }
}
