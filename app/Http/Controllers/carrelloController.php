<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\catalogos;
use App\Models\clientes;
use App\Models\carrellos;
use Illuminate\Support\Facades\Session;



class carrelloController extends BaseController
{
    public function aggiungi($parametro){
        $session_id = session('utente');
        $cliente = clientes::find($session_id);//togliloe
        if (!isset($cliente))
            return view('login');
       else{ 
           $prodotto=carrellos::where('nome_utente', $session_id)
                                ->Where('id_moto', $parametro)->first();
            if($prodotto !== NULL){
                carrellos::where('nome_utente', $session_id)
                           ->Where('id_moto', $parametro)->update(['quantita'=>$prodotto->quantita + '1']);
            }else{
                carrellos::insert([
                    'nome_utente' => $session_id,
                    'id_moto' => $parametro,
                    'quantita' => '1',
                    ]);
            }
        }
    }

    public function elimina($parametro){
        $session_id = session('utente');
        $cliente = clientes::find($session_id);//toglilo
        if (!isset($cliente))
            return view('login');
       else{ 
            $tot=carrellos::where('nome_utente', $session_id)
                    ->Where('id_moto', $parametro)->value('quantita');
            if($tot>1){
                carrellos::where('nome_utente', $session_id)
                           ->Where('id_moto', $parametro)->update(['quantita'=>$tot - '1']);
            }else if($tot===1){
                $tot=carrellos::where('nome_utente', $session_id)
                    ->Where('id_moto', $parametro)->delete();
            }

        }
     }

}
?>