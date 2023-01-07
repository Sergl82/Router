<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
        dump($_ENV['APP_NAME']);
        dump($_ENV['APP_ENV']);
        dump(config('app.timezone'));
        dump(config('app.locale'));
    return view('HomePage');

});
