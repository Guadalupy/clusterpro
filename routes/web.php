<?php
use App\Http\Controllers\BoletineController;
use App\Http\Controllers\SolicitudeController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Multimedia', function(){
    return view('multimedia');
  });
  Route::get('/nosotros', function(){
    return view('nosotros');
  });
  Route::get('/noticias', function(){
    return view('noticias');
  });
  Route::get('/solicitud', function(){
    return view('solicitud');
  });
  Route::get('/contact', function(){
    return view('contact');
  });
  Route::get('/save', function(){
    return view('save');
  });
    



Route::resource('boletines', BoletineController::class);
Route::resource('solicitudes', SolicitudeController::class);
Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/submit', [ContactController::class, 'submitForm']);
Route::post('/contact', 'App\Http\Controllers\ContactController@submitForm');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
