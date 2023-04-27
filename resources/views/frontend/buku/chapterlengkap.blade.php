@extends('layouts.app')

@section('content')
    @include('components.header')
    <div class="container mt-5 py-5">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="section-title ">
                    <h4>{{ $chapters->judul->judul }} Chapter {{ $chapters->chapter }} Bahasa Indonesia</h4>
                    <hr style="color: white">
                </div>
            </div>

            <p class="fs-5 text-white">Semua Chapter Ada Di <a
                    href="{{ url('buku/' . $chapters->judul->id) }}"><i>{{ $chapters->judul->judul }}</i></a></p>
            <div class="mt-5">
                <p class="fs-5 text-white">
                    Baca manga {{ $chapters->judul->judul }} terbaru di <a href="/">Readverse</a>. Manga
                    {{ $chapters->judul->judul }} selalu update di <a href="/">Readverse</a>. Jangan lupa membaca
                    update manga lainnya
                    ya.

                </p>
                <div class="alert alert-dark" role="alert">
                    <p class="fs-3">Laporkan jika ada gambar rusak/tidak muncul ke Discord Kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-auto ms-2">
                    <div class="d-flex flex-column mt-3">
                        @foreach ($image as $item)
                            <img src="{{ asset($chapters->judul->judul . '/' . $item) }}" class="m-auto chapter-img"
                                alt="" style="width: 50%">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr style="color: white">
        <div class="row mt-2">
            <div id="disqus_thread"></div>
        </div> 
    </div>

    @include('components.footer')
@endsection
