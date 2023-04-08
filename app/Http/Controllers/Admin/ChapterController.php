<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\buku;
use App\Models\chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ChapterController extends Controller
{
    public function index()
    {
        $data = chapter::all();
        $buku = buku::all();
        return view('admin.chapter.index', compact('data'));
    }
    public function tambah()
    {
        $buku = buku::all();
        return view('admin.chapter.tambah', compact('buku'));
    }
    public function insert(Request $req)
    {
        $buku = new chapter();
        
        $tempat_chapter = $req->input('judul_buku');
        $chapter = $req->input('chapter');

        if (!file_exists($tempat_chapter)) {
            Storage::makeDirectory($tempat_chapter);
        }elseif(!file_exists($tempat_chapter.'/'.$chapter))
        {
            Storage::makeDirectory($tempat_chapter.'/'.$chapter);
        }
        


        $files = [];
        if ($req->hasfile('image')) {
            foreach ($req->file('image') as $file) {
                $name = time() . rand(1, 50) . '.' . $file->extension();
                $tempat = $file->move(public_path($tempat_chapter), $name);
                array_push($files, $name);
            }
        }
        // $files = $req->file('image');
        // $imageNames = [];
        // foreach ($files as $file) {
        //     $imageName = $file->move(public_path($tempat_chapter));
        //     array_push($imageNames, $imageName);
        // }
        chapter::create([
            'chapter' => $req->input('chapter'),
            'buku_id' => $req->input('buku_id'),
            'image' => json_encode($files)
        ]);

        
        
        return redirect('dashboard')->with('status', 'Chapter Berhasil Ditambahkan');
    }
    public function destroy($id, Request $request)
    {
        $kate = chapter::find($id);
        $kate->delete();
        return redirect('dashboard')->with('status', 'produk Telah DIhapus');
    }
}
