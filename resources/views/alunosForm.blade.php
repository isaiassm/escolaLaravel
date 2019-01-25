@extends('principal')

@section('conteudo')

<form action="/alunos/adiciona" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="form-group">
            <div class="   col-md-6 offset-md-3">
      <label>Nome:</label>
      <input name="name" class="form-control" aria-describedby="emailHelp" placeholder="name"> 
    </div>
    </div>
    <div class="form-group">
            <div class="   col-md-6 offset-md-3">
      <label>Idade:</label>
      <input name="idade" class="form-control"  placeholder="idaide">
    </div>
    </div>
    <div class="form-group">
            <div class="   col-md-6 offset-md-3">
      <label>Matricula:</label>
      <input name="matricula" class="form-control" placeholder="Matricula">
    </div>
    </div>
    <div class="   col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
  </form>