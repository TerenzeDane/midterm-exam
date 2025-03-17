<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;

Route::get('/MagraciaTerenzeDane', [FeatureController::class, 'index']);
