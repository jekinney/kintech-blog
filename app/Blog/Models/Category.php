<?php

namespace App\Blog\Models;

use App\blog\Queries\CategoryQueries;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use CategoryQueries;
    
    protected $fillable = [
    	'slug',
		'title',
		'description',
		'display_order',
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

    public function articles()
    {
    	return $this->hasMany(Article::class);
    }
}
