<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:temperature {town}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Current temperature in town';

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
     * @return int
     */
    public function handle()
    {
        $town = $this->argument('town');
        $response = Http::get(
            'https://api.openweathermap.org/data/2.5/weather?q=' . $town . '&units=metric&appid=f11d42cfa9bb9067cc875a4f98a9aae2'
        );
        $townWeather = json_decode($response, true);
        if (isset($townWeather['main']['temp'])) {
            $currentTemperature = $townWeather['main']['temp'];
            echo "В $town сейчас $currentTemperature ℃ ";
        } else {
            echo $townWeather['message'];
        }
    }
}
