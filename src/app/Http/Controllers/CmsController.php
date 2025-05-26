<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

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
        $tags = Tag::all();
        return view('cms.form', compact('tags'));
    }

    // 保存処理
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body'  => 'required',
            'image' => 'required|image|max:2048', // 画像のバリデーション
        ]);
    
        // 画像の保存処理
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public'); // storage/app/public/images
            $validated['image_path'] = $path; // Postモデルにimage_pathカラムが必要
        }
    
        // 投稿保存
        $post = Post::create($validated);

        // タグの紐付け（中間テーブル：post_tag）
        if ($request->has('tags')) {
            $post->tags()->attach($request->input('tags'));
        }

        return redirect()->route('cms.index');
    }
    
}
