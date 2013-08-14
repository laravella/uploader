<?php namespace Laravella\Uploader;

use Illuminate\Support\ServiceProvider;

class UploaderServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('laravella/uploader');

                include __DIR__.'/../../routes.php';    
                
                $this->registerCommands();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Register 'underlyingclass' instance container to our UnderlyingClass object
        $this->app['dbgopher'] = $this->app->share(function($app)
        {
            return new DbGopher;
        });

        $this->app->booting(function()
            {
              $loader = \Illuminate\Foundation\AliasLoader::getInstance();
              $loader->alias('DbGopher', 'Laravella\Uploader\Facades\DbGopher');
            });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	/** register the custom commands **/
	public function registerCommands()
	{
//            Artisan::add(new InstallCommand);
//            Artisan::add(new UpdateCommand);
            
		$commands = array('UploaderInstall','UploaderUpdate');

		foreach ($commands as $command)
		{
			$this->{'register'.$command.'Command'}();
		}

		$this->commands(
			'command.uploader.install','command.uploader.update'
		);
                
	}	
        
	public function registerUploaderInstallCommand()
	{
		$this->app['command.uploader.install'] = $this->app->share(function($app)
		{
			return new UploaderInstallCommand();
		});
	}

	public function registerUploaderUpdateCommand()
	{
		$this->app['command.uploader.update'] = $this->app->share(function($app)
		{
			return new UploaderUpdateCommand();
		});
	}

      
}