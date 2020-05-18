# weather-forecaster-api

Provides weather forecasting data from Weatherbit.io for use with the [weather-forecaster UI](https://github.com/nathanbrennan/weather-forecaster)

## Setup

This guide assumes you have already followed the [Laravel installation guide](https://laravel.com/docs/7.x/installation)

1. Clone this repo

```
$ git clone git@github.com:nathanbrennan/weather-forecaster-api.git
```

2. Navigate to the `weather-forecaster-api` folder and copy the `.env.example` file to `.env`

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

The Laravel dev server should now be running at http://127.0.0.1:8000

## Requests

### Route

`/api/weather`

### Method

`GET`

### URL Params

| Name | Description                                    | Required | Default      |
| ---- | ---------------------------------------------- | -------- | ------------ |
| city | The city to return the weather forecast for.   | No       | Brisbane, AU |
| days | The number of days to forecast. Maximum is 16. | No       | 5            |

### Data Params

None

### Example Call

```
http://localhost:8000/api/weather?days=2&city=sydney,au
```

### Success Response

```json
{
    "data": [
        {
            "moonrise_ts": 1589732293,
            "wind_cdir": "SSE",
            "rh": 69,
            "pres": 1024.3,
            "high_temp": 19.1,
            "sunset_ts": 1589785391,
            "ozone": 275.115,
            "moon_phase": 0.181931,
            "wind_gust_spd": 4.2,
            "snow_depth": 0,
            "clouds": 32,
            "ts": 1589724060,
            "sunrise_ts": 1589748564,
            "app_min_temp": 12.1,
            "wind_spd": 2.34268,
            "pop": 35,
            "wind_cdir_full": "south-southeast",
            "slp": 1031.57,
            "moon_phase_lunation": 0.84,
            "valid_date": "2020-05-18",
            "app_max_temp": 18.6,
            "vis": 24.1056,
            "dewpt": 10.1,
            "snow": 0,
            "uv": 4.16683,
            "weather": {
                "icon": "c02d",
                "code": 802,
                "description": "Scattered clouds"
            },
            "wind_dir": 163,
            "max_dhi": null,
            "clouds_hi": 0,
            "precip": 0.5,
            "low_temp": 12.1,
            "max_temp": 19.5,
            "moonset_ts": 1589777712,
            "datetime": "2020-05-18",
            "temp": 15.8,
            "min_temp": 12.1,
            "clouds_mid": 0,
            "clouds_low": 32
        },
        {
            "moonrise_ts": 1589821976,
            "wind_cdir": "SE",
            "rh": 73,
            "pres": 1020.3,
            "high_temp": 19.8,
            "sunset_ts": 1589871752,
            "ozone": 271.971,
            "moon_phase": 0.113662,
            "wind_gust_spd": 9.60275,
            "snow_depth": 0,
            "clouds": 62,
            "ts": 1589810460,
            "sunrise_ts": 1589835009,
            "app_min_temp": 13.4,
            "wind_spd": 2.78237,
            "pop": 55,
            "wind_cdir_full": "southeast",
            "slp": 1027.42,
            "moon_phase_lunation": 0.88,
            "valid_date": "2020-05-19",
            "app_max_temp": 19.3,
            "vis": 22.981,
            "dewpt": 11.5,
            "snow": 0,
            "uv": 4.37275,
            "weather": {
                "icon": "c03d",
                "code": 803,
                "description": "Broken clouds"
            },
            "wind_dir": 138,
            "max_dhi": null,
            "clouds_hi": 29,
            "precip": 1.3125,
            "low_temp": 12.7,
            "max_temp": 19.9,
            "moonset_ts": 1589865690,
            "datetime": "2020-05-19",
            "temp": 16.6,
            "min_temp": 13.3,
            "clouds_mid": 0,
            "clouds_low": 33
        }
    ],
    "city_name": "Sydney",
    "lon": "151.20732",
    "timezone": "Australia/Sydney",
    "lat": "-33.86785",
    "country_code": "AU",
    "state_code": "02"
}
```

### Error Response

```json
//TODO: Make informative error response
```
