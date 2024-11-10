<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Wisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama.
     */
    public function index()
    {
        // Mengambil berita terbaru
        $news = News::latest()->take(5)->get();

        // Mengambil semua data wisata
        $wisata = Wisata::all();

        // Mengirim data ke view 'home.blade.php'
        return view('home', compact('news', 'wisata'));  // Pastikan file 'home.blade.php' ada di folder resources/views
    }
}
