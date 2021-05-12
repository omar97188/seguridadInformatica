<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Alumno;
use App\Models\curso;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        
        $Alumno = Alumno::all();
        return view('admin.table', compact('Alumno'));
    }

    public function FichaAcademica($id)
    {
        $Ficha = Alumno::find($id);
        return view('admin.ficha',['Ficha' => $Ficha]);
    }

}
