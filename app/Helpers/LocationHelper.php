<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class LocationHelper
{

    // dd(LocationHelper::getAllCountries());
    // dd(LocationHelper::getAllState(1));
    // dd(LocationHelper::getAllCities(32));
    // dd(LocationHelper::postArea(25, 116, 'vik'));
    // dd(LocationHelper::postNewArea(25, 116, 'vik', 110091));

    const RESPONSE_STATUS_SUCCESS = 'success';
    const RESPONSE_STATUS_ERROR = 'error';
    const AUTHORIZATION_CODE = 'fc9f4a47-4f7f-41ba-a656-d30e0009d6f0';
    const GET_ALL_COUNTRIES_API_URL = 'http://app.spherionsolutions.com/public/api/get_all_countries'; // eg: URL: http://app.spherionsolutions.com/public/api/get_all_countries
    const GET_ALL_STATE_COUNTRY_WISE_API_URL = 'http://app.spherionsolutions.com/public/api/get_all_states';  // eg: URL: http://app.spherionsolutions.com/public/api/get_all_states/1
    const GET_CITIES_STATE_WISE_API_URL = 'http://app.spherionsolutions.com/public/api/get_citites'; //eg: http://app.spherionsolutions.com/public/api/get_citites/25
    const POST_AREA_BY_STATE_AND_CITY_API_URL = 'http://app.spherionsolutions.com/public/api/get_areas'; // eg: https://app.spherionsolutions.com/public/api/get_areas
    const POST_NEW_AREA_AND_PIN_CODE_API_URL = 'http://app.spherionsolutions.com/public/api/post_area_pincode'; // eg: https://app.spherionsolutions.com/public/api/post_area_pincode
    const POST_ALL_CITY_WITHOUT_STATE_API_URL = 'http://app.spherionsolutions.com/public/api/get_city_search'; // eg: https://app.spherionsolutions.com/public/api/post_area_pincode
    const COUNTRY_CODE_AL = "IN";
    const COUNTRY_CODE = 1;


    //     // Determine if the status code is >= 200 and < 300...
    //     // $response->successful();

    //     // // Determine if the status code is >= 400...
    //     // $response->failed();

    //     // // Determine if the response has a 400 level status code...
    //     // $response->clientError();

    //     // // Determine if the response has a 500 level status code...
    //     // $response->serverError();

    //     // // Immediately execute the given callback if there was a client or server error...
    //     // $response->onError(callable $callback);
    public static function returnResponse($response)
    {
        // dd($response->object());
        return $response->object();
    }


    // URL: http://app.spherionsolutions.com/public/api/get_all_countries
    // Method: GET
    // Response Code: 200
    // Header:
    // Authorization: fc9f4a47-4f7f-41ba-a656-d30e0009d6f0


    // Response:
    // {
    //   "status": "success",
    //   "message": "countries found",
    //   "response": [
    //     {
    //       "id": 1,
    //       "country_name": "India",
    //       "code": "IN",
    //       "created_at": "2022-07-13 16:39:49",
    //       "updated_at": "2022-07-13 16:39:49"
    //     }
    //   ]
    // }
    public static function getAllCountries()
    {

        $response = Http::acceptJson()->withHeaders([
            'Authorization' => self::AUTHORIZATION_CODE,
        ])->get(self::GET_ALL_COUNTRIES_API_URL);

        return self::returnResponse($response);
    }

    // URL: http://app.spherionsolutions.com/public/api/get_all_states/1

    // Method: GET
    // Response Code: 200
    // Header:
    // Authorization: fc9f4a47-4f7f-41ba-a656-d30e0009d6f0

    // Response:


    //   {
    //     "status": "success",
    //     "message": "states found",
    //     "response": [
    //       {
    //         "id": 32,
    //         "state": "Andaman & Nicobar Islands",
    //         "country_id": 1,
    //         "created_at": "2021-08-23 13:11:23",
    //         "updated_at": "2021-08-23 13:11:23"
    //       },
    //       {
    //         "id": 1,
    //         "state": "Andhra Pradesh",
    //         "country_id": 1,
    //         "created_at": "2021-08-23 13:11:23",
    //         "updated_at": "2021-08-23 13:11:23"
    //       },
    //       ]
    //   }
    public static function getAllState()
    {
        // $countryCode = !empty($countryCode) ? $countryCode : self::COUNTRY_CODE ;

        $response = Http::acceptJson()->withHeaders([
            'Authorization' => self::AUTHORIZATION_CODE,
        ])->get(self::GET_ALL_STATE_COUNTRY_WISE_API_URL . '/' . self::COUNTRY_CODE);

        return self::returnResponse($response);
    }


    //     URL: http://app.spherionsolutions.com/public/api/get_citites/25

    // Method: GET
    // Response Code: 200
    // Header:
    // Authorization: fc9f4a47-4f7f-41ba-a656-d30e0009d6f0

    // Response:



    //   {
    //     "status": "success",
    //     "message": "cities found",
    //     "response": [
    //       {
    //         "id": 114,
    //         "city": "Central Delhi",
    //         "state_id": 25,
    //         "created_at": "2021-08-23 13:08:12",
    //         "updated_at": "2021-08-23 13:08:12"
    //       },
    //       {
    //         "id": 115,
    //         "city": "East Delhi",
    //         "state_id": 25,
    //         "created_at": "2021-08-23 13:08:12",
    //         "updated_at": "2021-08-23 13:08:12"
    //       }
    //     ]
    //   }

    public static function getAllCities($stateId)
    {

        $response = Http::acceptJson()->withHeaders([
            'Authorization' => self::AUTHORIZATION_CODE,
        ])->get(self::GET_CITIES_STATE_WISE_API_URL . '/' . $stateId);

        return self::returnResponse($response);
    }


    public static function getAllCitiesWithoutState($likeCity = NULL)
    {


// dd($likeCity);

        if (!empty($likeCity)) {
            $response = Http::acceptJson()->withHeaders([
                'Authorization' => self::AUTHORIZATION_CODE,
            ])->asForm()->post(self::POST_ALL_CITY_WITHOUT_STATE_API_URL, [
                'city' => $likeCity
            ]);
        } else {

            $response = Http::acceptJson()->withHeaders([
                'Authorization' => self::AUTHORIZATION_CODE,
            ])->post(self::POST_ALL_CITY_WITHOUT_STATE_API_URL);
        }
// dd(self::returnResponse($response));
        return self::returnResponse($response);
    }



    //     URL: https://app.spherionsolutions.com/public/api/get_areas

    // Method: POST
    // Response Code: 200
    // Header:
    // Authorization: fc9f4a47-4f7f-41ba-a656-d30e0009d6f0

    // Request:
    // {
    //    "state":25,
    //    "city":116,
    //    "area":"Vik"
    // }  

    // Response:
    // [
    //   {
    //     "status": "success",
    //     "message": "states found",
    //     "response": [
    //       {
    //         "area": "Vikaspuri",
    //         "pincode": "110018"
    //       }
    //     ]
    //   }
    // ]

    public static function postArea($stateId, $cityId, $area)
    {
        $response = Http::asForm()->acceptJson()->withHeaders([
            'Authorization' => self::AUTHORIZATION_CODE,
        ])->post(self::POST_AREA_BY_STATE_AND_CITY_API_URL, [
            'state' => $stateId,
            'city' => $cityId,
            'area' => $area
        ]);
        return self::returnResponse($response);
    }


    public static function postAllArea($stateId, $cityId)
    {
        $response = Http::asForm()->acceptJson()->withHeaders([
            'Authorization' => self::AUTHORIZATION_CODE,
        ])->post(self::POST_AREA_BY_STATE_AND_CITY_API_URL, [
            'state' => $stateId,
            'city' => $cityId,
        ]);
        return self::returnResponse($response);
    }

    //     URL: https://app.spherionsolutions.com/public/api/post_area_pincode

    // Method: POST
    // Response Code: 200
    // Header:
    // Authorization: fc9f4a47-4f7f-41ba-a656-d30e0009d6f0

    // Request:
    // {
    //    "state":25,
    //    "city":116,
    //    "area":"Vik",
    //    "pincode":"110091",
    //    "country":"IN"
    // }


    // Response:
    // [
    //   {
    //     "status": "success",
    //     "message": "New area and pincode added",
    //     "response": [
    //               {
    //                 "id": "123",
    //                 "area": "Vik",
    //                 "pincode": "110018"
    //               }
    //             ]
    //   }
    // ]

    public static function postNewArea($stateId, $cityId, $area, $pincode)
    {
        $response = Http::acceptJson()->withHeaders([
            'Authorization' => self::AUTHORIZATION_CODE,
        ])->asForm()->post(self::POST_NEW_AREA_AND_PIN_CODE_API_URL, [
            'state' => $stateId,
            'city' => $cityId,
            'area' => $area,
            'pincode' => $pincode,
            'country' => self::COUNTRY_CODE_AL

        ]);

        return self::returnResponse($response);
    }

    public static function getCountryName($countryId)
    {
        $arr = array_column(self::getAllCountries()->response, "country_name", "id");
        return $arr[$countryId];
    }

    public static function getCountryCode($countryId)
    {
        $arr = array_column(self::getAllCountries()->response, "code", "id");
        return $arr[$countryId];
    }

    public static function getStateName($stateId)
    {
        $arr = array_column(self::getAllState()->response, "state", "id");
        return $arr[$stateId];
    }

    public static function getCityName($stateId, $cityId)
    {

        $arr = array_column(self::getAllCities($stateId)->response, "city", "id");

        return $arr[$cityId];
    }

    public static function getCityNameWithoutState()
    {

        $arr = array_column(self::getAllCitiesWithoutState()->response, "city", "city_id");

        
        return $arr;
    }

    public static function allCities()
    {
        $city = array_column(self::getAllCitiesWithoutState()->response, "city","city_id");
        return $city;
    }
}
