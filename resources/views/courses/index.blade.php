@extends('layouts.layout')
@section('conteudo')
    <div class="title m-b-md">
        myCourses
    </div>
    <a class="btn btn-success" href="{{ route('course.create') }}" >
        Inserir curso
    </a>
    <br>
    <br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nome</th>
      <th scope="col">Conteudo</th>
      <th scope="col">Horário</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>


  @foreach($courses as $course)
    <tr>
      <th scope="row">{{$course->id}}</th>
      <td>{{$course->name}}</td>
      <td>{{$course->content}}</td>
      <td>{{$course->date}}</td>
      <td>
      <a class="btn btn-success" href="{{route('course.edit',$course->id)}}" >
      Editar
      </a>

      <form method="POST" action="{{route('course.delete',$course->id)}}" >
      @csrf
      {!! method_field('delete')  !!}
        <button type="submit" class="btn btn-danger">
            Deletar
        </button>
      </form>

      </td>
    </tr>
    @endforeach

  </tbody>
</table>



@endsection
