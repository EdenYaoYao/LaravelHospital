<?php

namespace App\Http\Controllers\Health;

use App\Models\Health;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HealthController extends Controller
{
    public function index()
    {
        $healths = Post::where('category_id', Post::TYPE_HEALTHS)->latest()->paginate(7);
        return view('health.healthKnowledge',compact('healths'));
    }
    public function show($id)
    {
        $messages = Post::where('category_id', Post::TYPE_HEALTHS)->latest()->findOrFail($id);
        return view('news/message_show',compact('messages'));
    }
}
