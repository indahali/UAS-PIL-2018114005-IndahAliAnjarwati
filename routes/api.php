<?php

use App\Http\Controllers\layoutController;
use App\Http\Controllers\absenController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\semesterController;
use App\Http\Controllers\kontrakmatakuliahController;
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

Route::get('', [layoutController::class, 'index']);

Route::resources([
    'mahasiswas' => mahasiswaController::class,
    'absens' => absenController::class,
    'matakuliahs' => matakuliahController::class,
    'semesters' => semesterController::class,
    'kontrakmatakuliahs' => kontrakmatakuliahController::class,
    'jadwals' => jadwalController::class,
    'layout' => layoutController::class
]);