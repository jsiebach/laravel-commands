<?php
namespace JSiebach\Cheddar;
use Illuminate\Support\ServiceProvider;
use JSiebach\Commands\Commands\RefreshDatabase;

class CommandsServiceProvider extends ServiceProvider
{
	protected $commands = [
		RefreshDatabase::class
	];
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{

	}
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->commands($this->commands);
	}

}