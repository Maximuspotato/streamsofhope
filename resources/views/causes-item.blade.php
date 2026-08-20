@extends('layouts.app')

@section('content')
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      @if($cause->image_path)
        <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('storage/' . $cause->image_path) }}');" data-stellar-background-ratio="0.5">
      @else
          <!-- Fallback image if they didn't upload one -->
          <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('images/default-blog.jfif') }}');" data-stellar-background-ratio="0.5">
      @endif
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">
              <span class="text-white text-uppercase">{{ $cause->created_at->format('F d, Y') }}</span>
              <h2 class="heading mb-5">{!! $cause->title !!}</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  
  <div id="blog" class="site-section">
    <div class="container">
            
            <div class="row">

              <div class="col-md-8">
                
                <p>{!! $cause->body !!}</p>
                
              </div> <!-- .col-md-8 -->
              <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                  {{-- <div class="categories">
                    <h3>Categories</h3>
                    <li><a href="#">Read next post</a></li>
                    <li><a href="#">Read previous post</a></li>
                    <li><a href="#">More blog posts</a></li>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
  </div>

@endsection