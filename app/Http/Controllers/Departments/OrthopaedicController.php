<?php

namespace App\Http\Controllers\Departments;

use App\Doctor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrthopaedicController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('dept_id', Doctor::TYPE_ORTHOPAEDIC)->paginate(8);
        return view('departments.orthopaedic',compact('doctors'));
    }

}
