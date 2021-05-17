<?php

use App\Http\Controllers\CartController;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\ProductsSeeder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MoreProductController;
use PhpParser\Node\Stmt\Foreach_;





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


// Route::get('/', function () {
//     return view('welcome');
// });


// // productos?cats=1,2,3,4
// Route::get('/productos', function () {

//     $productos = Product::where('available',true)->get();

//     //dd($productos[0]->images[0]->url);
//     return view('components.products', compact ('productos'));

// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('products', ProductController::class);

Route::resource('moreProduct', MoreProductController::class);

Route::resource('cart', CartController::class);

Route::get('cart/addOne/{product}', [CartController::class, 'addOne'])->name('cart.addOne');



