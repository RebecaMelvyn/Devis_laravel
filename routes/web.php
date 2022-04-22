<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;
use App\Models\Client;
use App\Models\Mission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard', ['clients' => Client::all()], ['missions' => Mission::all()]);
} )->name('dashboard');

Route::post('/auth/registration', [SocialiteController::class, 'registration'])->name('auth.registration');
Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('auth.redirect');
Route::get('/auth/signout', [SocialiteController::class, 'signOut'])->name('auth.signout');
Route::get('/auth/register', [SocialiteController::class, 'register'])->name('register');
Route::get('/auth/callback', [SocialiteController::class, 'callback'])->name('auth.callback');
Route::put('/auth/update', [SocialiteController::class, 'update'])->name('auth.update');

//Route::get('/register', [DevisController::class, 'create'])->name('register');
Route::get('/user/invoice/{invoice}', function (Request $request, $invoiceId) {
    return $request->user()->downloadInvoice($invoiceId, [
        'title' => 'Your Company',
        'ref' => 'Your Product',
    ]);
});

Route::get('/devis/create', [DevisController::class, 'create'])->name('devis.create');
Route::post('/devis/store', [DevisController::class, 'store'])->name('devis.store');
Route::post('/devis/createPdf', [DevisController::class, 'createPdf'])->name('devis.createPdf');
Route::get('/devis/show/{mission}', [DevisController::class, 'show'])->name('devis.show');


Route::get('/user/show', [UserController::class, 'show'])->name('users.show');
Route::get('/user/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/user/delete', [UserController::class, 'destroy'])->name('users.delete');

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients/store', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/show/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::delete('/clients/delete/{client}', [ClientController::class, 'destroy'])->name('clients.delete');
Route::get('/clients/edit/{client}', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/update/{client}', [ClientController::class, 'update'])->name('clients.update');
