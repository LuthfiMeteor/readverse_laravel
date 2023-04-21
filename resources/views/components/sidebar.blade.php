<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="product__sidebar">
        <div class="product__sidebar__view">
            <div class="section-title">
                <h5>Top Read</h5>
            </div>
            @foreach ($top as $item)
                <div class="filter__gallery">
                    <div class="product__sidebar__view__item set-bg" data-setbg="asset/upload/buku/{{ $item->image }}">
                        <div class="ep">? / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> {{ $item->Views }}</div>
                        <h5><a href="buku/{{ $item->id }}">{{ $item->judul }}</a></h5>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="product__sidebar__comment">
            <div class="section-title">
                <h5>New Comment</h5>
            </div>
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="img/sidebar/comment-1.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul>
                        <li>Active</li>
                        <li></li>
                    </ul>
                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                    <span><i class="fa fa-eye"></i> 19.141 Reader</span>
                </div>
            </div>
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="img/sidebar/comment-2.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul>
                        <li>Active</li>
                        <li></li>
                    </ul>
                    <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                    <span><i class="fa fa-eye"></i> 19.141 Reader</span>
                </div>
            </div>
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="img/sidebar/comment-3.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul>
                        <li>Active</li>
                        <li></li>
                    </ul>
                    <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                    <span><i class="fa fa-eye"></i> 19.141 Reader</span>
                </div>
            </div>
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="img/sidebar/comment-4.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul>
                        <li>Active</li>
                        <li></li>
                    </ul>
                    <h5><a href="#">Monogatari Series: Second Season</a></h5>
                    <span><i class="fa fa-eye"></i> 19.141 Reader</span>
                </div>
            </div>
        </div>
    </div>
</div>
