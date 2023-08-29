<?php

namespace LogGenerateSample\Migrations;

use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

class CreateFailedMigration
{
    public function run(Migrate $migrate)
    {
        $test = pluginApp(Doodle::class);
        $test->doodle();
    }
}
