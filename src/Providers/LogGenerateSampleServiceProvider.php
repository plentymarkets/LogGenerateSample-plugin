<?php
namespace LogGenerateSample\Providers;

use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;
use Plenty\Plugin\ServiceProvider;

/**
 * Class LogGenerateSampleServiceProvider
 * @package LogGenerateSample\Providers
 */
class LogGenerateSampleServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(LogGenerateSampleRouteServiceProvider::class);
	}
}
