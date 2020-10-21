<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
// Route::get('/', function () {
//     $nama = 'Bridal Chek';
//     return view('index', ['nama' => $nama]);
// });

// Route::get('/makeup', function () {
//     return view('makeup');
// });
// Route::get('/gaun', function () {
//     return view('gaun');
// });

// Route::get('/', 'App\Http\Controllers\PagesController@home');
// Route::get('/makeup','App\Http\Controllers\PagesController@makeup');
// Route::get('/gaun','App\Http\Controllers\PagesController@gaun');
Route::get('/', [PagesController::class, 'home']);
//Route::get('/', 'PagesController@home');
// Route::get('/makeup','PagesController@makeup');
// Route::get('/gaun','PagesController@gaun');

