<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\DataTunggalController;

use App\Http\Controllers\DistribusiFController;

use App\Http\Controllers\DeskripsiDataController;

use App\Http\Controllers\DataBergolongController;

use App\Http\Controllers\CHIKuadratController;

use App\Http\Controllers\LillieforsController;

use App\Http\Controllers\ProductMController;

use App\Http\Controllers\PointBiseralController;

use App\Http\Controllers\NormalitasCHIKuadratController;

use App\Http\Controllers\NormalitasCHIKuadratBController;

use App\Http\Controllers\NormalitasLillieforsController;

use App\Http\Controllers\DataTunggalAjaxController;

use App\Http\Controllers\FormController;

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



Route::resource('/statistik', AdminController::class);
Route::get('/statistik/export', [AdminController::class,'export'])->name('admin.export');
Route::resource('/DataTunggal', DataTunggalController::class);
Route::resource('/DistribusiF', DistribusiFController::class);
Route::resource('/DeskripsiData', DeskripsiDataController::class);
Route::resource('/DataBergolong', DataBergolongController::class);
Route::resource('/chikuadrat', CHIKuadratController::class);
Route::resource('/Lilliefors', LillieforsController::class);
Route::resource('/ProductMoment', ProductMController::class);
Route::resource('/PointBiseral', PointBiseralController::class);
Route::resource('/NormalitasCHIKuadrat', NormalitasCHIKuadratController::class);
Route::resource('/NormalitasCHIKuadratB', NormalitasCHIKuadratBController::class);
Route::resource('/NormalitasLilliefors', NormalitasLillieforsController::class);
Route::resource('/DataTunggalAjax', DataTunggalAjaxController::class);
Route::resource('/Form', FormController::class);



Route::get('/', function () {
    return view('welcome');
});

