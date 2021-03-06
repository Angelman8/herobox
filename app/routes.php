<?php

//Entry point to Angular app
Route::get('/', function() {
    return View::make('index');
});

Route::get('test/{id?}', 'TestController@read');

Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('characters', 'Api\V1\Characters');
});

//Reroute "view" requests to the Views folder in the right component
Route::get('/views/{component}/{name}', function($component, $name) {
    $viewPath = $component . '/' . $name;

    if (View::exists($viewPath)) {
        return View::make($viewPath);
    }

  App::abort(404);
});

//Reroute any other path not found back to Angular
Route::any('{path?}', function()
{
    return view("index");
})->where("path", ".+");