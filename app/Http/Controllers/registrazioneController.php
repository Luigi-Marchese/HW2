<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\clientes;


class registrazioneController extends BaseController
{
    protected function registra() {
        $request = request();
        if($this->controllo($request)){
            $pwd=sha1($request['password']);
            $reg= clientes::insert([
            'Nome_utente' => $request['nomeUtente'],
            'email' => $request['email'],
            'cellulare' => $request['cellulare'],
            'pass' => $pwd,
            ]);
            if($reg)
                return redirect('login');
            else
                return redirect('registrazione');

        }else
            return redirect('registrazione');
    }

    private function controllo($data){
        $flag=true;
        if(empty($data["nomeUtente"]) || empty($data["email"]) || empty($data["password"]) || empty($data["cellulare"]) || empty($data["c_password"]))
            $flag=false;
        
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['nomeUtente'])) 
            $flag=false;
        
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) 
            $flag=false;
        
        if (strlen($data["cellulare"]) != 10) 
            $flag=false;
        
        if (strcmp($data["password"], $data["c_password"]) != 0) 
            $flag=false;
       
        if($flag){  
            $cliente = clientes::where('Nome_utente', $data['nomeUtente'])
                            ->orWhere('email', $data['email'])
                            ->orWhere('cellulare', $data['cellulare'])->first();
            if ($cliente !== null)
                $flag=false;
        }
        return $flag;
    }

    public function controlloUtente($nome, $email, $cellulare){
        $cliente = clientes::where('Nome_utente', $data['nomeUtente'])
                            ->orWhere('email', $data['email'])
                            ->orWhere('cellulare', $data['cellulare'])->first();
        if ($cliente !== null)
            return redirect('registrazione');
    }
}
?>