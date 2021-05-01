<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    //
    protected $connection = 'mysql';

    protected $table = 'curso';

    public $timestamps = false;

    protected $primaryKey = 'id_curso';

    protected $fillable = [
        'codigo',
        'nombre',
        'n_estudiantes',
        'docente_id_docente'
    ];

  
}
