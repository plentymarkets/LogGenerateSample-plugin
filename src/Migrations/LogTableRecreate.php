<?php

namespace LogGenerateSample\Migrations;

use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;
use LogGenerateSample\Models\Log;

class LogTableRecreate
{
    public function run(Migrate $migrate)
    {
        $migrate->deleteTable(Log::class);
        $migrate->createTable(Log::class);
    }
}
