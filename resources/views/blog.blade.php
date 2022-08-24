@extends('templeate')

@section('content')
<h1>Blog Listado</h1>

@foreach ($posts as $post)
<p>
    <strong>{{ $post->id }}</strong>
    <a href="{{ route('post', $post->slug) }}">
        {{ $post->title }}
    </a>
    <br>
    <span>{{ $post->user->name}}</span>
</p>    
@endforeach
    {{$posts->links()}}
@endsection
