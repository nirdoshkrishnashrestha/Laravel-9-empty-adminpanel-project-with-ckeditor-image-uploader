<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetApi;


Route::get('/getapi', [GetApi::class,'index']);
