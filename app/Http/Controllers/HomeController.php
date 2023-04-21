<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $buku = buku::where('trending', '1')->take(15)->get();
        $terbaru = buku::orderBy('created_at', 'DESC')->take(6)->get();
        $manhwa = buku::where('Type', 'manhwa')->take(6)->get();
        $popular = buku::where('popular', '1')->take(6)->get();
        $top = buku::orderBy('Views', 'DESC')->take(6)->get();
        return view('/welcome', compact('buku', 'terbaru', 'manhwa', 'popular','top'));
    }
}
