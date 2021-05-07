<?php

use App\Http\Controllers\ProductController;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use illuminate\Support\Facades\Route;
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


/*
Route::get('/', function () {

   // return view('welcome');

    $producto = Product::find(5);
    dd($producto->name); 
});

*/
/*
Route::get('/productos/{cat1}', function ($categoria = 'todas') {

   // return "hola vista productos";

   // return view('welcome');

    switch ($categoria) {

        case 'tecnologia';
        return "productos de tecnologia";
        break;
      
        case 'hogar';
        return "productos de hogar";
        break;

        case 'todas';
        return "retornando todos los productos";
        break;

        default:
        return "no existe categoria";
        break;

    }

});



Route::get('/leer', function () {

    echo  "hola";
 
    $producto = Product::where('id',1)->first();
    dd($producto);
 */

// esto es un select *, tenemos todos los registors de la tabla
/* $producto = Product::all();    
dd($producto);

*/

/*  
    $productos = Product::where('available', true)->get();   
    foreach($productos as $producto) {
        echo($producto->name);
        echo("<br>");
    } 
     
*/

/*  
    insert
    $nuevoProducto = new Product();
    $nuevoProducto->name = "iPhone 13 super pro max";
    $nuevoProducto->price = 10000000;
    $nuevoProducto->description = "lo mismo mas caro";
    $nuevoProducto->save(); 


    /* 
    update
    $iphone13= Product::find(51); metodo find busca por id
    $iphone13->price = 16800000;
    $iphone13->save();
    dd($iphone13); 
    */

/* 
    delete
    $iphone13 = Product::find(51);
    $iphone13->delete();
    dd($iphone13); 
    */


/*    
$leandro = User::find(1);
dd($leandro->orders()->get());
*/

/*
$order1 = Order::find(1);
dd ($order1 -> products);
*/

  /*  $balon = Product::find(1);
    dd($balon->images); 
*/


/*

Route::get('/productos', function () {


    $productos = Product::where('available', true)->get();

    // dd($productos[0]->images[0]->url);
    return view('components.products',compact('productos'));
});
 
*/

Route::resource('products', ProductController::class);