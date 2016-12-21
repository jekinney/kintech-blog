<?php

namespace App\Blog\Queries;

use Carbon\Carbon;

trait ArticleQueries
{
	public function newest($limit) 
	{
		return $this->with('category:id,title', 'author:id,name')
				->whereNotNull('publish_at')
				->where('publish_at', '<', Carbon::now())
				->orderBy('publish_at', 'dec')
				->select('id', 'category_id', 'user_id', 'slug', 'title', 'overview', 'publish_at')
				->limit($limit)
				->get();
	}

	public function paginatedList($amount = 5)
	{
		return $this->with('category:id,title', 'author:id,name')
				->whereNotNull('publish_at')
				->where('publish_at', '<', Carbon::now())
				->select('id', 'category_id', 'user_id', 'slug', 'title', 'overview', 'publish_at')
				->paginate($amount);
	}

	public function paginatedListAll($amount = 5)
	{
		return $this->with('category:id,title', 'author:id,name')
				->select('id', 'category_id', 'user_id', 'slug', 'title', 'overview', 'publish_at')
				->paginate($amount);
	}

	public function findBySlug($slug)
	{
		return $this->with('category:id,title', 'author:id,name')
				->where('slug', $slug)
				->select('id', 'category_id', 'user_id', 'slug', 'title', 'body', 'publish_at')
				->first();
	}

	public function statsAndUpcoming($amount = 4)
	{
		$upcoming = $this->with('category:id,title', 'author:id,name')
				->whereNull('publish_at')
				->orWhere('publish_at', '>', Carbon::now())
				->select('id', 'category_id', 'user_id', 'slug', 'title', 'overview', 'publish_at')
				->paginate($amount);

		$published = $this->whereNotNull('publish_at')->where('publish_at', '<', Carbon::now())->count();

		return collect(['upcoming' => $upcoming, 'published_count' => $published, 'total' => $this->count()]);
	}

	public function findBySlugForEdit($slug)
	{
		return $this->where('slug', $slug)->first()->publishDate();
	}

	public function FindByIdAndUpdate($request)
	{
		$article = $this->find($request->id);
		$article->slug = str_slug($request->title);
		$article->publish_at = $request->has('publish_date')? Carbon::parse($request->publish_date)->startOfDay():null;
		if(!$request->has('overview')) {
			$article->overview = str_limit($request->body, 550);
		} else {
			$article->overview = $request->overview;
		}
		$article->body = $request->body;
		$article->save();
	}
}