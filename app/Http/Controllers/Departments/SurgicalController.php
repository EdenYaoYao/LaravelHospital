<?php

namespace App\Http\Controllers\Departments;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurgicalController extends Controller
{
    public function index()
    {
        $surgicals = Post::where('category_id', Post::TYPE_SURGICAL)->latest()->paginate(8);
        return view('departments.surgical',compact('surgicals'));
    }
    public function show($id)
    {
        $messages = Post::where('category_id', Post::TYPE_SURGICAL)->latest()->findOrFail($id);
        return view('departments.show',compact('messages'));
    }
}
