<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
  protected $table = 'penjualan';
  protected $primaryKey = "id_penjualan";
  public $timestamps = false;

  public function buku(){
    return $this->belongsTo('App\Buku','id_buku','id_buku');
  }

  public function kasir(){
    return $this->belongsTo('App\User','id_kasir','id');
  }
}
