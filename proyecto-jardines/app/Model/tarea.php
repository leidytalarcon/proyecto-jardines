<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    //
    protected $connection = 'mysql';

    protected $table = 'tarea';

    public $timestamps = false;

    protected $primaryKey = 'idtarea';

    protected $fillable = [
        'numero',
        'nombre',
        'contenido',
        'tarea_doc',
        'tarea_est',
        'tema_idtema',
    ];

  
}
