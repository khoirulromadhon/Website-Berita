@extends('app.app')

@section('content')
<div>
    <h1>Berita</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
        <div class="jumbotron">
            <h3>{{ $post->title }}</h3>
            <a href="/show/{{ $post->id }}">Baca Selengkapnya</a><br>
            <small>Dibuat {{ $post->created_at }}</small>
        </div>
        @endforeach
        {{$posts->links('pagination::bootstrap-4')}}
    @else
        <p>Tidak ada berita yang ditampilkan!!!</p>
    @endif
</div>
@endsection