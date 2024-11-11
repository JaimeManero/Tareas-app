<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function index(){
        return view("tareas.index");
    }
    public function create(){
        return view("tareas.create");
    }
    public function store(Request $request){
        $tarea=new Tarea();
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->trabajador_id = $request->trabajador_id;
        $tarea->save();


    }
}
