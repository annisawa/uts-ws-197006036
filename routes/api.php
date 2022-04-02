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

Route::get('/daerahindonesia/provinsi', [\App\Http\Controllers\WrapperApiController::class, 'provinsi'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('provinsi');

Route::get('/daerahindonesia/provinsi/32', [\App\Http\Controllers\WrapperApiController::class, 'DetailProvinsi'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('DetailProvinsi');


Route::get('/daerahindonesia/kota/3210', [\App\Http\Controllers\WrapperApiController::class, 'DetailKota'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('DetailKota');

Route::get('/daerahindonesia/kecamatan/3210010', [\App\Http\Controllers\WrapperApiController::class, 'DetailKecamatan'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('DetailKecamatan');

Route::get('/daerahindonesia/kelurahan/3210010005', [\App\Http\Controllers\WrapperApiController::class, 'DetailDesa'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('DetailDesa');

Route::get('/user/identitas', function (){
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006036',
            'nama' => 'Annisa Wahyuni Enun',
            'email' => '197006036@student.unsil.ac.id'
        ]
    ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');
