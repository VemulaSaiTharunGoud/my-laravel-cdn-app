<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    sleep(4); // Simulates 4 seconds of backend latency
    return view('welcome');
});

