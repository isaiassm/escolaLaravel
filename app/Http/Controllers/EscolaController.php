<?php

namespace App\Http\Controllers;
use \App\Alunos;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function lista()
    {
        $alunos = Alunos::all();
        return view('alunos')->with('alunos',$alunos);
    }

    public function form(){
        return view('alunosForm');
    }

    public function adiciona(Request $request)
    {
        Alunos::create($request->all());
        return redirect('/alunos');
    }
    public function remove($id)
    {
        $aluno =  Alunos::find($id); 
        $aluno->delete();
        return redirect()->action('EscolaController@lista');
    }
}
