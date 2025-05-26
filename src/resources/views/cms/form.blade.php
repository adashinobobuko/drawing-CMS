@extends('layouts.app')

@section('content')
    <h1>画像投稿フォーム</h1>

    <form action="{{ route('cms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- タイトル入力 --}}
        <div>
            <label for="title">タイトル:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        {{-- 本文（説明）入力 --}}
        <div>
            <label for="body">本文:</label>
            <textarea name="body" id="body" rows="4" required>{{ old('body') }}</textarea>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        {{-- 画像選択 --}}
        <div>
            <label for="image">画像を選択:</label>
            <input type="file" name="image" id="image" accept="image/*" required>
            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        {{-- タグ選択（任意） --}}
        @if (isset($tags) && count($tags))
            <div>
                <label>タグを選択：</label><br>
                @foreach ($tags as $tag)
                    <label>
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                        {{ $tag->name }}
                    </label>
                @endforeach
            </div>
        @endif

        {{-- 送信ボタン --}}
        <div>
            <button type="submit">投稿する</button>
        </div>
    </form>
@endsection
