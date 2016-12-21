<?php

namespace App\Http\Controllers;

use App\Blog\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Article $article)
    {
    	$articles = $article->newest(3);

    	return view('page.home', compact('articles'));
    }

    public function about()
    {
    	return view('page.about');
    }
}
