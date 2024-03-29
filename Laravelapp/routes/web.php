<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

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
});
//Route::get('/pet', function()
//{
   // return view('pet.index');
//});
//Route::get('pet/create', [PetController::class, 'create']);
// accedemos a la PetController, y al metodo create 
Route::resource('pet', PetController::class);
