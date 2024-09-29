@extends('frontend.layouts.basearsha')

@section('title', 'About Us')

@section('content')

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>

<main class="main">
    <!-- product- Details Section -->
    <section id="product-details" class="product-details section mt-5" style="margin-top: 10%">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-8">
            @if($product->galleries->isEmpty())
              <div>Tidak ada gambar tersedia</div>
            @else
              <div class="product-details-slider swiper init-swiper">
                <div class="swiper-wrapper align-items-center">
                  @foreach ($product->galleries as $item)
                    <div class="swiper-slide">
                      <img src="{{ asset('/storage/' . $item->image) }}" alt="" class="slider-img">
                    </div>
                  @endforeach
                </div>
                <div class="swiper-pagination"></div>
              </div>
            @endif
          </div>

          <div class="col-lg-4">
            <div class="product-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Informasi Produk</h3>
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
                  <strong>Nama Produk</strong>:
                  <span class="product-name">{{ $product->name }}</span>
                </li>
                <li><strong>Kode</strong>: {{ $product->code }}</li>
                <li><strong>Kategori</strong>: {{ $product->category->name }}</li>
                <li><strong>Tanggal Proyek</strong>: {{ $product->created_at }}</li>
                <li><strong>Deskripsi Singkat</strong>: {{ $product->short_description }}</li>
                <li><strong>Deskripsi</strong>: {!! $product->description !!}</li>
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
    document.addEventListener("DOMContentLoaded", function() {
      var swiperElement = document.querySelector('.product-details-slider');
      if (swiperElement) {
        var swiper = new Swiper(swiperElement, {
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
      }
    });
  </script>

@endsection
