<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $postModel)
	{
		//$posts = Post::all();
		//dd($posts);
		$posts = $postModel->getPublishedPosts();
		return view('post.index', ['posts' => $posts]);
	}

	public function unpublished(Post $postModel)
	{
		$posts = $postModel->getUnPublishedPosts();
		return view('post.index', ['posts' => $posts]);
	}

	public function create()
	{
		return view('post.create');
	}

	public function store(Post $postModel, Request $request)
	{
		//dd($request->all());
		$post = $postModel->create($request->all());
		$post->published = $post->published == 'on' ? 1 : 0;
		$post->save();
		return redirect()->route('main');
	}
}
