<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class,'firstAction'] 
);

Route::get('/', [TestController::class,'greet'],
);




