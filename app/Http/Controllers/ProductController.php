<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {    
      

        $name = Input::get ( 'name' );;

        if (!empty($name)) {
            $products=Product::where('name','LIKE','%' . $name . '%')->get();
        }
        else{
             $products = Product::all();
        }

        $sum=Product::sum('price');

        return view('product.index',compact('products','sum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $input = $request->all();


            Product::create([
                'name'  =>  $input['name'],
                'price'  =>  $input['price'],
                'description'  =>  $input['description']

            ]);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::where('id',$product->id)->first();
        return view('product.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      
      
        $products = Product::where('id',$product->id)->first();

        return view('product.edit', compact('products'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */   
    public function update(Request $request, Product $product)
    {
            $input = $request->all();

            $product->update([
                'name'  =>  $input['name'],
                'price'  =>  $input['price'],
                'description'  =>  $input['description']

            ]);

            return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
    }
}
