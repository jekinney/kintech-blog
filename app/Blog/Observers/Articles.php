<?php

namespace App\Blog\Observers;

use Carbon\Carbon;
use App\Blog\Models\Article;

class Articles
{
	public function creating(Article $article)
	{
		$article->user_id = 1;
		$article->slug = str_slug($article->title);
		if(isset($article->publish_date)) {
			$article->publish_at = Carbon::parse($article->publish_date)->startOfDay();
		}
		if(!$article->overview) {
			$article->overview = str_limit($article->body, 550);
		}
	}
}