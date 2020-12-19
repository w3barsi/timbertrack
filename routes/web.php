<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Order\OrderPage;
use App\Http\Livewire\Stock\StockPage;
use App\Http\Controllers\StockController;
use App\Http\Livewire\Order\OrderCheckPage;
use App\Http\Controllers\ResupplyController;
use App\Http\Livewire\Progress\ProgressPage;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/Stocks', StockPage::class)->name('Stocks');
    Route::get('/Orders', OrderPage::class)->name('Orders');
    Route::get('/Orders/{order}', OrderCheckPage::class)->name('Orders.order');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/Resupply', [ResupplyController::class, 'index'])->name('Resupply');
    Route::get('/Resupply/wood', [ResupplyController::class, 'wood'])->name('Resupply/wood');
    Route::get('/Resupply/plastic', [ResupplyController::class, 'plastic'])->name('Resupply/plastic');
    Route::get('/Resupply/concrete', [ResupplyController::class, 'concrete'])->name('Resupply/concrete');
    Route::get('/Resupply/metal', [ResupplyController::class, 'metal'])->name('Resupply/metal');
    Route::get('/Resupply/others', [ResupplyController::class, 'others'])->name('Resupply/others');
});

Route::get('/login', function () {
    return view('Base/index-login', ['login' => true]);
})->name('login');

Route::get('/', function () {
    return view('Base/index');
})->name('index');


// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');


Route::get('/Dashboard', function () {
    return view('Official-Content/Dashboard');
});

Route::get('/Registered', function () {
    return view('Official-Content/Registered');
});


Route::get('/About', function () {
    return view('Base/about');
});

Route::get('Contact', function () {
    return view('Base/contact');
});