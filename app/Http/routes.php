<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    return View::make('index');
});

Route::get('/views/{component}/{name}', function($component, $name) {
  $viewPath = $component . '/' . $name;

  if (View::exists($viewPath)) {
    return View::make($viewPath);
  }

  App::abort(404);
});