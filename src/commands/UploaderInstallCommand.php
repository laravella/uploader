<?php namespace Laravella\Uploader;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UploaderInstallCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'uploader:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Install the file uploader.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
                $this->call('config:publish',array('package'=>'laravella/uploader'));
                $this->call('asset:publish',array('package'=>'laravella/uploader'));
                
		$this->call('db:seed',array('--class'=>'Laravella\\Uploader\\UploaderDatabaseSeeder'));
		$this->info('Uploader installation complete.');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			//array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			//array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}