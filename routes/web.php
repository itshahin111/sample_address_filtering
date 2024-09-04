<?php

// routes/web.php
use App\Http\Controllers\LocationController;

Route::get('/locations', [LocationController::class, 'index']);
Route::get('/districts/{divisionId}', [LocationController::class, 'getDistricts']);
Route::get('/upazilas/{districtId}', [LocationController::class, 'getUpazilas']);