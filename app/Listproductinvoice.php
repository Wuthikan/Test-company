<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listproductinvoice extends Model
{
  protected $table = "listproductinvoice";
  protected $fillable = ['idinvoice' ,'idproduct' ,'amount','extra','published_at'];
}
