# weather-forecaster-api

Provides weather forecasting data from Weatherbit.io for use with the [weather-forecaster UI](https://github.com/nathanbrennan/weather-forecaster)

## Setup

This guide assumes you have already followed the [Laravel installation guide](https://laravel.com/docs/7.x/installation)

1. Clone this repo

```
$ git clone git@github.com:nathanbrennan/weather-forecaster-api.git
```

2. Navigate to the `weather-forecaster-api` directory and copy the `.env.example` file to `.env`

```
$ cd weather-forecaster-api
$ cp .env.example .env
```

3.  Sign up for an account at https://www.weatherbit.io/account/create and grab your api key
4.  Open the `.env` file and add your api key to the `WEATHER_API_KEY` var. It should look like so:

```
...
WEATHER_API_KEY=3438xxxxxxxxxxxxxxxxxxxxxxxaa15f
WEATHER_API_URL=https://api.weatherbit.io/v2.0/forecast/daily
```

## Start

Simply run the php artisan serve command from within the `weather-forecaster-api` folder to start the server

```
$ php artisan serve
```

The Laravel dev server should now be running at `http://127.0.0.1:8000`
