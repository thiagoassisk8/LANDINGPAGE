<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function contato(){
        echo '(61)99323-0106';
        return view('site.contatos');
    }
}
