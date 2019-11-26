<?php

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

use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', function () {

    return view('products', ['products' => \App\Product::all() ] );
});
Route::get('/product/{product}', function (\App\Product $product) {

    return view('info', ['product' => $product ] );
});

Route::get('/register/linkedin', function(){
    return Socialite::with('LinkedIn')->redirect();
})->name('registerLinkedin');

Route::get('/register/linkedin/callback', function(){
    $user = Socialite::driver('LinkedIn')->stateless()->user();
    Auth::authenticate()->getAuthIdentifierName();
    Auth::authenticate()->getEmailForVerification();
    return redirect()->route('home');
});



Auth::routes();

Route::get('/profil', 'ProfilController@index')->name('profil');
