<?php

namespace App\Http\Controllers\Blog;

use App\Blog\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $categories = $category->paginatedList(6);

        return view('blog.category.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Category $category)
    {
        $category = $category->findBySlug($slug);
        $articles = $category->paginatedArticleList($category);

        return view('blog.category.show', compact('category', 'articles'));
    }
}
