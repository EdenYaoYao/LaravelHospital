<?php

namespace App\Http\Controllers\Departments;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Post::where('category_id', Post::TYPE_MEDICINE)->latest()->paginate(8);
        return view('departments.medicine',compact('medicines'));
    }
    public function show($id)
    {
        $messages = Post::where('category_id', Post::TYPE_MEDICINE)->latest()->findOrFail($id);
        return view('departments.show',compact('messages'));
    }
}
