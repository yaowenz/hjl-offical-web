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
}
