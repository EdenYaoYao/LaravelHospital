<?php

namespace App\Http\Controllers\Departments;

use App\Dept;
use App\Doctor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AngiocarpyController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('dept_id', Doctor::TYPE_ANGIOOCARPY)->paginate(8);
        return view('departments.angiocarpy',compact('doctors'));
    }
}
