<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pengunjung\PengunjungController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

        Route::post('save-data',  ['PegawaiController'::class, 'saveDataPegawai']);
        Route::delete('delete-data',  ['PegawaiController'::class, 'deleteDataPegawai']);
    ;
;


    Route::group(['prefix' => 'pengunjung'], function () {
        Route::get('get-data',  ['PengunjungController'::class, 'getPengunjung']);
        Route::post('save-data',  ['PengunjungController'::class, 'savePengunjung']);
        Route::delete('delete-data',  ['PengunjungController'::class, 'deletePengunjung']);
    });
;

Route::group(['prefix' => 'users'], function () {
    Route::get('get-data',  ['UserController'::class, 'getDataUser']);
    Route::post('create-data', ['UserController'::class, 'createDataUser']);
    Route::put('update-data', ['UserController'::class, 'updateDataUser']);
    Route::delete('delete-data', ['UserController'::class, 'deleteDataUser']);
});
