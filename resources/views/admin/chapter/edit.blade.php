@extends('layouts.admin')
@section('main')
    <div class="card">
        <div class="card-header">
            kategori
        </div>
        <div class="card-body">
            <form action="{{ url('edit-chapter') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" id="package" aria-label="Default select example" name="chapter_id"
                            required>
                            <option selected>Pilih Buku</option>

                            <option value="{{ $asal->id }}"
                                @if ($asal->id == $asal->id) {{ 'selected' }} @endif>{{ $asal->judul->judul }}
                            </option>
                        </select>
                    </div>
                    <input type="hidden" name="judul_buku" id="selected">
                    <div class="col-md-6 mb-3">
                        <label for="">Chapter</label>
                        <input type="text" class="form-control" name="chapter" value="{{ $asal->chapter }}">
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
            // ambil asal dari elemen option yang dipilih
            const buku = $('#package option:selected').data('buku');

            // tampilkan data ke element
            $('[name=judul_buku]').val(buku);
        });
    </script>
@endsection
