<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

Route::get('/', [homecontroller::class, 'index']);
