<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $openWeatherResponse = Http::get(env('WEATHER_API_URL'), [
            'key' => env('WEATHER_API_KEY'),
            'days' => $request->input('days', '5'),
            'city' => $request->input('city', 'Brisbane,AU'),
        ]);

        if ($openWeatherResponse->failed()) {
            return response()->json(['error' => 'Call to weather supplier failed'], 500);
        }

        return $openWeatherResponse->json();
    }

    public function getWeatherByCity($city)
    {
        $openWeatherResponse = Http::get(env('WEATHER_API_URL'), [
            'key' => env('WEATHER_API_KEY'),
            'city' => $city,
            'days' => 5,
        ]);

        if ($openWeatherResponse->failed()) {
            return response()->json(['error' => 'Call to weather supplier failed'], 500);
        }

        return $openWeatherResponse->json();
    }
}
