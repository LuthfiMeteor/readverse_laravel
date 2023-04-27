@extends('layouts.app')

@section('content')
    @include('components.header')
    <div class="container mt-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4>manga</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @if (count($manga) === 0)
                <p class="fs-1 text-white fw-bold position-absolute top-50 start-50 translate-middle">
                    Tidak Ada Buku Yang Di <i class="fa-regular fa-bookmark fa-2xl"></i>
                </p>
            @else
                @foreach ($manga as $buku)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="asset/upload/buku/{{ $buku->image }}">
                                <div class="ep">? / ?</div>
                                <div class="comment"><i class="fa fa-comments"></i>0</div>
                                <div class="view"><i class="fa fa-eye"></i>{{ $buku->Views }}</div>
                            </div>
                            <div class="product__item__text">
                                <ul>
                                    <li>{{ $buku->Status_manga }}</li>
                                    <li>{{ $buku->Type }}</li>
                                </ul>
                                <input type="hidden" name="id" class="view-type" value="{{ $buku->id }}">

                                <h5><a href="buku/{{ $buku->id }}" class="views_controll">{{ $buku->judul }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
