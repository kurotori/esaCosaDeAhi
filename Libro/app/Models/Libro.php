<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $table = 'libros';
    protected $primaryKey = 'id';
    protected $fillable = [
        'isbn',
        'titulo',
        'autor',
        'genero'
    ];
}
