@extends('app.app')

@section('content')
<div>
    <h1>Edit Berita</h1>
    {{ Form::open(['action' => ['App\Http\Controllers\CRUDController@update', $post->id], 'method' => 'POST'])}}

        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::text('body', $post->body, ['id'=>'body', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</div>
@endsection