<div class="col-lg-8">
    <div class="trending__product">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4>Trending Now</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($buku as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="asset/upload/buku/{{ $item->image }}">
                            <div class="ep">? / ?</div>
                            <div class="comment"><i class="fa fa-comments"></i>0</div>
                            <div class="view"><i class="fa fa-eye"></i> 0</div>
                        </div>
                        <div class="product__item__text">
                            <ul>
                                <li>{{ $item->Status_manga }}</li>
                                <li>{{ $item->Type }}</li>
                            </ul>
                            <h5><a href="buku/{{ $item->id }}">{{ $item->judul }}</a></h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="popular__product">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4>Popular Read</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($popular as $pop)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="asset/upload/buku/{{ $pop->image }}">
                            <div class="ep">? / ?</div>
                            <div class="comment"><i class="fa fa-comments"></i> 0</div>
                            <div class="view"><i class="fa fa-eye"></i>{{$pop->Views}}</div>
                        </div>
                        <div class="product__item__text">
                            <ul>
                                <li>{{ $pop->Status_manga }}</li>
                                <li>{{ $pop->Type }}</li>
                            </ul>
                            <h5><a href="buku/{{ $pop->id }}">{{ $pop->judul }}</a></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="recent__product">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4>Recently Added</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($terbaru as $new)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="asset/upload/buku/{{ $new->image }}">
                            <div class="ep">? / ?</div>
                            <div class="comment"><i class="fa fa-comments"></i>0</div>
                            <div class="view"><i class="fa fa-eye"></i>{{ $new->Views }}</div>
                        </div>
                        <div class="product__item__text">
                            <ul>
                                <li>{{ $new->Status_manga }}</li>
                                <li>{{ $new->Type }}</li>
                            </ul>
                            <h5><a href="buku/{{ $new->id }}">{{ $new->judul }}</a></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="live__product">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4>Manhua</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($manhwa as $korea)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="asset/upload/buku/{{ $korea->image }}">
                            <div class="ep">? / ?</div>
                            <div class="comment"><i class="fa fa-comments"></i>0</div>
                            <div class="view"><i class="fa fa-eye"></i>{{ $korea->Views }}</div>
                        </div>
                        <div class="product__item__text">
                            <ul>
                                <li>{{ $korea->Status_manga }}</li>
                                <li>{{ $korea->Type }}</li>
                            </ul>
                            <h5><a href="buku/{{ $korea->id }}">{{ $korea->judul }}</a></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
