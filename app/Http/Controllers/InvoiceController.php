<?php

namespace App\Http\Controllers;

use Cookie;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Typeproduct;
use App\Baskets;
use App\Invoice;
use App\Listproductinvoice;

use Request;
use App\Http\Requests\InvoiceRequest;
use Auth;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $baskets = Baskets::get();
        return view('invoice.PriceForCus', compact('baskets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {
      $invoices = new Invoice($request->all());
      $invoices->save();
      $dateinvoice   = Invoice::orderBy('id', 'desc')->first();

      $date   = Baskets::whereemployee()->get();
      foreach ($date as $basket) {
        $idinvoice = $dateinvoice->id;
        $idproduct = $basket->idproduct;
        $amount = $basket->amount;
        $extra = $basket->extra;

        $array = ['idinvoice' => $idinvoice,
         'idproduct' => $idproduct,
         'amount' => $amount,
         'extra' => $extra
          ];
          $lish = new Listproductinvoice($array);
          $lish->save();
      }
      $iduser = Auth::user()->id;
      $basketZ = Baskets::where('idemployee', $iduser);
      $basketZ->delete();

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
