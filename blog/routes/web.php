<?php

use App\Http\Controllers\CatController;
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
*/

Route::get('/', function () {
    return view('welcome');
})->name('wellcome');

Route::get('/{cat}/{title}/{id}', [CatController::class, 'index'])
->where([
    'cat' => '^(economy|sport)$',
    'title' => '^[A-Za-z]+$',
    'id' => '^[0-9]+$'
]);