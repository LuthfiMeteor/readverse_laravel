@extends('layouts.app')
@section('content')
    @include('components.header')
    <!-- Anime Section Begin -->
    <section class="anime-details spad mt-5 pt-5">
        <div class="container mt-5">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{ asset('asset/upload/buku/' . $buku->image) }}">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i>{{ $buku->Views }}</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $buku->judul }}</h3>
                                <small class="text-white">{{ $buku->judul_lain }}</small>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p class="text-break text-left">{{ $buku->deskripsi }}</p>
                            <input type="hidden" name="buku_id" class="buku_id" value="{{ $buku->id }}">
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span>{{ $buku->Type }}</li>
                                            <li><span>Author:</span>{{ $buku->author }}</li>
                                            <li><span>Chapters:</span>{{ $buku->Chapter }}</li>
                                            <li><span>Status:</span>{{ $buku->Status_manga }}</li>
                                            <li><span>Genre:</span>{{ $buku->Genre }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Rating:</span>{{ $buku->rating }}</li>
                                            <li><span>Rilis:</span>
                                                {{ $buku->rilis }}</li>
                                            <li><span>Publisher:</span> Kadokawa</li>
                                            <li><span>Views:</span> {{ $buku->Views }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">

                                <a href="#" id="bookmark" class="follow-btn">
                                    <i class="fa-regular fa-bookmark fa-2xl" onclick="myFunction(this)"></i></a>
                                <a href="#" class="watch-btn"><span>Read Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>CHAPYER {{ $buku->judul }}</h5>
                        </div>

                        <ul class="list-group bg-dark">
                            @foreach ($chapter as $chapters)
                                <li class="list-group-item ">Chapter {{ $chapters->chapter }}</li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Your Comment</h5>
                        </div>
                        <form action="#">
                            <textarea placeholder="Your Comment"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>you might like...</h5>
                        </div>
                        @foreach ($rekom as $items)
                            <div class="product__sidebar__view__item set-bg"
                                data-setbg="{{ asset('asset/upload/buku/' . $items->image) }}">
                                <div class="ep">1 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i>{{ $items->Views }}</div>
                                <h5><a href="#">{{ $items->judul }}</a></h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->
    @include('components.footer')
@endsection
@section('script')
    <script>
        var button = document.querySelector('#bookmark');
        button.addEventListener('click', changeIcon);

        function changeIcon() {
            var icon = document.querySelector('#bookmark i');
            icon.classList.remove('fa-regular');
            icon.classList.add('fa-solid');
        }
    </script>
@endsection
