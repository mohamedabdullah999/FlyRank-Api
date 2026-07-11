<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello' , function(){
    return response()->json(['message' => 'Hello FlyRank!!']);
});

Route::get('/status' , function(){
    return response()->json(['status' => 'ok' , 'time' => now()->toDateTimeString()]);
});

