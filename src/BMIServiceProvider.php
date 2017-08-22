<?php

namespace Ravi\BMI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class BMIServiceProvider extends ServiceProvider
{
	
	function boot() {

		include_once __DIR__ . '/routes.php';

		$this->loadViewsFrom(__DIR__ . '/views', 'bmi');

	}

	function register() {

		/*$this->app['bmi'] = $this->app->singleton(function ($app) {
			return new BMI;
		});*/

		$this->app->singleton('bmi', function ($app) {
              return new Route($app['bmi'], $app);
          });
		
	}
}

 