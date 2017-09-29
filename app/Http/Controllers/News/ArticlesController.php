<?php

namespace App\Http\Controllers\News;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Post::where('category_id', Post::TYPE_ARTICLES)->latest()->first();
        return view('articles.about',compact('articles'));
    }
}
