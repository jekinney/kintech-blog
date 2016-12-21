<?php

namespace App\Blog\Queries;

use Carbon\Carbon;

trait CategoryQueries
{
	public function paginatedList($amount = 6)
	{
		return $this->withCount('articles')->paginate($amount);
	}

	public function findBySlug($slug)
	{
		return $this->where('slug', $slug)->first();
	}

	public function paginatedArticleList($category, $amount = 3)
	{
		return $category->articles()
			->with('author:id,name')
			->whereNotNull('publish_at')
			->where('publish_at', '<', Carbon::now())
			->paginate($amount);
	}
}