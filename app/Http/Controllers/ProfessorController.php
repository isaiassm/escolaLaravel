<?php

namespace App\Http\Controllers;

use \App\Professores;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    
    public function lista()
    {
        $professores = Professores::all();
        return view('professores')->with('professores',$professores);
    }

    public function form(){
        return view('professoresForm');
    }

    public function adiciona(Request $request)
    {
        Professores::create($request->all());
        return redirect('/professores');
    }
    public function remove($id)
    {
        $professor =  Professores::find($id); 
        $professor->delete();
        return redirect()->action('ProfessorController@lista');
    }
}
