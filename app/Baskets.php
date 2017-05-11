<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Baskets extends Model
{
  protected $table = "baskets";
  protected $fillable = ['amount' ,'type' ,'idproduct','idemployee','extra'];

  public function products(){
    return $this->belongsTo('App\Product', 'idproduct');
  }
  public function user(){
    return $this->belongsTo('App\User');
  }

  public function scopeWhereemployee($query)
  {
    $query->where('idemployee','=', Auth::user()->id);
  }
}
