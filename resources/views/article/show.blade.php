@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">

<section class="magazine-section my-5">


  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-6 col-md-12">

      <!-- Featured news -->
      <div class="single-news mb-lg-0 mb-4">

        <!-- Image -->
        <div class="view overlay rounded z-depth-1-half mb-4">
          <img class="img-fluid" src="{{ asset('storage/'.$articles->image) }}" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Data -->
        <div class="news-data d-flex justify-content-between">
          <a href="#!" class="deep-orange-text">
            <h6 class="font-weight-bold"><i class="fas fa-utensils pr-2"></i>{{ $articles -> category }}</h6>
          </a>
          <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>By :{{ $articles->user['name'] }}  at:{{ $articles -> created_at }}</p>
        </div>

        <!-- Excerpt -->
        <h3 class="font-weight-bold dark-grey-text mb-3"><a>{{ $articles -> title }}</a></h3>
        <p class="dark-grey-text mb-lg-0 mb-md-5 mb-4">{{ $articles -> content }}</p>

      </div>
      <!-- Featured news -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-6 col-md-12">

      <!-- Small news -->
      <div class="single-news mb-4">

        <!-- Grid row -->
        <div class="row">

        <div class="card">
           <h5 class="card-header h5">Plus d'info</h5>
            <div class="card-body">
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
<br>
<br>
        <div class="card">
           <h5 class="card-header h5">Plus d'info</h5>
            <div class="card-body">
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        

        </div>
        <!-- Grid row -->

      </div>
      <!-- Small news -->

    </div>
    <!--Grid column-->
  


</section>
</div>
</div>




@endsection