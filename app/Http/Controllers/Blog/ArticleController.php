<?php

namespace App\Http\Controllers\Blog;

use App\Blog\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article)
    {
        $articles = $article->paginatedList(5);
        
        return view('blog.article.index', compact('articles'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Article $article)
    {
        $article = $article->findBySlug($slug);

        return view('blog.article.show', compact('article'));
    }

}
