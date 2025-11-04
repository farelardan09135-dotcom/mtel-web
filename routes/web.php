<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use App\Http\Controllers\TowerController;

Route::post('/users', function (StoreUserRequest $request) {
    // ...
})->middleware([HandlePrecognitiveRequests::class]);

Route::get('/', function () {
    return view('home');
});

Route::get('/tower', function () {
    return view('tower');
});

Route::get('/vidio', function () {
    return view('vidio');
});

Route::get('/power', function () {
    return view('power');
});

Route::get('/sst3leg', [TowerController::class, 'index']);



