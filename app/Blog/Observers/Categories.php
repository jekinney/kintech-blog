<?php

namespace App\Blog\Observers;

use App\Blog\Models\Category;

class Categories
{
	public function creating(Category $category)
	{
		$category->slug = str_slug($category->title);
	}

	public function updating(Category $category)
	{
		$category->slug = str_slug($category->title);
	}
}