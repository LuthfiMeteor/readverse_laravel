@section('plugin')
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
@endsection

<section id="image-carousel" class="splide rounded" aria-label="Beautiful Images">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
				<img src="{{ asset('img/4bb0742d-faba-4476-b462-ea8d3a054c17.jpeg') }}" alt="">
			</li>
			<li class="splide__slide">
				<img src="image02.jpg" alt="">
			</li>
			<li class="splide__slide">
				<img src="image03.jpg" alt="">
			</li>
		</ul>
  </div>
</section>
@section('script')
    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<script>
var splide = new Splide( '.splide', {
  type   : 'loop',
  padding: '5rem',
  perPage: 3,
} );

splide.mount();
</script>
@endsection