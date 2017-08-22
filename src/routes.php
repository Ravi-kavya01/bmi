<?php

Route::group(['namespace' => 'Ravi\BMI\Controllers', 'prefix' => 'ravi/bmi'], function(){

	Route::get('/', [ 'as' => 'bmi_path', 'uses' => 'BMIController@index']);

});