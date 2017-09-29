<?php

namespace App\Http\Controllers\Professor;

use App\Doctor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::simplePaginate(8);
        return view('professor.professor',compact('doctors'));
    }

}
