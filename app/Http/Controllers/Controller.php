<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
        public function homepage()
    {

    	$titulo = "Homepage";
return view('welcome', [
	'title' => $titulo
]);

    }

    public function cadastrar(){
    	echo "Tela de cadastro!";
    }
        public function curl(){
    return view ('user.curl');
    }
    public function fazerLogin(){
  return view ('user.login');
    }
    
}
