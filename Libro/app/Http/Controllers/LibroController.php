<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
    public function verTodos(){
        $libros = Libro::all();

        return response()->json(
            [
                'mensaje'=>'OK',
                'libros'=>$libros
            ]
        );
    }

    public function nuevo(Request $solicitud){
        $libro = Libro::create(
            [
            'isbn' => $solicitud->isbn,
            'titulo' => $solicitud->titulo,
            'autor' => $solicitud->autor,
            'genero' => $solicitud->genero
        ]
        );
        return response()->json(
            ['mensaje'=>'OK','libro'=>$libro]
        );
    }

    public function buscar(Request $solicitud){
        $busqueda = '%'.$solicitud->dato.'%';

        $libros = Libro::where('titulo','LIKE',$busqueda);

        return response()->json(
            ['mensaje'=>'OK','libros'=>$libros]
        );
    }
}
