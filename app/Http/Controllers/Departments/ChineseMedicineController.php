<?php

namespace App\Http\Controllers\Departments;

use App\Doctor;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChineseMedicineController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('dept_id', Doctor::TYPE_CH_MEDICINE)->paginate(8);
        return view('departments.chinese_medicine',compact('doctors'));
    }
}
