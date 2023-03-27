@extends('layouts.app')

@section('content')
    @include('components.header')
    <div class="container mt-5 py-5">
        <div class="row justify-content-center text-light mt-5">
            <p class="fs-1 text-white fw-bold">
                BOOKMARK
            </p>
        </div>
        <div class="row mt-5">
            {{-- @foreach ($terbaru as $new) --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="asset/upload/buku/1679865425.webp">
                    </div>
                    <div class="product__item__text">
                        <ul>
                            <li>awd</li>
                            <li>adww</li>
                        </ul>
                        <h5><a href="#">awd</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="asset/upload/buku/1679865425.webp">
                    </div>
                    <div class="product__item__text">
                        <ul>
                            <li>awd</li>
                            <li>adww</li>
                        </ul>
                        <h5><a href="#">awd</a></h5>
                    </div>
                </div>
            </div>
            {{-- @endfo --}}
        </div>
    @endsection
