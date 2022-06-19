<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model{
    protected $primaryKey= "Nome_utente";
    protected $autoIncrement=false;
    protected $keyType="string";
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $fillable = ['Nome_utente', 'Email', 'Cellulare', 'Pass'];
    public function carrellos(){
        return $this->belongsToMany('App/models/catalogos');
    }
}
?>
