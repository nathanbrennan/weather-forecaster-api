<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeatherByCity($cityName)
    {
        $days = 5;
        $apiKey = env('WEATHER_API_KEY');
        $weatherApiUrl = env('WEATHER_API_URL');
        $url = $weatherApiUrl . '?key=' . $apiKey . '&city=' . $cityName . ',au&days=' . $days;

        $openWeatherResponse = Http::get($url);

        if ($openWeatherResponse->failed()) {
            return response()->json(['error' => 'Call to weather supplier failed'], 500);
        }

        return $openWeatherResponse->json();
    }
}
