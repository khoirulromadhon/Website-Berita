@extends('app.app')

@section('content')
    <a href="/show" class="btn btn-primary">Kembali</a>
    <h1>{{ $post->title }}</h1>
    <div>
        {{ $post->body }}
    </div>
    <hr>
    <small>Dibuat {{ $post->created_at }}</small>
    <hr>
    <a href="/show/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
    {!!Form::open(['action' => ['App\Http\Controllers\CRUDController@destroy', $post->id], 'method' => 'POST', 'class'=>'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection