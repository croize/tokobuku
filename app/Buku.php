<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    public $timestamps = false;
    protected $primaryKey = 'id_buku';

    public function pasok()
    {
      return $this->hasMany('App\Pasok');
    }

    public function penjualan()
    {
      return $this->hasMany('App\Penjualan');
    }

}
