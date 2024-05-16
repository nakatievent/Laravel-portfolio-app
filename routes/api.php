<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/login', App\Http\Controllers\Auth\LoginController::class)->name('login');
Route::post('/logout', App\Http\Controllers\Auth\LogoutController::class)->name('logout');


Route::group(['middleware' => ['auth:sanctum']], function () {
    // Route::post('/login', App\Http\Controllers\Auth\LoginController::class)->name('login');
    Route::get('/user', App\Http\Controllers\Api\MeController::class);
});


// Route::middleware('auth:sanctum')->get('users', function () {
//     Route::get('/user', App\Http\Controllers\Api\MeController::class);
//     // return User::all();
// });



// SanctumでTokenの発行
Route::post('tokens/create', \App\Http\Controllers\PostSanctumTokenController::class);


// Route::post('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken($request->token_name);

//     return ['token' => $token->plainTextToken];
// });
