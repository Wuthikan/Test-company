<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
  protected $table = "baskets";
  protected $fillable = ['amount' ,'type' ,'idproduct','idemployee','extra'];

  public function user(){
    return $this->belongsTo('App\User');
  }
  public function products(){
    return $this->belongsTo('App\Product');
  }
}
