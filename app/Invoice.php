<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $table = "invoice";
  protected $fillable = ['idemployee' ,'idcustomer' ,'price','discount','published_at'];
  public function users(){
    return $this->belongsTo('App\User');
  }
}
