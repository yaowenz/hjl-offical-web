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
        $perGroup = 6;
        $params = ['offset' => 0, 'pagesize' => 18];
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
        $perGroup = 12;
        $params = ['offset' => 0, 'pagesize' => 36];
        $result = $this->api->getWorkerList($params);
        if ($this->checkResult($result)) {
            $workers = $this->roundGroupList($result->data->rows, $perGroup);
        } else {
            $workers = [];
        }

        return $workers;
    }

    public function getBranchList($divisionId)
    {
        $params = ['offset' => 0, 'pagesize' => 100, 'division_id' => $divisionId];
        $result = $this->api->getBranchList($params);

        return $result;
    }

    public function getDivisions($cityId)
    {
        $divisions = [];
        if ($cityId == '310100') {
            $divisions = [
                ['name' => '宝山区', 'value' => 310113],
                ['name' => '长宁区', 'value' => 310105],
                ['name' => '崇明县', 'value' => 310230],
                ['name' => '奉贤区', 'value' => 310120],
                ['name' => '虹口区', 'value' => 310109],
                ['name' => '黄浦区', 'value' => 310101],
                ['name' => '嘉定区', 'value' => 310114],
                ['name' => '静安区', 'value' => 310106],
                ['name' => '金山区', 'value' => 310116],
                ['name' => '闵行区', 'value' => 310112],
                ['name' => '浦东新区', 'value' => 310115],
                ['name' => '普陀区', 'value' => 310107],
                ['name' => '青浦区', 'value' => 310118],
                ['name' => '松江区', 'value' => 310117],
                ['name' => '徐汇区', 'value' => 310104],
                ['name' => '杨浦区', 'value' => 310110],
                ['name' => '闸北区', 'value' => 310108]
            ];
        }

        $allValues = array_map(function ($division) {
            return $division['value'];
        }, $divisions);
        array_unshift($divisions, ['name' => '全部', 'value' => implode(',', $allValues)]);

        return $divisions;
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
