<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    // Menampilkan form untuk membuat berita baru
    public function create()
    {
        return view('news.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $news = new News;
        $news->title = $request->title;
        $news->content = $request->content;
        if ($request->hasFile('image')) {
            $news->image = $request->file('image')->store('news_images');
        }
        $news->save();

        return redirect()->route('news.index');
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    // Mengedit berita
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    // Memperbarui berita
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->title = $request->title;
        $news->content = $request->content;
        if ($request->hasFile('image')) {
            $news->image = $request->file('image')->store('news_images');
        }
        $news->save();

        return redirect()->route('news.index');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index');
    }
}
