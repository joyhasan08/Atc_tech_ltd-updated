<?php

use App\Http\Controllers\ContractUsController;
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
Route::get('/openings',function (){
    return view('openings');
});

Route::get('/about',function (){
    return view('about');
});

Route::get('/apply',function (){
    return view('apply');
});
Route::get('/privacy',function (){
    return view('privacy');
});
Route::get('/terms',function (){
    return view('terms');
});
Route::get('/refund',function (){
    return view('refund');
});
Route::get('/fraud',function (){
    return view('fraud');
});
Route::get('/aboutUs',function (){
    return view('aboutUs');
});
Route::get('/report',function (){
    return view('report');
});
Route::get('/academy',function (){
    return view('academy');
});
Route::get('/notice',function (){
    return view('notice');
});

Route::post('/submit_message', [ContractUsController::class, 'submitMessage'])->name('submit_message');
