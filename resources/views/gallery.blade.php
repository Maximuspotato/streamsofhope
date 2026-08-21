@extends('layouts.app')

@section('content')
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('images/index.jpeg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-3">Our Gallery</h2>
              <p class="lead mb-5">Step into the field with us. Browse our visual journey to see the real faces, grassroots action, and lasting impact we are making across Nairobi communities.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        
        <!-- Check if there are images in the array -->
        @forelse($images as $image)
          <div class="col-md-4 mb-4">
            <a href="{{ asset($image) }}" class="img-hover" data-fancybox="gallery">
              <span class="icon icon-search"></span>
              <img src="{{ asset($image) }}" alt="Gallery Image" class="img-fluid">
            </a>
          </div>
        @empty
          <div class="col-12 text-center">
            <p>More photos coming soon!</p>
          </div>
        @endforelse

      </div>
    </div>
  </div>

@endsection