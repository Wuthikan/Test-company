<?php

namespace App\Http\Controllers;

use App\Http\Request;
use App\Http\Controllers\Controller;


use App\http\request\calculationRequest;

class CalculationController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function concrettebox()
  {
      return view('calculate.concrettebox');
  }
  public function calculation()
  {
      return view('calculate.calculation');
  }
  public function concrette()
  {
      return view('calculate.concrette');
  }
  // public function addconcrete(calculationRequest $request)
  // {
  //     return view('calculate.calculation');
  // }

}
