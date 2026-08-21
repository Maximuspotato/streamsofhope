@extends('layouts.app')

@section('content')
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/index.jpeg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-3">Better To Give Than To Receive</h2>
              <p class="lead text-white mt-3" style="font-weight: 400;">Your generosity directly fuels grassroots change across Nairobi. Every contribution helps us provide quality education, support menstrual health, and empower women to build sustainable futures.</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-3 justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Pay via mpesa</h2>
          <img src="{{ asset('images/mpesa.png') }}" alt="M-Pesa" srcset="">
          <p class="mb-5"><a href="#" class="link-underline">Also check our Gofund me page</a></p>
        </div>
      </div>
    </div>
  </div> <!-- .section -->

  <div class="featured-section overlay-color-2" style="background-image: url('images/bg_2.jpg');">
    
    <div class="container">
      <div class="row">

        <div class="col-md-6 mb-5 mb-md-0">
          <img src="{{ asset('images/volunteer.jpeg') }}" alt="Image placeholder" class="img-fluid">
        </div>

        <div class="col-md-6 pl-md-5">

          <div class="form-volunteer">
            <h2>Become a Volunteer</h2>
            <p class="mb-4">Join our grassroots team and use your skills to make a tangible difference in Nairobi.</p>
            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
              </div>
          @endif
            <form action="{{ route('inquiry.submit') }}" method="POST">
              @csrf 
              
              <!-- This hidden field tells the database it's a volunteer -->
              <input type="hidden" name="type" value="volunteer">
              
              <div class="form-group">
                  <input type="text" name="name" class="form-control py-2" placeholder="Your Full Name" required>
              </div>
              
              <div class="form-group">
                  <input type="email" name="email" class="form-control py-2" placeholder="Your Email Address" required>
              </div>
              
              <div class="form-group">
                  <!-- Changed name="v_message" to name="message" -->
                  <textarea name="message" cols="30" rows="3" class="form-control py-2" placeholder="Tell us how you'd like to help..." required></textarea>
              </div>
              
              <div class="form-group mb-0">
                  <button type="submit" class="btn btn-white px-5 py-2">Join the Team</button>
              </div>
          </form>
          </div>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

@endsection