@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Статьи</div>
					<div class="panel-body">
						<div>
							{!! link_to_route('posts', 'Опубликованные') !!}
							&nbsp;&nbsp;&nbsp;
							{!! link_to_route('posts.unpublished', 'Неопубликованные') !!}
							&nbsp;&nbsp;&nbsp;
							{!! link_to_route('post.create', 'Добавить') !!}
						</div>
						@foreach($posts as $post)
							<article>
								<h2>{{ $post->title }}</h2>
								<p>{!! $post->excerpt !!}</p>
								<p>published: {{ $post->published_at }}</p>
							</article>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
