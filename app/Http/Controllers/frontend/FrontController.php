<?php

namespace App\Http\Controllers\frontend;

use App\Models\buku;
use App\Models\chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function detailbuku($id)
    {
        if (buku::where('id', $id)->exists()) {
            $buku = buku::where('id', $id)->first();
            $rekom = buku::all();
            buku::where('id', $id)
                ->update([
                    'Views' => DB::raw('Views+1'),
                ]);
            $chapter = chapter::where('buku_id', $id)->get();
            return view('frontend.buku.lihat', compact('buku', 'rekom', 'chapter', 'top'));
        } else {
            return redirect('/')->with('status', 'lINK Bermasalah');
        }
    }
    public function bookmark()
    {
        return view('user.bookmark');
    }
    public function search()
    {
        return view('user.search');
    }
    public function searchbuku(Request $req)
    {
        if ($req->search) {
            $searchbuku = buku::where('judul', 'LIKE', '%' . $req->search . '%')->latest()->paginate(15);
            return view('user.search', compact('searchbuku'));
        } else {
            return redirect()->back()->with('status', 'Judul Tidak Ada');
        }
    }
}
