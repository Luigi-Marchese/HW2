<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\catalogos;
use App\Models\clientes;
use Illuminate\Support\Facades\Session;



class catalogoController extends BaseController
{
    public function ricerca($parametro){
        $session_id = session('utente');
        $cliente = clientes::find($session_id);
        if (!isset($cliente))
            return view('login');
       else{ 
            $prodotti = catalogos::where('marca','like', '%'. $parametro . '%')
                                 ->orWhere('modello', 'like', '%'. $parametro . '%')->get();
            return $prodotti;
        }
     }

}
?>