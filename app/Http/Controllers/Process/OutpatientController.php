<?php

namespace App\Http\Controllers\Process;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OutpatientController extends Controller
{


    public function index()
    {
        return view('process.outpatient');
    }


}
