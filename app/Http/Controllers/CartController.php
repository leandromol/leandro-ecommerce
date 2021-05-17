<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session() -> has('cart') == false ) {
            return redirect() -> route('products.index');    
        }
        else {

            $cartProducts = session() -> get ('cart.products');
          
            return view('components/cart.index', compact('cartProducts'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    function addProductsToCart ($productSelected,$amount) {

        if(session()->has('cart') == false) {
            session()->put('cart', [ 'products' => [] ]);
        }

        //1. confirmamos si el producto que se va agregar ya esta en el carrito

        $cartProducts = session()->get('cart.products');
        

        $indexFoundProduct = collect(session()->get('cart.products')) -> search(function ($cartProduct) use ($productSelected) {

            return $cartProduct['product']->id == $productSelected->id ;
        });



        if($indexFoundProduct != false) {

        // si ya esta en carrito
        // sumamos al carrito la cantidad de productos con los que ya estan
       
        
        $cartProducts[$indexFoundProduct]['amount'] += $amount;

        //2.2 reemplazamos de nuevo todo el carrito

        session()->put('cart.products',$cartProducts);

        session()->flash('status',"se actualizo cantidad de $productSelected->name en el carrito");

        }else {

                  // si el producto aun no esta en el carrito, realizamos un push
           
                  
        session()->push('cart.products', ['product'=> $productSelected, 'amount' => $amount]);   
        session()->flash('status',"se agrego producto $productSelected->name al carrito");
       
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $productSelected = Product::find($request->productId);
        
        $amount = $request -> amount;

        $this->addProductsToCart($productSelected,$amount);
       
        return redirect()->route('products.index');
    }


    public function addOne(Product $product)
    {
        $this->addProductsToCart($product,1);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //   dd($id);
         
    }
}