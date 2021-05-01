<?php

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
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
    //  return view('welcome');

 /*
    $producto = Product::where('id',1)->first();
    dd($producto);
 */ 

  /* $producto = Product::all();    // esto es un select *, tenemos todos los registors de la tabla
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

    
    $balon = Product::find(51);

    dd($balon->categories()->get());


});


