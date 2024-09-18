@extends('frontend.layouts.basearsha')

@section('title', 'About Us')

@section('content')


<section id="portfolio" class="portfolio section mt-5" style="margin-top: 10%">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>All Product</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($products as $product)
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="{{ asset('storage/assets/product/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                    <div class="portfolio-info">
                        <h4>{{ $product->name }}</h4>
                        <p>{!! $product->description !!}</p>
                        <a href="{{ asset('storage/assets/product/' . $product->image) }}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="{{ route('productdetail', $product->slug) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                @empty
                    <p>No products available.</p>
                @endforelse

            </div><!-- End portfolio Container -->

        </div>

    </div>

</section><!-- /portfolio Section -->



  </main>
@endsection
