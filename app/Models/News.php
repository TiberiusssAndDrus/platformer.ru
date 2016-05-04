<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
	protected $fillable = ['slug', 'title', 'excerpt', 'content', 'published', 'published_at'];

	public function getNews($slug)
	{
		return News::where('slug', '=', $slug)->published()->firstOrFail();
	}

	public function getPublishedNews()
	{
		return News::orderBy('published_at', 'desc')
			->published()
			->get();
	}

	function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now())
			->where('published', '=', true);
	}
}
