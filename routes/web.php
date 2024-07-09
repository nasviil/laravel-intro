<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ibotikaController;
use App\Http\Controllers\ImitateController;
use App\Http\Controllers\eTanomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'pages'], function () {
    Route::get('/hello', [PageController::class, 'hello']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/contact', [PageController::class, 'contact']);
    Route::get('/faq', [PageController::class, 'faq']);
    Route::get('/email', [PageController::class, 'email']);
});

Route::get('/ibotika', [ibotikaController::class, 'index']);

Route::group(['prefix' => 'imitate'], function () {
    Route::get('/index', [ImitateController::class, 'index']);
    Route::get('/spotify', [ImitateController::class, 'spotify']);
    Route::get('/discord', [ImitateController::class, 'discord']);
});

Route::group(['prefix' => 'etanom'], function () {
    Route::get('/login', [eTanomController::class, 'login']);
    Route::get('/signup', [eTanomController::class, 'signup']);
    Route::get('/login', [eTanomController::class, 'email_login']);
    Route::get('/signup2', [eTanomController::class, 'email_signup']);
    Route::get('/home/orders', [eTanomController::class, 'home_orders']);
    Route::get('/home/planting', [eTanomController::class, 'home_planting']);
    Route::get('/home/planted', [eTanomController::class, 'home_planted']);
    Route::get('/signup/details', [eTanomController::class, 'signup_details']);
    Route::get('/signup/details/id', [eTanomController::class, 'signup_id']);
});

require __DIR__ . '/auth.php';
