@extends('layouts.admin')
@section('main')
    <div class="card">
        <div class="card-header">
            kategori
        </div>
        <div class="card-body">
            <form action="{{ url('masukan-chapter') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" id="package" aria-label="Default select example" name="buku_id" required>
                            <option selected>Pilih kategori</option>
                            @foreach ($buku as $buku_id)
                                <option value="{{ $buku_id->id }}" data-buku="{{ $buku_id->judul }}">{{ $buku_id->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="judul_buku" id="selected">
                    <div class="col-md-6 mb-3">
                        <label for="">Chapter</label>
                        <input type="text" class="form-control" name="chapter">
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image[]" id="" class="form-control" multiple>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#package').on('change', function() {
            // ambil data dari elemen option yang dipilih
            const buku = $('#package option:selected').data('buku');

            // tampilkan data ke element
            $('[name=judul_buku]').val(buku);
        });
    </script>
@endsection
