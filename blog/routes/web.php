<?php

use App\Http\Controllers\SampleController;
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
});

Route::get('/{title}/{id}/{cat}', [SampleController::class, 'index'])
->where([
    'title' => '^[A-Za-z]+$',
    'id' => '^[0-9]+$',
    'cat' => '^(economy|sport|values)$'
]);