<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function index()
    {
        $title = 'What would you like to learn?';  
        $categories = Category::all();               

        return view('learn.index', compact('title', 'categories'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', '=', $slug)->firstOrFail();   
        $title = $category->name;
        $tutorials = Tutorial::where('category_id', $category->id)->get();
        $books = Book::where('category_id', $category->id)->get();

        return view('learn.category', compact('category', 'title', 'tutorials', 'books'));
    }
}
