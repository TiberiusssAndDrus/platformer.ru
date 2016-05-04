<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
	protected $fillable = ['slug', 'title', 'excerpt', 'content', 'published', 'published_at']; 

    public function getPublishedPosts()
	{
		return Post::orderBy('published_at', 'asc')
			->published()
			->get();
	}

	public function getUnPublishedPosts()
	{
		return Post::orderBy('published_at', 'asc')
			->unPublished()
			->get();
	}

    function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now())
			->where('published', '=', true);
	}

    function scopeUnPublished($query)
	{
		$query->where('published_at', '>=', Carbon::now())
			->orWhere('published', '=', false);
	}
}
