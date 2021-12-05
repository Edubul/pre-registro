<?php

use App\Models\GameAccount;
use App\Models\MasterAccount;
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

Route::get('/',[\App\Http\Controllers\MasterAccountController::class,'index'])->name('index');

Route::get('/game-register', function () {
    return view('game.create');
})->middleware('gameaccount');

Route::get('/logouts', [\App\Http\Controllers\MasterAccountController::class,'logOut'])->name('logout.master_account');

// Route::middleware(['auth:master', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
