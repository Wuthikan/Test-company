<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = "product";
  protected $fillable = ['name' ,'detail' ,'size','price','pic','type'];

  public function baskets(){
    return $this->hasMany('App\Baskets');
  }
  public function typeproducts(){
    return $this->belongsTo('App\Product', 'type');
  }
  public function stocks(){
    return $this->belongsTo('App\Stock');
  }
}
