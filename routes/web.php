<?php
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\absenController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\semesterController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\kontrakmatakuliahController;
use Illuminate\Support\Facades\Route;

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

route::get('', [mahasiswaController::class, "index"]);
route::get('', [absenController::class, "index"]);
route::get('', [matakuliahController::class, "index"]);
route::get('', [semesterController::class, "index"]);
route::get('', [jadwalController::class, "index"]);
route::get('', [kontrakmatakuliahController::class, "index"]);
route::get('', [LayoutController::class, "index"]);
//route::get('/customers', [cobacontroller::class, "index"]);
//route::get('/customers/create', [cobacontroller::class, "create"]);
//route::post('/customers', [cobacontroller::class, "store"]);
//route::get('/customers/{id}', [cobacontroller::class, "show"]);
//route::get('/customers/{id}/edit', [cobacontroller::class, "edit"]);
//route::put('/customers/{id}', [cobacontroller::class, "update"]);
//Route::delete('/customers/{id}', [CobaController::class, 'destroy']);
route::resource('absens', absenController::class);
route::resource('jadwals', jadwalController::class);
route::resource('kontrakmatakuliahs', kontrakmatakuliahController::class);
route::resource('semesters', semesterController::class);
route::resource('mahasiswas', mahasiswaController::class);
route::resource('matakuliahs', matakuliahController::class);
route::resource('layout', LayoutController::class);