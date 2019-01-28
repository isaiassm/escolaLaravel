<?php

namespace App\Http\Controllers;

use \App\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function lista(){

        $turmas = Turma::all();
        return view ('turmas')->with('turmas', $turmas);
    }

    public function form()
    {
        return view ('turmasForm');
    }

    public function adiciona(Request $request)
    {
         Turma::create($request->all());
         return redirect ('/turmas');
    }

    public function remove($id)
    {
        $turmas = Turma::find($id);
        $turmas->delete();
        return redirect()->action('TurmaController@lista');
    }
}
