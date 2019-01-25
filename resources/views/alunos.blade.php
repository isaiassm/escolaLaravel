@extends('principal')

@section('conteudo')

@foreach ($alunos as $aluno)
<table class="table">
        <thead>
          <tr>

            <th scope="col">id: </th>
            <th scope="col">Nome: </th>
            <th scope="col">Idade:</th>
            <th scope="col">Matricula</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
          <th scope="row">{{$aluno->id}}</th>
            <td>{{$aluno->name}}</td>
            <td>{{$aluno->idade}}</td>
            <td>{{$aluno->matricula}}</td>
            
            <td>
            <a class='text-danger' href="/alunos/remove/{{$aluno->id}}"> Remover

            </td>
            
          </tr>
        </tbody>
      </table>
      @endforeach  
      <a class='text-danger' href="/alunos/form/"> Cadastrar Novo aluno
    
      <a class='text-danger' href="/alunos/form/"> Cadastrar Novo Professor