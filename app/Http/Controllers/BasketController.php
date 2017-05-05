<?php

namespace App\Http\Controllers;

use Cookie;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Baskets;
use App\Product;
use App\Typeproduct;

use Request;
use Auth;

use App\Http\Requests\BasketsRequest;

class BasketController extends Controller
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
      $iduser = Auth::user()->id;
      $buskets = Baskets::find($iduser);
        if(empty($buskets))
          abort(404);
    
      dd($buskets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BasketsRequest $request)
    {
      $type =  $request->get('type');
          if($type==1){
                $baskets = new Baskets($request->all());
                $baskets->idemployee = Auth::user()->id;
                $baskets->idproduct = '1';
                $baskets->save();

                return redirect('basket');
          }
          else {
              echo "ss";
          }
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
        //
    }
}
