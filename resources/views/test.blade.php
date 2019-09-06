@extends('template.main')
@section('content')
<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">Reliable logistics with technology</div>
      <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
    </div>
  </div>
</header>

<!-- Services -->
<section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">BENEFITS</h2>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <!-- <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span> -->
        <img src="{{ asset('img/easy.png') }}" class="img-thumbnail" alt="easy">
        <h4 class="service-heading">EASY</h4>
        <p class="text-muted">The easiest way to deliver your goods and packages.</p>
      </div>
      <div class="col-md-4">
        <!-- <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span> -->
        <img src="{{ asset('img/comfort.png') }}" class="img-thumbnail" alt="COMFORTABLE">
        <h4 class="service-heading">COMFORTABLE</h4>
        <p class="text-muted">Having us as a one-stop logistic service allows you to rest assured, since it will save you both time and money.</p>
      </div>
      <div class="col-md-4">
        <!-- <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span> -->
        <img src="{{ asset('img/secure.png') }}" class="img-thumbnail" alt="SECURE">
        <h4 class="service-heading">SECURE</h4>
        <p class="text-muted">In order to make sure your logistic process never ceases to run smoothly, our supply chain management team efficiently arranges and optimizes your packages. 24/7, real time and with focus on sustainability.</p>
      </div>
    </div>
  </div>
</section>

<section class="mt-n5">
  <!-- coporate -->
  <div class="row bg-grey">
    <div class="col-md-6">
      <div class="p-5 my-5">
        <h2 class="section-heading text-uppercase text-center">CORPORATE</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis cupiditate doloribus distinctio harum labore culpa illo, incidunt corporis! Dolores maxime distinctio enim alias quos eos, non eaque? Expedita, laudantium praesentium.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="bg-coporate"></div>
    </div>
  </div>

  <!-- small business -->
  <div class="row bg-grey">
    <div class="col-md-6">
      <div class="bg-business"></div>
    </div>
    <div class="col-md-6">
      <div class="p-5 my-5">
        <h2 class="section-heading text-uppercase text-center">SMALL BUSINESS</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam perferendis cumque cupiditate facilis, esse eos laboriosam error praesentium dignissimos, nobis ipsum minus provident. Quaerat soluta vero iste dolor laborum? Deserunt.
        </p>
      </div>
    </div>
  </div>

  <!-- driver -->
  <div class="row bg-grey">
    <div class="col-md-6">
      <div class="p-5 my-5">
        <h2 class="section-heading text-uppercase text-center">Driver</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum praesentium, facilis adipisci, aliquam quod, a recusandae sit quam voluptatem molestiae voluptas voluptatum. Nisi nesciunt, quo consequuntur sit ullam fugiat. Cupiditate.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="bg-driver"></div>
    </div>
  </div>
</section>
<section class="mt-n5">
  <h2 class="section-heading text-uppercase text-center">Our Partners</h2>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="{{ asset('img/partner1.png') }}" alt="">
        </div>
        <div class="item">
          <img src="{{ asset('img/partner2.png') }}" alt="">
        </div>
        <div class="item">
          <img src="{{ asset('img/partner3.png') }}" alt="">
        </div>
        <div class="item">
          <img src="{{ asset('img/partner4.png') }}" alt="">
        </div>
        <div class="item">
          <img src="{{ asset('img/partner5.png') }}" alt="">
        </div>
      </div>
</section>
@endsection
@section('css')
<style>
  #mainNav .navbar-brand {
    color: #ffffff !important;
  }

  .btn-primary {
    background-color: #EF3D55;
    border-color: #EF3D55;
  }

  .img-thumbnail {
    border: 0;
  }

  .bg-grey {
    background-color: #f4f4f4;
  }

  .bg-coporate {
    /* The image used */
    background-image: url("/img/coporate.jpg");

    /* Full height */
    height: 100%;
    width: 100%;

    /* Center and scale the image nicely */
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .bg-business {
    /* The image used */
    background-image: url("/img/business.jpg");

    /* Full height */
    height: 100%;
    width: 100%;
    /* Center and scale the image nicely */
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .bg-driver {
    /* The image used */
    background-image: url("/img/driver.jpg");

    /* Full height */
    height: 100%;
    width: 100%;
    /* Center and scale the image nicely */
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .mt-n5 {
    margin-top: -10rem !important;
  }
</style>
@endsection
@section('script')
<script>
  $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      items: 4,
      loop: true,
      margin: 100,
      autoplay: true,
      autoplayTimeout: 2900,
      autoplayHoverPause: true
    });

  })
</script>
@endsection