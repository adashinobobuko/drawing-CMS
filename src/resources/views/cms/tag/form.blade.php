@extends('layouts.app')

@section('content')
    <h1>タグ作成</h1>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <label for="name">タグ名：</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">作成</button>
    </form>
@endsection
