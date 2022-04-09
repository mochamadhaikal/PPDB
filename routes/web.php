<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [RegistrasiController::class, 'index']);
Route::get('/registrasi', [RegistrasiController::class, 'create']);
Route::post('/registrasi', [RegistrasiController::class, 'store']);
Route::get('registrasi/{id}/edit', [RegistrasiController::class, 'edit']);
Route::put('registrasi/{id}', [RegistrasiController::class, 'update']);
Route::delete('registrasi/{id}', [RegistrasiController::class, 'delete']);
Route::get('registrasi/{id}/print', [RegistrasiController::class, 'print']);
Route::get('registrasi/bulk-print', [RegistrasiController::class, 'bulk_print']);
