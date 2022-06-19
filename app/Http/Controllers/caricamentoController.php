<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\logos;
use App\Models\contenutos;
use App\Models\catalogos;
use App\Models\carrellos;


class caricamentoController extends BaseController
{
    protected function riempiBrand() {

        $brand = logos::all();        
        return $brand;
    }
    
    protected function riempiContenuto(){
        //mongodb
        $contentuto = contenutos::all();        
        return $contentuto;
    }

    protected function riempiCatalogo(){
        $prodotti = catalogos::all();        
        return $prodotti;
    }
    
    protected function riempiCarrello(){
        $prodotti = carrellos::join('catalogos', 'id_moto', '=', 'id')
                                ->join('clientes', 'clientes.Nome_utente', '=', 'carrellos.nome_utente')->get();        
        return $prodotti;
    }
}
?>