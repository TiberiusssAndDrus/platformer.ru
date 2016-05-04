@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Изменение новости</div>
					<div class="panel-body">
						{!! Form::open(['route' => ['news.update', $news->slug], 'method' => 'put']) !!}
							<div class="form-horizontal">
								<div class="form-group">
									{!! Form::label('Заголовок') !!}
									{!! Form::text('title', $news->title,['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('Ссылка') !!}
									{!! Form::text('slug', $news->slug, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('Краткое содержание') !!}
									{!! Form::textarea('excerpt', $news->excerpt, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('Полное содержание') !!}
									{!! Form::textarea('content', $news->content, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('Опубликовать?') !!}
									{!! Form::checkbox('published', null, $news->published) !!}
								</div>
								<div class="form-group">
									{!! Form::label('Дата публикации') !!}
									{!! Form::date('published_at', $news->published_at, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::submit('Изменить', ['class' => 'btn btn-primary']) !!}
								</div>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
