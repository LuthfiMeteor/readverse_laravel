@extends('layouts.app')
@section('content')
    @include('components.header')
    @include('components.herosec')
    <section class="product spad" style="background-color: #1A1A1A">
        <div class="container">
            <div class="row">
                @include('components.maincontent')
                @include('components.sidebar')
            </div>
        </div>
    </section>
    @include('components.footer')
@endsection
