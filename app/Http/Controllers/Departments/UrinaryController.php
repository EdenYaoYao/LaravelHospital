<?php

namespace App\Http\Controllers\Departments;

use App\Doctor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UrinaryController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('dept_id', Doctor::TYPE_URINARY)->paginate(8);
        return view('departments.urinary',compact('doctors'));
    }
}
