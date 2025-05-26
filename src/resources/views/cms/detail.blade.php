@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    @if ($post->image_path)
        <img src="{{ asset('storage/' . $post->image_path) }}" alt="投稿画像" />
    @endif

    @if ($post->tags)
        <p>
            タグ：
            @foreach ($post->tags as $tag)
                <span>{{ $tag->name }}</span>
            @endforeach
        </p>
    @endif
@endsection
