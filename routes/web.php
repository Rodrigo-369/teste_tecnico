<?php

use App\Http\Controllers\ContactsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ContactsController::class, 'index'])->name('register.contact');
Route::post('/register-contact', [ContactsController::class, 'store'])->name('store.contact');
Route::get('/query-contact', [ContactsController::class, 'queryContact'])->name('query.contact');
Route::post('/contact/busca', [ContactsController::class, 'show'])->name('busca.contact');