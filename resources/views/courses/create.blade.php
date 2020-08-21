@extends('layouts.layout')
@section('conteudo')
<div class="title m-b-md">
    <h3>Criar um curso</h3>
</div>
<a class="btn btn-success" href="{{ route('index') }}" >
        Voltar
    </a>
    <br>
    <br>

<form method="POST" action="{{ route('course.store') }}">
    @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome">
  </div>

  <div class="form-group">
    <label for="content">Conteudo</label>
    <textarea class="form-control" id="content" name="content"></textarea>
  </div>

  <div class="form-group">
    <label for="date">Horário</label>
    <input type="datetime-local" class="form-control" id="date" name="date">
  </div>

    <button type="submit" class="btn btn-success">Enviar</button>

</form>

@endsection
