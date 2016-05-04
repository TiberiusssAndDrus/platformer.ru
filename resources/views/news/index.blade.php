@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{route('news.create')}}" class="btn btn-info" role="button">
						<span class="glyphicon glyphicon-plus"></span> Добавить
					</a>
					Новости</div>
			</div>
			@foreach ($news as $item)
				<div class="modal fade" id="{{ $item->slug }}" role="dialog">
					<div class="modal-dialog">

					  <!-- Modal content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Подтверждение</h4>
						</div>
						<div class="modal-body">
						  <p>Вы действительно хотите удалить данную запись?</p>
						</div>
						<div class="modal-footer">
							{{ Form::open(['route' => ['news.destroy', $item->slug], 'method' => 'delete']) }}
									{{ Form::submit('Да', ['class' => 'btn btn-primary']) }}
									<button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
							{{ Form::close() }}
						</div>
					  </div>

					</div>
				</div>
				<article>
		            <div class="panel panel-default">
		                <div class="panel-heading">
							<b>{{$item->title}}</b>
							<button type="button" class="btn pull-right btn-danger moveup" data-toggle="modal" data-target="#{{ $item->slug }}">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
							 <!-- Изменение -->
							<a href="{{route('news.edit', ['news' => $item->slug])}}" class="btn pull-right btn-default moveup" role="button">
								<span class="glyphicon glyphicon-pencil"></span>
							</a>
						</div>
		                <div class="panel-body">{{$item->excerpt}}</div>
						<div class="panel-footer">
							Дата публикации: {{ $item->published_at }}
							<a href="{{url('/news/'.$item->slug)}}" class="btn pull-right btn-info moveup" role="button">Читать далее...</a>
						</div>
		            </div>
				</article>
			@endforeach
        </div>
    </div>
</div>
@endsection
