@extends('frontend.layouts.basearsha')

@section('title', 'About Us')

@section('content')

<!-- Services Section -->
<section id="services" class="services section light-background mt-5" style="margin-top: 10%">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Customer</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
      <div class="customers-logos">
        <img src="{{('arsha/assets/img/ourcustomer/ourcustomer.png')}}" alt="Customer 1" class="customer-logo">
        <img src="{{('arsha/assets/img/ourcustomer/ourcustomer2.jpg')}}" alt="Customer 2" class="customer-logo">
        <img src="{{('arsha/assets/img/ourcustomer/ourcustomer3.png')}}" alt="Customer 3" class="customer-logo">
        <img src="{{('arsha/assets/img/ourcustomer/ourcustomer4.png')}}" alt="Customer 4" class="customer-logo">
        <img src="{{('arsha/assets/img/ourcustomer/ourcustomer5.jpg')}}" alt="Customer 5" class="customer-logo">
        <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
      </div>
    </div>
  </section>
  <!-- End Our Customers Section -->

      </div>

    </div>

  </section><!-- /Services Section -->


@endsection
