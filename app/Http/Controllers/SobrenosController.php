<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobrenosController extends Controller
{
    public function sobrenos(){
        //site indica o repositorio
        return view('site.sobrenos');
    }
}
