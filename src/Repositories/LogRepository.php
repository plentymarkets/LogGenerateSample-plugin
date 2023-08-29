<?php

namespace LogGenerateSample\Repositories;

use LogGenerateSample\Models\Log;
use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;

class LogRepository{

    public function createLog(int $count = 1){
        $db = pluginApp(DataBase::class);

        $logs = [];

        for ($i = 0; $i < $count; $i++) {
            $testLog = pluginApp(Log::class);
            $testLog->userId = 12;
            $testLog->userName = "test";
            $testLog->action = "action";
            $testLog->actionId = 16;
            $testLog->createdAt = time();
            $db->save($testLog);
            $logs[] = $testLog;
        }


        return $logs;



    }
}