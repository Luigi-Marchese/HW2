<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\clientes;
use Illuminate\Support\Facades\Session;


class loginController extends BaseController
{
    protected function login(){
        $request=request();
        $pwd=sha1($request['password']);
        $cliente = clientes::where('Nome_utente', $request['nomeUtente'])
                            ->where('pass', $pwd)->first();
        if($cliente !== null){
            Session::put('utente', $request['nomeUtente']);
            return  view ('catalogo');
        }else
            return view('login');
    }

    public function controlloLogin(){
        $session_id = session('utente');
        $cliente = clientes::find($session_id);
        if (!isset($cliente))
            return view('login');
        return view("catalogo");
    }

    public function controlloLoginCarrello(){
        $session_id = session('utente');
        $cliente = clientes::find($session_id);
        if (!isset($cliente))
            return view('login');
        return view("carrello");
    }


    public function logout(){
        Session::flush();
        return view('home');
    }
}
?>