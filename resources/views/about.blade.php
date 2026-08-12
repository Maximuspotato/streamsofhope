@extends('layouts.app')

@section('content')

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('images/header.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">About Streams of Hope</h2>
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
            <p class="lead">A world where every individual and community has the opportunity, support, and hope needed to thrive and reach their full potential.</p>
          </div>
          <div class="col-md-6">
            <h3 class="text-primary mb-3">Our Mission</h3>
            <p>To empower vulnerable children, youth, women, and families through education, mentorship, health initiatives, economic empowerment, and community-driven programs that create lasting positive change.</p>
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
                <p>Equipping youth and children with the vital education and skills development necessary to secure their futures and foster independence.</p>
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
                <p>Creating safe spaces and actionable pathways to support gender equity and economic empowerment for women and girls.</p>
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
                <p>Delivering critical menstrual health and hygiene programs, alongside accessible mental health and well-being support.</p>
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
                <p>Championing mentorship, leadership development, and sustainable community projects designed for lasting impact.</p>
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
            <div class="block-30 no-overlay item" style="background-image: url('images/bg_2.jpg');"></div>
            <div class="block-30 no-overlay item" style="background-image: url('images/bg_1.jpg');"></div>
            <div class="block-30 no-overlay item" style="background-image: url('images/bg_3.jpg');"></div>
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
              <p>Everything we do is guided by Hope, Integrity, Compassion, Inclusivity, Empowerment, Accountability, and Sustainability.</p>
              <p><a href="{{ url('/about') }}" class="link-underline">Learn More</a></p>
            </div>
          </div>     
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-globe"></span></div>
            <div class="media-body">
              <h3 class="heading">Our Impact</h3>
              <p>"Creating pathways of opportunity, restoring dignity, and building resilient communities one life at a time."</p>
              <p><a href="{{ url('/causes') }}" class="link-underline">See Our Work</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-contacts"></span></div>
            <div class="media-body">
              <h3 class="heading">Get Involved</h3>
              <p>Based in Nairobi, Kenya, we welcome volunteers and partners. Reach out at info@streamsofhope.org.</p>
              <p><a href="{{ url('/contact') }}" class="link-underline">Contact Us</a></p>
            </div>
          </div> 
        </div>

      </div>
    </div>
  </div> <!-- .site-section -->
  
@endsection