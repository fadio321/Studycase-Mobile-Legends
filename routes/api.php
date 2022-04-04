<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mobile-legends/hero', [\App\Http\Controllers\WrapperApiController::class, 'hero'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('hero');
Route::get('/mobile-legends/role', [\App\Http\Controllers\WrapperApiController::class, 'role'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('role');
Route::get('/mobile-legends/specially', [\App\Http\Controllers\WrapperApiController::class, 'specially'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('specially');
Route::get('/mobile-legends/hero/44', [\App\Http\Controllers\WrapperApiController::class, 'tertentu'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('tertentu');
Route::get('/mobile-legends/role?roleName=Marksman', [\App\Http\Controllers\WrapperApiController::class, 'rolehero'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('rolehero');

Route::get('/user/identitas', function (){
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006027',
            'nama' => 'Fadhiilah',
            'email' => '197006027@student.unsil.ac.id'
        ]
    ];
})  ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');
