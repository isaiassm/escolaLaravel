@extends('principal')

@section('conteudo')

@foreach ($professores as $professor)
<table class="table">
        <thead>
          <tr>

            <th scope="col">id: </th>
            <th scope="col">Nome: </th>
            <th scope="col">Idade:</th>
            <th scope="col">Materias</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
          <th scope="row">{{$professor->id}}</th>
            <td>{{$professor->name}}</td>
            <td>{{$professor->idade}}</td>
            <td>{{$professor->materia}}</td>
            
            <td>
            <a class='text-danger' href="/professores/remove/{{$professor->id}}"> Remover

            </td>
            
          </tr>
        </tbody>
      </table>
      @endforeach  
      <a class='text-danger' href="/alunos/form/"> Cadastrar Novo aluno
    
      <a class='text-danger' href="/professores/form/"> Cadastrar Novo Professor