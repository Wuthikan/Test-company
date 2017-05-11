<?php

namespace App\Http\Controllers;

use Cookie;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Typeproduct;
use App\Stock;

use Request;
use App\Http\Requests\ProductRequest;
use Auth;


class ProductController extends Controller
{


 public function __construct()
 {
     $this->middleware('auth');
 }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::get();

       return view('product.product', compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeproducts = Typeproduct::get();
             
        return view('product.createProduct', compact('typeproducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
              $products = new Product($request->all());

                  if($request->hasFile('pic')){
                    $image_fillename = $request->file('pic')
                                  ->getClientOriginalName();
                    $image_name = date("Ymd-His-").$image_fillename;
                    $public_path = 'images/products/';
                    $destination = base_path() . "/public/" . $public_path;
                    $request->file('pic')->move($destination, $image_name);
                    $products->pic = $public_path . $image_name;
                  }

                    $products->save();
                    return redirect('product');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $products = Product::find($id);
        if(empty($products))
          abort(404);
          $stocks = Stock::whereproduct($id)->get();
        return view('product.showProduct', compact('products','stocks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $products = Product::find($id);
       $typeproducts = Typeproduct::get();
       dd($stock);
        if(empty($products))
          abort(404);
        return view('product.editProduct', compact('products','typeproducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, ProductRequest $request)
    {
          $products = Product::findOrFail($id);
		      $products->update($request->all());

        		if($request->hasFile('pic')){
        			$image_fillename = $request->file('pic')
        										->getClientOriginalName();
        			$image_name = date("Ymd-His-").$image_fillename;
        			$public_path = 'images/products/';
        			$destination = base_path() . "/public/" . $public_path;
        			$request->file('pic')->move($destination, $image_name);
        			$products->pic = $public_path . $image_name;
        			$products->save();
        		}
        session()->flash('flash_message', 'Edit completed');
    		return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $products = Product::findOrFail($id);
      $products->delete();
      return redirect('product');
    }
}
