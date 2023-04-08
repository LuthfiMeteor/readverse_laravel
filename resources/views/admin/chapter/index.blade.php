@extends('layouts.admin')
@section('main')
    <div class="card">
        <div class="card-header">
            Chapter
        </div>

        <table class="table">
     <thead>
    <tr>
      <th scope="col">id</th>
      <th>Chapter</th>
      <th scope="col">Judul</th>
      <th>Image</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $buku)
        
    <tr>
      <th scope="row">{{ $buku->buku_id }}</th>
      <th>{{ $buku->chapter }}</th>
      <td>{{ $buku->judul->judul }}</td> 
      <td><img src="{{ asset($buku->judul->judul) }}" alt=""></td>
       <form action="hapus-chapter/{{ $buku->id }}" method="post">
        @csrf
        @method('delete')
        <td class="text-center"><Input type="submit" value="Delete" class="btn btn-danger"></Input></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
    <div class="d-grid">
        <a href="/tambah-chapter" class="btn btn-info">Tambah Chapter</a>
    </div>
    </div>
        
@endsection