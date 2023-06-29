<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\apiController;


Route::get('/', function () {
    $api = Http::withoutVerifying()->get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
    $apiArray = $api->json();

    return view('api', ['apiArray' => $apiArray]);
});
