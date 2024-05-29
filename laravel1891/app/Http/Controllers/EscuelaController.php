<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    
    public function create(){

        return view('escuela');
        
           }


           
        public function escuelitas (Request $request){
        
            $escuela = new Escuela();
        
            $escuela->name=$request->name;
            $escuela->identification=$request->identification;
         
            $escuela->save();
            return $escuela;
        }
    
}
