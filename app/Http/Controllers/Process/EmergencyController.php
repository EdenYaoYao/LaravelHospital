<?php

namespace App\Http\Controllers\Process;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmergencyController extends Controller
{
    public function index()
    {
        return view('process.emergency');
    }
}
