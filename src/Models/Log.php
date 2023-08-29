<?php

namespace LogGenerateSample\Models;
use Plenty\Modules\Plugin\DataBase\Contracts\Model;

/**
 * Class Log
 * @package LogGenerateSample\Models
 * @property int $id
 * @property int $userId
 * @property string $userName
 * @property string $action
 * @property int $actionId
 * @property string $createdAt Created timestamp
 */

class Log extends Model
{
    public $id;
    public $userId;
    public $userName;
    public $action;
    public $actionId;
    public $createdAt;

    public function getTableName(): string
    {
        return 'LogGenerateSample::Log';
    }
}
