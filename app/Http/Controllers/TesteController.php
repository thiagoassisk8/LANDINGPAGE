<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function teste(int $p1,int $p2){
        // echo"a soma de $p1 + $p2 é igual a ".($p1+$p2);
        //ARRAY ASSOCIATIVO
        // return view('site.teste',['x'=>$p1+$p2]); //site.teste tá associado a view/teste/teste.blade.php

        // return view('site.teste',compact('p1','p2')); //compact
        
        return view('site.teste')->with('p1',$p1)->with('p2',$p2);
    }
}
