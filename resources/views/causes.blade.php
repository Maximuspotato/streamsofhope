@extends('layouts.app')

@section('content')
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-5">Our Causes</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  
  <div class="site-section bg-light">
    <div class="container">
      

      <div class="row">
        @foreach($causes as $cause)
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="post-entry">
              <a href="/causes/{{ $cause->slug }}" class="mb-3 img-wrap">
                <img src="images/img_4.jpg" alt="Image placeholder" class="img-fluid">
              </a>
              <h3><a href="/causes/{{ $cause->slug }}">{{ $cause->title }}</a></h3>
              <span class="date mb-4 d-block text-muted">{{ $cause->created_at->format('M d, Y') }}</span>
              <p>{{ $cause->excerpt }}</p>
              <p><a href="/causes/{{ $cause->slug }}" class="link-underline">Read More</a></p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div> <!-- .section -->

@endsection