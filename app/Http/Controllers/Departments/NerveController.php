<?php

namespace App\Http\Controllers\Departments;

use App\Doctor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NerveController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('dept_id', Doctor::TYPE_NERVE)->paginate(8);
        return view('departments.nerve',compact('doctors'));
    }


}
