<?php

use App\ProductPhoto;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/product/{slug}', 'HomeController@single')->name('product.single');

Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', 'CartController@index')->name('index');
    Route::post('add', 'CartController@add')->name('add');
    Route::get('remove/{slug}', 'CartController@remove')->name('remove');
    Route::get('cancel', 'CartController@cancel')->name('cancel');

});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->namespace('Admin')->group(function () {
        Route::name('admin.')->group(function () {
            Route::resource('products', 'ProductController');
            Route::resource('stores', 'StoreController');
            Route::resource('categories', 'CategoryController');
            Route::post('photos/remove/', 'ProductPhotoController@removePhoto')->name('photo.remove');
        });
    });
});

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/model', function () {
//     // $products = \App\Product::all();

//     // $user = new \App\User();
//     // $user = \App\User::find(1);
//     // $user->name = 'Atualizado Usuario Teste';
//     // $user->email = 'email@teste.com';
//     // $user->password = bcrypt('12345');
//     // $user->save();

//     // return \App\User::where('name', 'Marty Cruickshank')->first(); // Retorna o que for encontrado no Where como condição.
//     // return \App\User::all(); // Retorna todos os Usuarios do Banco.
//     // return \App\User::find(1); // Retorna um Usuario com id Especifico.
//     // return \App\User::paginate(10); // Retorna os Usuarios com paginação.

//     // Mass Assignment - Atrivuição em Massa
//     // $user = \App\User::create([
//     //     'name' => 'Higor Henrique',
//     //     'email' => 'ff@gg.com',
//     //     'password' => bcrypt('123456778')
//     // ]);

//     // dd($user);

//     // $user = \App\User::find(52);
//     // $user->update([
//     //     'name' => 'Atualiza com mass update'
//     // ]);
//     // dd($user);

//     // Como pegar a loja de um Usuario
//     // $user = \App\User::find(4);
//     // dd($user->store());

//     // Como pegar produtos de uma loja
//     // $loja = \App\Store::find(1);
//     // return $loja->products;

//     //  Criar uma loja para um Usuario.
//     // $user = \App\User::find(10);
//     // $store = $user->store()->create([
//     //     'name' => 'Loja Teste',
//     //     'description' => 'Loja do Higao',
//     //     'mobile_phone' => 'xx-xxxx-xxx-x-',
//     //     'phone' => 'xxx-xxx-xxx',
//     //     'slug' => 'loja-teste'
//     // ]);
//     // dd($store);


//     // Criar um produto para uma loja.
//     // $store = \App\Store::find(41);
//     // $product = $store->products()->create([
//     //     'name' => 'Notebook Dell',
//     //     'description' => 'Core i5 10GB 5T',
//     //     'body' => 'Qalquer Coisa',
//     //     'price' => 2999, 99,
//     //     'slug' => 'notebook-dell',
//     // ]);
//     // dd($product);


//     // Criar uma categoria 
//     // $category = \App\Category::create([
//     //     'name' => 'Games',
//     //     'description' => 'Todos os Games',
//     //     'slug' => 'games'
//     // ]);

//     // $category = \App\Category::create([
//     //     'name' => 'Notebooks',
//     //     'description' => 'Todos os Notebook',
//     //     'slug' => 'notebooks'
//     // ]);

//     // return $category->all();


//     // Adicionar um produto para uma categoria ou vice-versa.

//     // $product = \App\Product::find(49);
//     // $product->categories()->sync([1, 2]);
//     // dd($product);


//     // return \App\User::all();
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
