<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use App\Http\Controllers\ClientController;

use App\Http\Livewire\Clients\Entollement;
// use App\Http\Livewire\MiComponente;
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


Route::get("/start", [StartController::class,"start"]);




// * start client
Route::get("/client", [ClientController::class,"client"]);

// Route::get("/demo_demo", [Entollement::class,"demo_demo"]);

