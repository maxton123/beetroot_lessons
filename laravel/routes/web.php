<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\WeatherController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather_kiev', [WeatherController::class,'showKiev']);

Route::get('/weather_city/{city}', [WeatherController::class,'showCityTemperature']);
Route::get('/weather_select_city', [WeatherController::class,'showSelectCity']);
Route::get('/send_city', [WeatherController::class,'form']);
