<div class="form-horizontal">
	<div class="form-group">
		{!! Form::label('Ссылка') !!}
		{!! Form::text('slug', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Заголовок') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Краткое содержание') !!}
		{!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Полное содержание') !!}
		{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Опубликовать?') !!}
		{!! Form::checkbox('published', null, false) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Дата публикации') !!}
		{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Добавить', ['class' => 'btn btn-primary']) !!}
	</div>
</div>
