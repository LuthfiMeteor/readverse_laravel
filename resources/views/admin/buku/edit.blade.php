@extends('layouts.admin')
@section('main')
    <div class="card">
        <div class="card-header">
            Edit Buku
        </div>
        <div class="card-body">
            <form action="/edit-buku/proses/{{ $asal->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" aria-label="Default select example" name="cate_id" required>
                            <option selected>Pilih kategori</option>
                            @foreach ($data as $kategori)
                                <option value="{{ $kategori->id }}" @if ($kategori->id == $kategori->id) {{ 'selected' }} @endif>{{ $kategori->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" value="{{ $asal->judul }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Judul Lain</label>
                        <input type="text" class="form-control" name="judul_lain" value="{{ $asal->judul_lain }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $asal->slug }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Author</label>
                        <input type="text" class="form-control" name="author" value="{{ $asal->author }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" id="" rows="3" class="form-control">{{ $asal->deskripsi }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="" rows="3" class="form-control">{{ $asal->deskripsi }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <select class="form-select" aria-label="Default select example" name="type" required>
                            <option selected>Pilih Type</option>
                            <option value="manga" @if ($asal->Type == 'manga') {{ 'selected' }} @endif>manga
                            </option>
                            <option value="manhwa" @if ($asal->Type == 'manhwa') {{ 'selected' }} @endif>manhwa
                            </option>
                            <option value="novel" @if ($asal->Type == 'novel') {{ 'selected' }} @endif>Novel
                            </option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price">Chapter</label>
                        <input type="number" name="chapter" id="" class="form-control"
                            value="{{ $asal->Chapter }}" disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <select class="form-select" aria-label="Default select example" name="status_manga" required>
                            <option selected>Status Manga</option>
                            <option value="On Going" @if ($asal->Status_manga == 'On Going') {{ 'selected' }} @endif>On Going
                            </option>
                            <option value="End" @if ($asal->Status_manga == 'End') {{ 'selected' }} @endif>End
                            </option>
                            <option value="Hiatus" @if ($asal->Status_manga == 'Hiatus') {{ 'selected' }} @endif>Hiatus
                            </option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price">Genre</label>
                        <input type="Gnere" name="genre" id="" class="form-control"
                            value="{{ $asal->Genre }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price">views</label>
                        <input type="number" name="views" id="" class="form-control"
                            value="{{ $asal->Views }}" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" id="" {{ $asal->status == '1' ? 'checked' : '' }}>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">trending</label>
                        <input type="checkbox" name="trending" {{ $asal->trending == '1' ? 'checked' : '' }}>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">popular</label>
                        <input type="checkbox" name="trending" {{ $asal->popular == '1' ? 'checked' : '' }}>
                    </div>
                    <div class="col-md-12 b-3">
                        <input type="date" name="rilis" id="" class="form-control" value="{{ $asal->rilis }}">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('asset/upload/buku/' . $asal->image) }}" alt="">
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" id="" class="form-control">
                        <p class="text-danger">Foto Sampul Diusahakan Berukuran 300x440 Px</p>
                    </div>

                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
