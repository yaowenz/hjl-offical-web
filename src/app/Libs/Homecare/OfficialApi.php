<?php

namespace App\Libs\Homecare;

class OfficialApi extends PlatformApi
{
    public function getJobList($data)
    {
        return $this->call('/official/jobs', $data);
    }

    public function getWorkerList($data)
    {
        return $this->call('/official/workers', $data);
    }

    public function getBranchList($data)
    {
        return $this->call('/official/branches', $data);
    }

    public function newBranch($data)
    {
        return $this->call('/official/new-branch', $data, true);
    }
}
