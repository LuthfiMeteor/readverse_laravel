<?php

namespace App\Http\Controllers\Admin;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        $data = kategori::all();
        return view('admin.kategori.index', compact('data'));
    }
    public function tambah()
    {
        return view('admin.kategori.tambah');
    }
    public function insert(Request $req)
    {
        $kategori = new kategori();

        $kategori->nama = $req->input('nama');
        $kategori->slug = $req->input('slug');
        $kategori->status = $req->input('status') == TRUE ? '1' : '0';
        $kategori->popular = $req->input('popular') == TRUE ? '1' : '0';
        $kategori->save();

        return redirect('dashboard')->with('status', 'Kategori Berhasil Ditambahkan');
    }
    public function edit($id)
    {
        $kate = kategori::find($id);
        return view(
            'admin/kategori/edit',
            compact(['kate'])
        );
    }
    public function update($id, Request $req, kategori $kate)
    {
        $kategori = kategori::find($id);
        $kategori->nama = $req->input('nama');
        $kategori->slug = $req->input('slug');
        $kategori->status = $req->input('status') == TRUE ? '1' : '0';
        $kategori->popular = $req->input('popular') == TRUE ? '1' : '0';
        $kategori->update();

        return redirect('dashboard')->with('status', 'Berhasil Update Data');
    }
    public function destroy($id, Request $request)
    {
        $kate = kategori::find($id);
        $kate->delete();
        return redirect('dashboard')->with('status', 'KAtegori Telah DIhapus');
    }
}
