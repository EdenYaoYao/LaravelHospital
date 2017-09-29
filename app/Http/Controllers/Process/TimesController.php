<?php

namespace App\Http\Controllers\Process;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TimesController extends Controller
{
    public function index()
    {
        $times = Post::where('category_id', Post::TYPE_TIME)->latest()->first();
        return view('process.time',compact('times'));
    }
}
