@extends('principal')

@section('conteudo')

@foreach ($turmas as $turma)

<table class="table">
        <thead>
          <tr>

            <th scope="col">id: </th>
            <th scope="col">Turma: </th>
         
            
          </tr>
        </thead>
        <tbody>
          <tr>
          <th scope="row">{{$turma->id}}</th>
            <td>{{$turma->name}}</td>
         
            
            <td>
            <a class='text-danger' href="/turmas/remove/{{$turma->id}}"> Remover

            </td>
            
          </tr>
        </tbody>
      </table>
      @endforeach  
      
      <a type="button" class='btn btn-danger' href="/alunos/form/"> Cadastrar Novo(a) aluno </a>
    
      <a type="button"  class='btn btn-danger' href="/professores/form/"> Cadastrar Novo(a) Professor </a>

      <a type="button"  class='btn btn-danger' href="/turmas/form/"> Cadastrar Nova Turma </a>