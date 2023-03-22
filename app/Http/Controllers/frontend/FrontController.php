<?php

namespace App\Http\Controllers\frontend;

use App\Models\buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function detailbuku($buku_slug)
    {
            if (buku::where('slug', $buku_slug)->exists()) {
                $buku = buku::where('slug', $buku_slug)->first();
                $rekom = buku::all();
                return view('frontend.buku.lihat', compact('buku', 'rekom'));
            } else {
                return redirect('/')->with('status', 'lINK Bermasalah');
            }
    }
}
