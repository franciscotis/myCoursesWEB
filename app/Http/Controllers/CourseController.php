<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    // VER TODOS OS CURSOS (LISTAGEM) => GET ok
    // INSERIR NOVO CURSO (INSERÇÃO) => POST ok
    // EDITAR UM CURSO EXISTENTE (EDIÇÃO) => PUT ok
    // DELETAR UM CURSO EXISTENTE (REMOÇÃO) => DELETE ok

    public function index(){ //Método inicial
        $courses = Course::all(); // select * from courses;
        return view('courses.index', compact('courses'));
    }

    public function create(){ // Retornar a view para a pessoa inserir os dados
        return view('courses.create');
    }

    public function store(Request $request){ //Método para armazenar os dados
        $course = new Course();
        $course->name = $request->name;
        $course->content = $request->content;
        $course->date = $request->date;
        $course->save();
        return redirect()->route('index');

    }

    public function edit($id){  // Método que chama a view para o usuário editar os dados
        $course = Course::find($id);
        return view('courses.edit',compact('course'));
    }

    public function update(Request $request, $id){ // Método que edita os dados
        $course = Course::find($id);
        $course->name = $request->name;
        $course->content = $request->content;
        $course->date = $request->date;
        $course->save();
        return redirect()->route('index');
    }

    public function delete(Request $request, $id){ // Método que deleta o dado
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('index');
    }
 }
