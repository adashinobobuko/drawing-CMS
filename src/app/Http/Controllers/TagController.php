<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    // タグ一覧
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    // タグ作成フォーム
    public function create()
    {
        return view('tags.create');
    }

    // タグ保存処理
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50|unique:tags,name',
        ]);

        Tag::create($validated);
        return redirect()->route('tags.index');
    }
}

