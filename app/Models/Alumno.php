<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Notifiable;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumno';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nif', 'nombre', 'apellido1','apellido2',
    ];

    public function cursos(){
        return $this->belongsToMany(curso::class, 'alum_tiene_cursos','alumno_id','curso_id');
    }
}
