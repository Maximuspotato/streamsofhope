@extends('layouts.app')

@section('content')
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/index.jpeg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-3">Our Causes</h2>
              <p class="lead mb-5">Explore the active initiatives we are running across Nairobi. From youth education to women's empowerment and menstrual health, see exactly how your support creates on-the-ground change.</p>
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
                @if($cause->image_path)
                  <img src="{{ asset('storage/' . $cause->image_path) }}" alt="{{ $cause->title }}" class="img-fluid">
                @else
                    <!-- Fallback image if they didn't upload one -->
                    <img src="{{ asset('images/default-blog.jfif') }}" alt="Default Image" class="img-fluid">
                @endif
              </a>
              <h3><a href="/causes/{{ $cause->slug }}">{{ $cause->title }}</a></h3>
              <span class="date mb-4 d-block text-muted">{{ $cause->created_at->format('M d, Y') }}</span>
              <p>{{ Str::words(strip_tags($cause->body), 15, '...') }}</p>
              <p><a href="/causes/{{ $cause->slug }}" class="link-underline">Read More</a></p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div> <!-- .section -->

@endsection