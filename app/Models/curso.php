<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'curso';
    protected $fillable = [
        'codigo', 'nombre', 'creditos',
    ];

    public function alumnos(){
        return $this->belongsToMany(curso::class, 'alum_tiene_cursos','curso_id','alumno_id');
    }
}
