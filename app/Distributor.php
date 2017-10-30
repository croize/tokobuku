<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table = 'distributor';
    protected $primaryKey = "id_distributor";
    public $timestamps = false;

    public function pasok(){
      return $this->hasMany('App\Pasok');
    }

}
