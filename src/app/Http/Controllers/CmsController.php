<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post

class CmsController extends Controller
{
    // 投稿一覧表示
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('cms.list', compact('posts'));
    }

    // 投稿詳細
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('cms.detail', compact('post'));
    }

    // 投稿作成
    public function create()
    {
        return view('cms.form');
    }

    // 保存処理
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body'  => 'required',
        ]);

        Post::create($validated);
        return redirect()->route('cms.index');
    }
    
}
