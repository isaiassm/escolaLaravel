@extends('principal')

@section('conteudo')

<br>
<div >
<a onclick="this.style.display = 'none'; document.getElementById('hidden').style.display = 'block'" href="https://get.adobe.com/flashplayer/" target="_blank">Clique aqui</a>
</div>
<br>
<br>

<script>

</script>

@foreach ($alunos as $aluno)
<div class="textcentered" >
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
      
      <a type="button" class='btn btn-danger' href="/alunos/form/"> Cadastrar Novo(a) aluno </a>
    
      <a type="button"  class='btn btn-danger' href="/professores/form/"> Cadastrar Novo(a) Professor </a>

      <a type="button"  class='btn btn-danger' href="/turmas/form/"> Cadastrar Nova Turma </a>

    </div>