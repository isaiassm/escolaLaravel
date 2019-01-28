@extends('principal')

@section('conteudo')

<form action="/turmas/adiciona" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="form-group">
            <div class="   col-md-6 offset-md-3">
      <label>Turma:</label>
      <input name="name" class="form-control" placeholder="Letra Relacionada a Turma exemplo:'A'"> 
    </div>
    </div>
    <div class="   col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
  </form>