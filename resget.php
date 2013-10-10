<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class resget extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'resget';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Get essential javascripts and stylesheets for you';

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
		$this->info("");
		$resources = $this->option('resname');
		$path = base_path().str_replace('=', '/', $this->option('approot'));
		if(!file_exists($path.'/js'))
		{
			$this->info('Creating JavaScript folder at '.$path.'/js');
			mkdir($path.'/js');
		}
		if(!file_exists($path.'/css'))
		{
			$this->info('Creating StyleSheet folder at '.$path.'/css');
			mkdir($path.'/css');
		}
		if(!file_exists($path.'/img'))
		{
			$this->info('Creating Image folder at '.$path.'/img');
			mkdir($path.'/img');
		}
		if(!file_exists($path.'/fonts'))
		{
			$this->info('Creating JavaScript folder at '.$path.'/fonts');
			mkdir($path.'/fonts');
		}
		foreach ($resources as $resource ) {
			if($resource == "=jquery")
			{
				if(!file_exists($path.'/js'.'/jquery-min.js'))
				{
					$this->info('Downloading jquery, please wait .....');
					file_put_contents($path.'/js'.'/jquery-min.js', fopen("http://code.jquery.com/jquery-1.10.2.min.js", 'r'));
				}
				else
				{
					$this->error("Resource already exist!");
				}
			}
			if($resource == "=underscore")
			{
				
				if(!file_exists($path.'/js'.'/underscore-min.js'))
				{
					$this->info('Downloading underscorejs, please wait .....');
					file_put_contents($path.'/js'.'/underscore-min.js', fopen("http://underscorejs.org/underscore-min.js", 'r'));
				}
				else
				{
					$this->error("Resource already exist!");
				}
			}
			if($resource == "=angular")
			{
				
				if(!file_exists($path.'/js'.'/jquery-min.js'))
				{
					$this->info('Downloading angularjs, please wait .....');
					file_put_contents($path.'/js'.'/angular-min.js', fopen("https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js", 'r'));
				}
				else
				{
					$this->error("Resource already exist!");
				}	
			}
			if($resource == "=backbone")
			{
				if(!file_exists($path.'/js'.'/jquery-min.js'))
				{
					$this->info('Downloading jquery, please wait .....');
					file_put_contents($path.'/js'.'/jquery-min.js', fopen("http://code.jquery.com/jquery-1.10.2.min.js", 'r'));
				}
				if(!file_exists($path.'/js'.'/underscore-min.js'))
				{
					$this->info('Downloading underscore, please wait .....');
					file_put_contents($path.'/js'.'/underscore-min.js', fopen("http://underscorejs.org/underscore-min.js", 'r'));
				}
				if(!file_exists($path.'/js'.'/backbone-min.js'))
				{
					$this->info('Downloading backbone, please wait .....');
					file_put_contents($path.'/js'.'/backbone-min.js', fopen("http://backbonejs.org/backbone-min.js", 'r'));
				}
				else
				{
					$this->error("Resource already exist!");
				}	
			}
			if($resource == "=bootstrap3")
			{
				if(!file_exists($path.'/css'.'/bootstrap-min.css'))
				{
					$this->info('Downloading Twitter Bootstrap 3 StyleSheet, please wait .....');
					file_put_contents($path.'/css'.'/bootstrap-min.css', fopen("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css", 'r'));
				}
				if(!file_exists($path.'/js'.'/bootstrap-min.js'))
				{
					$this->info('Downloading Twitter Bootstrap 3 JavaScript, please wait .....');
					file_put_contents($path.'/js'.'/bootstrap-min.js', fopen("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js", 'r'));
				}
				else
				{
					$this->error("Resource already exist!");
				}
			}
			if($resource == "=fontawesome")
			{
				if(!file_exists($path.'/css'.'/font-awesome-min.css'))
				{
					$this->info('Downloading Font Awesome StyleSheet, please wait .....');
					file_put_contents($path.'/css'.'/font-awesome-min.css', fopen("http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css", 'r'));
				}
				else
				{
					$this->error("Resource already exist!");
				}
			}
			$this->info('All done successfully!');
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			//array('resname', InputArgument::OPTIONAL, 'specify resource name'),
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
			 array('resname', 'r', InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'specify resource name', null),
			 array('approot', 'a', InputOption::VALUE_OPTIONAL , 'specify you applicaion public folder. default is /public', '=public'),
		);
	}

}