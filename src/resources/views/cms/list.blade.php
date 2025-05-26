@extends('layouts.app')

@section('content')
    <h1>作品一覧</h1>

    @foreach ($posts as $post)
        <div class="card">
            <h2><a href="{{ route('cms.show', $post->id) }}">{{ $post->title }}</a></h2>
            <p>{{ Str::limit($post->body, 100) }}</p>
            @if ($post->image_path)
                <img src="{{ asset('storage/' . $post->image_path) }}" alt="投稿画像" />
            @endif
        </div>
    @endforeach

    {{ $posts->links() }}
@endsection
