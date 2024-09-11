@extends('frontend.layouts.basearsha')

@section('title', 'About Us')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <!-- Start about section -->
    <section id="about" class="about section mt-5" style="margin-top: 10%">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              <span class="bold-text">PT. Larose Shukufuku Andalan</span> is the Indonesian most reliable Engineering Services Company and Marketing Division of Mechanical, Electrical, Automotive and Marines Products.
            </p>
          </div>

          <!-- Start New Row for Mission and Clients -->
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <p><span class="bold-text">Our mission</span> is providing total solution to protect our client assets and effectiveness in all aspects. Every product is highly dedicated by our expertise knowledge about products, application and having extensive field experience to fulfill the client needs with very reasonable price.</p>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <p><span class="bold-text">Our Clients</span> (direct and indirect) are spread in various kinds of industries such as: Oil and Gas, Fertilizer, Petrochemical & Chemical, Power Station, Pulp & Paper, Automotive, Marines, Sugar Mills, Textile and Yarn, Engineering Procurement Contractor and Other General Industries.</p>
            </div>
          </div>
          <!-- End New Row -->

        </div>

      </div>

    </section>
    <!-- End about section -->

    <!-- Link to your JavaScript file if necessary -->
    <script src="scripts.js"></script>
  </body>


@endsection
