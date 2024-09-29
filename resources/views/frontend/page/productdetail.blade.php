@extends('frontend.layouts.basearsha')

@section('title', 'About Us')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
        <h1>Portfolio Details</h1>
      </div>
    </div><!-- End Page Title -->

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    </head>

    <!-- product- Details Section -->
    <section id="product-details" class="product-details section mt-5" style="margin-top: 10%">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-8">
        <div class="product-details-slider swiper init-swiper">
          <div class="swiper-wrapper align-items-center">
            @forelse ($product->galleries as $item)
              <div class="swiper-slide">
                <img src="{{ asset('/storage/' . $item->image) }}" alt="" class="slider-img">
              </div>
            @empty
              <div>Ga ada Foto</div>
            @endforelse
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="product-info" data-aos="fade-up" data-aos-delay="200">
          <h3>Product Information</h3>
          <ul>
            <li>
              <strong>Rating</strong>:
              @for ($i = 1; $i <= 5; $i++)
                @if ($i <= $product->star)
                  <span>&#9733;</span> <!-- Bintang terisi -->
                @else
                  <span>&#9734;</span> <!-- Bintang kosong -->
                @endif
              @endfor
            </li>
            <li>
              <strong>Name Product</strong>:
              <span class="product-name">{{ $product->name }}</span>
            </li>
            <li><strong>Code</strong>: {{ $product->code }}</li>
            <li><strong>Category</strong>: {{ $product->category->name }}</li>
            <li><strong>Project Date</strong>: {{ $product->created_at }}</li>
            <li><strong>Short Description</strong>: {{ $product->short_description }}</li>
            <li><strong>Description</strong>: {!! $product->description !!}</li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</section><!-- /product Details Section -->


  </main>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.product-details-slider', {
      loop: true,
      speed: 600,
      autoplay: {
        delay: 5000,
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
      },
    });
  </script>

@endsection
