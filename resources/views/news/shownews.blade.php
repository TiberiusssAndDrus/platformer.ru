@extends('layouts.app')

@section('content')
<div class="modal fade" id="myModal" role="dialog">
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
			{{ Form::open(['route' => ['news.destroy', $news->slug], 'method' => 'delete']) }}
                    {{ Form::submit('Да', ['class' => 'btn btn-primary']) }}
					<button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
            {{ Form::close() }}
		</div>
	  </div>

	</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					<a href="{{url('/news')}}" class="btn btn-info" role="button">
						<span class="glyphicon glyphicon-arrow-left"></span> Назад
					</a>
					&nbsp;&nbsp;&nbsp;
					<b>{{ $news->title }}</b>
					 <!-- Удаление-->
					<button type="button" class="btn pull-right btn-danger" data-toggle="modal" data-target="#myModal">
						<span class="glyphicon glyphicon-remove"></span>
					</button>
					 <!-- Изменение -->
					<a href="{{route('news.edit', ['news' => $news->slug])}}" class="btn pull-right btn-default" role="button">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
				</div>
                <div class="panel-body">{{ $news->content }}</div>
				<div class="panel-footer">Дата публикации: {{ $news->published_at }} </div>
            </div>
        </div>
    </div>
</div>
@endsection
