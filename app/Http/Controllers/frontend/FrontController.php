<?php

namespace App\Http\Controllers\frontend;

use App\Models\buku;
use App\Models\chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function detailbuku($id)
    {
        if (buku::where('id', $id)->exists()) {
            $buku = buku::where('id', $id)->first();
            $rekom = buku::all();
            $chapter = chapter::where('buku_id', $id)->get();
            return view('frontend.buku.lihat', compact('buku', 'rekom', 'chapter'));
        } else {
            return redirect('/')->with('status', 'lINK Bermasalah');
        }
    }
    public function bookmark()
    {
        return view('user.bookmark');
    }
}
