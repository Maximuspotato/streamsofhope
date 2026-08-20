@extends('layouts.app')

@section('content')

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('images/index.jpeg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">About Streams of Hope</h2>
              <p class="lead text-white mt-3" style="font-weight: 400;">A grassroots movement dedicated to empowering Nairobi's most vulnerable through education, health, and sustainable community action.</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="site-section mb-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 mb-5"><h1>Our Vision & Mission</h1></div>
        <div class="col-md-6">
            <h3 class="text-primary mb-3">Our Vision</h3>
            <p class="lead">A world where every individual and community has the resources, support, and hope required to thrive and unlock their limitless potential.</p>
          </div>
          <div class="col-md-6">
            <h3 class="text-primary mb-3">Our Mission</h3>
            <p>To uplift vulnerable children, youth, and women through quality education, holistic health initiatives, and economic empowerment—igniting community-driven programs that create generational change.</p>
          </div>
      </div>
      
      <div class="row mt-5">
        <div class="col-md-12 mb-5 text-center mt-5">
          <h2>What We Do</h2>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <div class="icon"><span class="ion-ios-globe"></span></div>
                <h3 class="block-38-heading">Education & Skills</h3>
                <p class="block-38-subheading">Development</p>
              </div>
              <div class="block-38-body">
                <p>Providing essential academic resources and vocational training to youth, paving the way for lifelong independence and breaking the cycle of poverty.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <div class="icon"><span class="ion-ios-female"></span></div>
                <h3 class="block-38-heading">Women's & Girls'</h3>
                <p class="block-38-subheading">Empowerment</p>
              </div>
              <div class="block-38-body">
                <p>Fostering safe spaces and economic opportunities that champion gender equity, ensuring every woman and girl can lead with confidence and dignity.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <div class="icon"><span class="ion-ios-heart"></span></div>
                <h3 class="block-38-heading">Health & Wellness</h3>
                <p class="block-38-subheading">Holistic Support</p>
              </div>
              <div class="block-38-body">
                <p>Promoting physical and mental well-being through vital menstrual hygiene programs, health education, and compassionate psychosocial support.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <div class="icon"><span class="ion-ios-people"></span></div>
                <h3 class="block-38-heading">Community Action</h3>
                <p class="block-38-subheading">Sustainable Projects</p>
              </div>
              <div class="block-38-body">
                <p>Building resilient communities from the ground up through localized mentorship, grassroots leadership training, and sustainable impact projects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="block-31 mb-5" style="position: relative;">
          <div class="owl-carousel loop-block-31">
            <div class="block-30 no-overlay item" style="background-image: url('images/about2.jpeg');"></div>
            <div class="block-30 no-overlay item" style="background-image: url('images/header.jpg');"></div>
            <div class="block-30 no-overlay item" style="background-image: url('images/about.jpeg');"></div>
          </div>
        </div>
    </div>
  </div>

  <div class="site-section border-top">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-heart"></span></div>
            <div class="media-body">
              <h3 class="heading">Our Core Values</h3>
              <p>Rooted in Hope, Integrity, and Compassion. We champion Inclusivity, Accountability, and Sustainable Empowerment in every community we touch.</p>
              <p><a href="{{ url('/about') }}" class="link-underline">Learn More</a></p>
            </div>
          </div>     
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-globe"></span></div>
            <div class="media-body">
              <h3 class="heading">Our Impact</h3>
              <p>"From restoring human dignity to creating tangible pathways out of poverty, we are building resilient communities—one life at a time."</p>
              <p><a href="{{ url('/causes') }}" class="link-underline">See Our Work</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-contacts"></span></div>
            <div class="media-body">
              <h3 class="heading">Get Involved</h3>
              <p>Change starts locally. Based in Nairobi, Kenya, we are actively looking for passionate volunteers and partners. Let's make an impact together.</p>
              <p><a href="{{ url('/contact') }}" class="link-underline">Contact Us</a></p>
            </div>
          </div> 
        </div>

      </div>
    </div>
  </div> <!-- .site-section -->
  
@endsection