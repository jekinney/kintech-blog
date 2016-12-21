<?php

namespace App\Http\Controllers;

use App\Blog\Models\Article;
use App\Blog\Models\Category;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article)
    {
    	$articles = $article->statsAndUpcoming();
    	$categoryCount = Category::count();

        return view('dash.index', compact('articles', 'categoryCount'));
    }
}
