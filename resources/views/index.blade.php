@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Главная</div>

                <div class="panel-body">
                    Главная страница
					{{ dd(parse_url(getenv("CLEARDB_DATABASE_URL"))) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
