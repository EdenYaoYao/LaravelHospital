<?php

namespace App\Http\Controllers\Departments;

use App\Doctor;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DiagnoseController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('dept_id', Doctor::TYPE_DIAGNOSE)->paginate(8);
        return view('departments.diagnoses',compact('doctors'));
    }
}
