<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/fees-stucture',[PageController::class,'FeesStucture'])->name('page.fees-stucture');
Route::get('/admission-rules',[PageController::class,'AdmissionRules'])->name('page.admission-rules');
Route::get('/contact',[PageController::class,'contact'])->name('page.contact');
Route::get('/apply-now',[PageController::class,'apply'])->name('apply');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
