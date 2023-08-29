<?php
namespace LogGenerateSample\Controllers;

use LogGenerateSample\Repositories\CacheRepository;
use Plenty\Plugin\Controller;
use LogGenerateSample\Repositories\LogRepository;
use Plenty\Plugin\Http\Request;

/**
 * Class ContentController
 * @package LogGenerateSample\Controllers
 */
class ContentController extends Controller
{
	public function mysqlInsert(Request $request)
	{
        /** @var LogRepository $logRepo */
	    $logRepo = pluginApp(LogRepository::class);
	    $logs = $logRepo->createLog($request->get("count", 1));

	    return json_encode($logs);
	}

}
