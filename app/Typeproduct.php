<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeproduct extends Model
{
  protected $table = "typeproduct";
  protected $fillable = ['name' ,'detail'];

  public function product(){
    return $this->hasMany('App\Product');
  }
}
