<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\News;

class NewsController extends Controller
{
	public function index(News $newsModel)
	{
		$news = $newsModel->getPublishedNews();
		return view('news.index')->with('news', $news);
	}

	public function show(News $newsModel, $newsSlug)
	{
 		$news = $newsModel->getNews($newsSlug);
 		return view('news.shownews', ['news' => $news]);
	}

	public function create()
	{
		return view('news.create');
	}

	public function store(News $newsModel, Request $request)
	{
		$news = $newsModel->create($request->all());
		$news->published = $news->published == 'on' ? 1 : 0;
		$news->save();
		return redirect()->route('news.index');
	}

	public function edit($newsSlug)
	{
		$news = News::where('slug', '=', $newsSlug)->firstOrFail();
		return view('news.edit')->with('news', $news);
	}

	public function update($newsSlug, Request $request)
	{
		$news = News::where('slug', '=', $newsSlug)->firstOrFail();
		$news->fill($request->all());
		$news->published = $news->published == 'on' ? 1 : 0;
		$news->save();
		return redirect()->route('news.show', ['news' => $news->slug]);
	}

	public function destroy($newsSlug)
	{
		$news = News::where('slug', '=', $newsSlug)->firstOrFail();
		$news->delete();
		return redirect()->route('news.index');
	}
}
