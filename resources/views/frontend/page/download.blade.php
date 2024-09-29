@extends('frontend.layouts.basearsha')

@section('title', 'About Us')

@section('content')

    <!-- Start about section -->
    <section id="about" class="about section mt-5" style="margin-top: 10%">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Download</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <h2>Download Katalog</h2>
                    <ul class="catalog-list">
                        <li class="catalog-item">
                            <a href="{{ asset('/arsha/assets/pdf/BROSUR.pdf') }}" download aria-label="Download Katalog 1">
                                <img src="{{ asset('/arsha/assets/pdf/BROSUR.jpg') }}" alt="Gambar Katalog 1" class="catalog-image">
                                <span class="catalog-text">Download Katalog 1</span>
                            </a>
                        </li>
                        <hr> <!-- Pemisah antara Katalog 1 dan Katalog 2 -->
                        <li class="catalog-item">
                            <a href="{{ asset('/arsha/assets/pdf/BROSUR OK.pdf') }}" download aria-label="Download Katalog 2">
                                <img src="{{ asset('/arsha/assets/pdf/BROSUR OK.jpg') }}" alt="Gambar Katalog 2" class="catalog-image">
                                <span class="catalog-text">Download Katalog 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <style>
                .catalog-list {
                    list-style-type: none;
                    padding: 0;
                }

                .catalog-item {
                    margin-bottom: 15px;
                    display: flex;
                    align-items: center;
                }

                .catalog-image {
                    width: 100px;
                    height: auto;
                    margin-right: 10px;
                }

                .catalog-text {
                    font-size: 16px;
                    font-weight: bold;
                    text-decoration: none;
                    color: #333; /* Ganti dengan warna sesuai tema */
                }

                .catalog-text:hover {
                    color: #007bff; /* Ganti dengan warna hover sesuai tema */
                    text-decoration: underline;
                }

                hr {
                    border: 10px solid #ddd; /* Ganti warna dan ketebalan garis sesuai tema */
                    margin: 10px 0; /* Jarak atas dan bawah */
                }
            </style>
        </div>
    </section>

    <!-- End about section -->
@endsection
