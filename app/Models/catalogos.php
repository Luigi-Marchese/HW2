<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class catalogos extends Model{
    protected $connection = 'mysql';
    public $timestamps = false;
    public function carrellos(){
        return $this->belongsToMany('App/models/clientes');
    }
}
?>
