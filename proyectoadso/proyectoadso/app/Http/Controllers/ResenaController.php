<?php

namespace App\Http\Controllers;
use App\Models\Resena;
use Illuminate\Http\Request;

class ResenaController extends Controller
{
    public function index(){
        $trabajo = Resena::orderBy('id', 'desc')->get();
        return view('trabajo.listar1', compact('trabajos'));
    }
    public function create(){

        return view('trabajo.create');

    }

    public function store(Request $request){
       
      $trabajo=new Resena();
      $trabajo->Calificacion=$request->Calificacion;
      $trabajo->Comentario=$request->Comentario;
      $trabajo-> save();
      return $request;

    }
    public function destroy(Resena $trabajo) {
        $trabajo->delete();
        return redirect()->route('resena.index');
    }

    public function show(Resena $resena) {
       
     
        return view('resena', compact('resena'));

    }
}
