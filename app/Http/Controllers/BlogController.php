<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Review;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title = 'Blog';
        $articles = Article::orderByDesc('created_at')->get();               

        return view('blog.index', compact('title', 'articles'));
    }

    public function article(Article $article)
    {               
        $reviews= Review::where('article_id', $article->id)->get();                
        
        return view('blog.article', compact('article', 'reviews'));
    }

}
