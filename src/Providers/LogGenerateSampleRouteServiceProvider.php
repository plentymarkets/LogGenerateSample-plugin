<?php
namespace LogGenerateSample\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class LogGenerateSampleRouteServiceProvider
 * @package LogGenerateSample\Providers
 */
class LogGenerateSampleRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('mysql', 'LogGenerateSample\Controllers\ContentController@mysqlInsert');
	}

}
