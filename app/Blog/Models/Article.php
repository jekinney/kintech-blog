<?php

namespace App\Blog\Models;

use App\Blog\Queries\ArticleQueries;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use ArticleQueries;

    protected $fillable = [
    	'category_id',
		'user_id',
		'header_image',
		'slug',
		'title',
		'overview',
		'body',
		'publish_at',
	];

	protected $dates = [
		'publish_at',
	];

	/**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function author()
	{
		return $this->belongsTo(\App\Users\Models\User::class, 'user_id', 'id')->select('id', 'name');
	}

	public function scopePublishDate()
	{
		$this->publish_date = null;

        if(!empty($this->publish_at)) {
            $this->publish_date = $this->publish_at->format('j F, Y');
        }
        return $this;
	}
}
