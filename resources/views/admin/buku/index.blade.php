@extends('layouts.admin')
@section('main')
    <div class="card">
        <div class="card-header">
            kategori
        </div>

        <table class="table">
     <thead>
    <tr>
      <th scope="col">id</th>
      <th>Kategori</th>
      <th scope="col">Judul</th>
      <th>Nama Lain</th>
      <th>Image</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $buku)
        
    <tr>
      <th scope="row">{{ $buku->id }}</th>
      <th>{{ $buku->kategori->nama }}</th>
      <td>{{ $buku->judul }}</td>
      <td>{{ $buku->judul_lain }}</td>
      <td><img src="asset/upload/buku/{{ $buku->image }}" alt="" width="70px"></td>
      <td> <a href="edit-buku/{{ $buku->id }}" class="btn btn-info">Edit</a></td>
       <form action="hapus-buku/{{ $buku->id }}" method="post">
        @csrf
        @method('delete')
        <td class="text-center"><Input type="submit" value="Delete" class="btn btn-danger"></Input></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
    <div class="d-grid">
        <a href="/tambah-buku" class="btn btn-info">Tambah Produk</a>
    </div>
    </div>
        
@endsection