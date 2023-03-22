<?php

namespace App\Http\Controllers\Admin;

use App\Models\buku;
use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index()
    {
        $data = buku::all();
        return view('admin.buku.index', compact('data'));
    }
    public function tambah()
    {
        $data = kategori::all();
        return view('admin.buku.tambah', compact('data'));
    }
    public function insert(Request $req)
    {
        $buku = new buku();
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('asset/upload/buku/', $filename);
            $buku->image = $filename;
        }
        $buku->cate_id = $req->input('cate_id');
        $buku->judul = $req->input('judul');
        $buku->slug = $req->input('slug');
        $buku->author = $req->input('author');
        $buku->judul_lain = $req->input('judul_lain');
        $buku->deskripsi = $req->input('deskripsi');
        $buku->type = $req->input('type');
        $buku->status_manga = $req->input('status_manga');
        $buku->genre = $req->input('genre');
        $buku->status = $req->input('status') == TRUE ? '1' : '0';
        $buku->trending = $req->input('trending') == TRUE ? '1' : '0';
        $buku->popular = $req->input('popular') == TRUE ? '1' : '0';
        $buku->rilis = $req->input('rilis');
        $buku->save();
        return redirect('dashboard')->with('status', 'buku Berhasil Ditambahkan');
    }
    public function edit($id)
    {
        $data = kategori::all();
        $asal = buku::find($id);
        return view(
            'admin/buku/edit',
            compact(['data', 'asal'])
        );
    }
    public function update($id, Request $req, buku $kate)
    {
        $buku = buku::find($id);
        if ($req->hasFile('image')) {
            $path = 'asset/upload/buku/'.$buku->image;
            if (File::exists($path)) {
                //File::delete($path);
                unlink($path);
            }
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('asset/upload/buku/', $filename);
            $buku->image = $filename;
        }
        $buku->cate_id = $req->input('cate_id');
        $buku->judul = $req->input('judul');
        $buku->slug = $req->input('slug');
        $buku->author = $req->input('author');
        $buku->judul_lain = $req->input('judul_lain');
        $buku->deskripsi = $req->input('deskripsi');
        $buku->type = $req->input('type');
        $buku->status_manga = $req->input('status_manga');
        $buku->genre = $req->input('genre');
        $buku->status = $req->input('status') == TRUE ? '1' : '0';
        $buku->trending = $req->input('trending') == TRUE ? '1' : '0';
        $buku->popular = $req->input('popular') == TRUE ? '1' : '0';
        $buku->rilis = $req->input('rilis');
        $buku->update();

        return redirect('dashboard')->with('status', 'Berhasil Update Data');
    }
    public function destroy($id, Request $request)
    {
        $kate = buku::find($id);
        $path = 'asset/upload/buku/' . $kate->image;
        if (File::exists($path)) {
            //File::delete($path);
            unlink($path);
        }
        $kate->delete();
        return redirect('dashboard')->with('status', 'produk Telah DIhapus');
    }
}
