@extends('frontend.layouts.basearsha')

@section('title', 'About Us')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
    <!-- Start about section -->
    <section id="about" class="about section mt-5" style="margin-top: 10%">
        <div class="container section-title" data-aos="fade-up">
            <h2>Download</h2>
        </div>

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-center">Download Katalog</h2>
                </div>
            </div>
        </div>

                    <div class="catalog-container">
                        <div class="catalog-item">
                            <a href="{{ asset('/arsha/assets/pdf/BROSUR.pdf') }}" download aria-label="Download Katalog 1">
                                <img src="{{ asset('/arsha/assets/pdf/BROSUR.jpg') }}" alt="Gambar Katalog 1" class="catalog-image">
                                <span class="catalog-text"><i class="fas fa-download"></i> Download Katalog 1</span>
                                <p class="catalog-description">Deskripsi singkat tentang Katalog 1.</p>
                            </a>
                        </div>
                        <div class="catalog-item">
                            <a href="{{ asset('/arsha/assets/pdf/BROSUR OK.pdf') }}" download aria-label="Download Katalog 2">
                                <img src="{{ asset('/arsha/assets/pdf/BROSUR OK.jpg') }}" alt="Gambar Katalog 2" class="catalog-image">
                                <span class="catalog-text"><i class="fas fa-download"></i> Download Katalog 2</span>
                                <p class="catalog-description">Deskripsi singkat tentang Katalog 2.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <!-- End about section -->
@endsection
