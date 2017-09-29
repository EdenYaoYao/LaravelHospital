<?php

namespace App\Http\Controllers\News;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    public function index()
    {
        $news = Post::where('category_id', Post::TYPE_NOTICE)->latest()->paginate(7);
        return view('news.notice',compact('news'));
    }

    public function show($id)
    {
        $messages = Post::where('category_id', Post::TYPE_NOTICE)->latest()->findOrFail($id);
        return view('news/message_show',compact('messages'));
    }
}
