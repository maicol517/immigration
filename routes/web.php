<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/', HomeController::class)->name('home');
//Route::get('/web', [WebController::class, 'popular']);
Route::resource('service', ServiceController::class)->names('service');
Route::resource('tax', TaxController::class)->names('tax');

/*Route::get('tax', [TaxController::class, 'index']);
Route::get('tax/create', TaxController::class, 'create');*/
//Route::get('tax', TaxController::class, 'index')->name('tax.index');
//Route::post('/tax', TaxController::class, 'store')->name('tax.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
