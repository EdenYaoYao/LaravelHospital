<?php

namespace App\Http\Controllers\Process;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NeedsController extends Controller
{
    public function index()
    {
        $needs = Post::where('category_id', Post::TYPE_NEEDS)->latest()->first();
        return view('process.need',compact('needs'));
    }
}
