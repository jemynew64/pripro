<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function AlumnoDashboard(){
        return view('alumno.alumno_dashboard');
    }
}
