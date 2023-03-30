<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function tambahbookmark(Request $req)
    {
        $buku_id = $req->input('buku_id');

        if (Auth::check()) {
            $buku_cek = buku::where('id', $buku_id)->first();
            if ($buku_cek) {
                if (bookmark::where('buku_id', $buku_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['status' => $buku_cek->nama .  " Sudah Ada Di Bookmark"]);
                } else {
                    $bookmark = new bookmark();
                    $bookmark->buku_id = $buku_id;
                    $bookmark->user_id = Auth::id();
                    $bookmark->save();
                    return response()->json(['status' => $buku_cek->nama . " Berhasil DItambahkan Ke Bookmark"]);
                }
            }
        } else {
            return response()->json(['status' => "Login Dulu Yaaa"]);
        }
    }
    public function lihatbookmark()
    {
        $bookmark = bookmark::where('user_id', Auth::id())->get();
        return view('user.bookmark', compact('bookmark'));
    }
    public function hapusbookmark(Request $req)
    {
        if (Auth::check()) {
            $buku_id = $req->input('buku_id');
            if (bookmark::where('buku_id', $buku_id)->where('user_id', Auth::id())->exists()) {
                $bookmark = bookmark::where('buku_id', $buku_id)->where('user_id', Auth::id())->first();
                $bookmark->delete();
                return response()->json(['status' => "buku Berhasil Dihapus dari Bookmark"]);
            }
        } else {
            return response()->json(['status' => "Login Dulu Yaaa"]);
        }
    }
}
