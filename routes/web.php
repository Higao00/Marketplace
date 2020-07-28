<?php

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

Route::get('/', function () {
    $helloWord = 'Hello Word';
    return view('welcome', compact('helloWord'));
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/model', function () {
    // $products = \App\Product::all();

    // $user = new \App\User();
    // $user = \App\User::find(1);
    // $user->name = 'Atualizado Usuario Teste';
    // $user->email = 'email@teste.com';
    // $user->password = bcrypt('12345');
    // $user->save();

    // return \App\User::where('name', 'Marty Cruickshank')->first(); // Retorna o que for encontrado no Where como condição.
    // return \App\User::all(); // Retorna todos os Usuarios do Banco.
    // return \App\User::find(1); // Retorna um Usuario com id Especifico.
    // return \App\User::paginate(10); // Retorna os Usuarios com paginação.

    // Mass Assignment - Atrivuição em Massa
    // $user = \App\User::create([
    //     'name' => 'Higor Henrique',
    //     'email' => 'ff@gg.com',
    //     'password' => bcrypt('123456778')
    // ]);

    // dd($user);

    // $user = \App\User::find(52);
    // $user->update([
    //     'name' => 'Atualiza com mass update'
    // ]);
    // dd($user);

    

    return \App\User::all();
});
