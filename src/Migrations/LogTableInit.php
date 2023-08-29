<?php

namespace LogGenerateSample\Migrations;

use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;
use LogGenerateSample\Models\Log;

class LogTableInit
{
    public function run(Migrate $migrate)
    {
        $migrate->createTable(Log::class);
    }
}
