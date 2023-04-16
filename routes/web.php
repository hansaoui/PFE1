<?php

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
    return view('Home');
});

<<<<<<< HEAD
Route::get('devis' , function () {
    return view('Devis');
});




=======
Route::get('/about', function () {
    return 'hello ayman';
});
>>>>>>> def80c6904b983baf28fcafd0488b7ebf42f9750
