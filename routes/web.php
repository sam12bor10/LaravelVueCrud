<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/storeCar','App\Http\Controllers\CarsController@storeCar');
Route::get('/getCars', 'App\Http\Controllers\CarsController@getCars');
Route::post('/deleteCar/{id}', 'App\Http\Controllers\CarsController@deleteCar');
Route::post('/editCars/{id}', 'App\Http\Controllers\CarsController@editCar');

Route::get('/test','App\Http\Controllers\testcar@test');