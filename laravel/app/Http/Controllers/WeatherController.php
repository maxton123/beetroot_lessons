<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
   public function showKiev()
   {
       $response = Http::get(
           'https://api.openweathermap.org/data/2.5/weather?q=Kiev&units=metric&appid=f11d42cfa9bb9067cc875a4f98a9aae2'
       );
       $townWeather = json_decode($response, true);
       $currentTemperature = $townWeather['main']['temp'];
       return view('weatherKiev')->with('currentTemperature',$currentTemperature);

   }

    public function showCityTemperature($city)
    {
        $response = Http::get(
            'https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&units=metric&appid=f11d42cfa9bb9067cc875a4f98a9aae2'
        );
        $townWeather = json_decode($response, true);
        $currentTemperature = $townWeather['main']['temp'];
        $data=[
            'city' => $city,
            'currentTemperature' => $currentTemperature
        ];
        return view('weatherCity')->with($data);
    }

    public function showSelectCity()
    {
        return view('weatherCitySelect');
    }




}
