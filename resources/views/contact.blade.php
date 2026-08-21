@extends('layouts.app')

@section('content')
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/index.jpeg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
  <h2 class="heading">Get In Touch</h2>
  <p class="lead text-white mt-3" style="font-weight: 400;">Whether you want to partner with us, volunteer your time, or simply learn more about our grassroots work in Nairobi, we would love to hear from you.</p>
</div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
              </div>
          @endif
          <form action="{{ route('inquiry.submit') }}" method="POST">
            <!-- The CSRF token is required by Laravel to prevent cross-site request forgery -->
            @csrf

            <input type="hidden" name="type" value="contact">
            
            <div class="form-group">
              <!-- Added name="name" and required -->
              <input type="text" name="name" id="name" class="form-control px-3 py-3" placeholder="Your Full Name" required>
            </div>
            
            <div class="form-group">
              <!-- Changed type="email", added name="email" and required -->
              <input type="email" name="email" id="email" class="form-control px-3 py-3" placeholder="Your Email Address" required>
            </div>
            
            <div class="form-group">
              <!-- Added name="message" and a more inviting placeholder -->
              <textarea name="message" id="message" cols="30" rows="7" class="form-control px-3 py-3" placeholder="How can we partner or help you today?" required></textarea>
            </div>
            
            <div class="form-group mb-0">
              <!-- Changed to a <button> tag for better modern browser support -->
              <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
            </div>
          </form>
        
        </div>

        <div class="col-md-6" id="map"></div>
      </div>
    </div>
  </div>

@endsection