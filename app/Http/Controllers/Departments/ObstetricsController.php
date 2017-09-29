<?php

namespace App\Http\Controllers\Departments;

use App\Doctor;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ObstetricsController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('dept_id', Doctor::TYPE_OBSTETRICS)->paginate(8);
        return view('departments.obstetrics',compact('doctors'));
    }

}
