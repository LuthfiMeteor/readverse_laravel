@extends('layouts.app')

@section('content')
    @include('components.header')
    <div class="container mt-5 py-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 mt-5">
                <div class="section-title">
                    <h4>Bookmark</h4>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            @if (count($bookmark) === 0)
                <p class="fs-1 text-white fw-bold position-absolute top-50 start-50 translate-middle">
                    Tidak Ada Buku Yang Di <i class="fa-regular fa-bookmark fa-2xl"></i>
                </p>
            @else
                @foreach ($bookmark as $new)
                    <div class="col-md-2 mt-3">
                        <div class="card h-100 bg-dark text-white">

                            <img src="{{ asset('asset/upload/buku/' . $new->buku->image) }}" alt=""
                                class="card-img-top">
                            <div class="card-body">
                                <div class="card-title">
                                    <input type="hidden" name="buku_id" class="buku_id" value="{{ $new->buku_id }}">
                                    <a href="buku/{{ $new->buku->id }}" class="text-light">{{ $new->buku->judul }}</a>
                                </div>
                                <div class="button btn btn-outline-danger d-block hapus">HAPUS</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        
    @endsection
