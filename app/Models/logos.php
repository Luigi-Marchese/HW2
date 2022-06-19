<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class logos extends Model{
    protected $primaryKey= "nome";
    protected $autoIncrement=false;
    protected $keyType="string";
    public $timestamps = false;
    protected $connection = 'mysql';

}
?>
