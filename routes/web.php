<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;

// Route::get('/', function () {
//     return view('address');
// });

Route::get('/address_picker', [AddressController::class, 'provinces']);
