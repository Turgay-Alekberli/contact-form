<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ContactController;

use App\Http\Controllers\Site\Form\ContactHandleController;

use App\Http\Controllers\Site\Option\SetLocaleController;

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

Route::get('/', HomeController::class)->name('site.home');
Route::get('/contacts', ContactController::class)->name('site.pages.contacts');

Route::post('contacts/handle', [ContactHandleController::class, 'handle'])->name('site.forms.contacts.handle');

Route::get('set-lang/{lang}', SetLocaleController::class)->name('site.option.set-lang');
