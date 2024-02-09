<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginpageController;
use App\Http\Controllers\registerpageController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\pk3Controller;
use App\Http\Controllers\index1Controller;
use App\Http\Controllers\paymentController;

use App\Http\Controllers\aController;
use App\Http\Controllers\DatapageController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/loginpage', [loginpageController::class, 'index']);
Route::post('/loginpage', [loginpageController::class, 'register']);

Route::get('/registerpage', [registerpageController::class, 'index']);
Route::post('/registerpage', [registerpageController::class, 'register']);

Route::get('/main', [aController::class, 'index']);
Route::post('/main', [aController::class, 'register']);

Route::get('/pk3', [pk3Controller::class, 'index']);
Route::post('/pk3', [pk3Controller::class, 'register']);

Route::get('/index1', [index1Controller::class, 'index']);
Route::post('/index1', [index1Controller::class, 'register']);

Route::get('/payment', [paymentController::class, 'index']);
Route::post('/payment', [paymentController::class, 'register']);

Route::get('/', [acontroller::class, 'index']) ->name('index');
Route::get('a', [acontroller::class, 'datapage']) ->name('datapage');

Route::post('/', [acontroller::class, 'create']) ->name('create');

Route::get('/edit/{id}', [acontroller::class, 'edit']) ->name('edit');
Route::put('/edit/{id}', [acontroller::class, 'update']) ->name('update');

Route::get('/delete/{id}', [acontroller::class, 'destroy']) ->name('destroy');

Route::get('datapage', [DatapageController::class, 'crud']) ->name('crud');



