@extends('layouts.app')

@section('content')
    @include('components.header')
    <div class="container mt-5 py-5">
       
        <div class="live__product">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 mt-5">
                <div class="section-title">
                    <h4>Search Result</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($searchbuku as $hasilsearch)
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="asset/upload/buku/{{ $hasilsearch->image }}">
                            <div class="ep">? / ?</div>
                            <div class="comment"><i class="fa fa-comments"></i>0</div>
                            <div class="view"><i class="fa fa-eye"></i>{{ $hasilsearch->Views }}</div>
                        </div>
                        <div class="product__item__text">
                            <ul>
                                <li>{{ $hasilsearch->Status_manga }}</li>
                                <li>{{ $hasilsearch->Type }}</li>
                            </ul>
                            <h5><a href="buku/{{ $hasilsearch->id }}">{{ $hasilsearch->judul }}</a></h5>
                        </div>
                    </div>
                </div>
            @empty
                <p class="fs-1 text-white fw-bold position-absolute top-50 start-50 translate-middle">
                    Tidak Ada Buku 
                </p>
            @endforelse 
        </div>
    </div>
    @endsection
