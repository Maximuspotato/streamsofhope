@extends('layouts.app')

@section('content')

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('images/index.jpeg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h3 class="lead">Welcome to Streams of Hope</h3>
              <h2 class="heading">Empowering Vulnerable Communities to Build a Better Tomorrow</h2>
              <p style="display: inline-block;"><a href="https://vimeo.com/groups/9196/videos/815355489"  data-fancybox class="ftco-play-video d-flex"><span class="play-icon-wrap align-self-center mr-4"><span class="ion-ios-play"></span></span> <span class="align-self-center">Watch Video</span></a></p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="site-section section-counter">
    <div class="container">
      <div class="row">
          <div class="col-md-6 pr-5">
            <div class="block-48">
                <span class="block-48-text-1">Empowered Over</span>
                <div class="block-48-counter ftco-number" data-number="1000">0</div>
                <span class="block-48-text-1 mb-4 d-block">Young lives across 10 Kenyan counties</span>
                <p class="mb-0"><a href="{{ url('/causes') }}" class="btn btn-white px-3 py-2">See Our Impact</a></p>
              </div>
          </div>
          <div class="col-md-6 welcome-text">
            <h2 class="display-4 mb-3">Who Are We?</h2>
            <p class="lead">Streams of Hope is a community-driven organization based in Nairobi, Kenya, dedicated to restoring dignity and creating lasting change for vulnerable families.</p>
            <p class="mb-4">We believe that true transformation happens from the ground up. By providing access to quality education, women's empowerment programs, and holistic health initiatives, we equip individuals with the tools they need to break the cycle of poverty and build resilient futures.</p>
            <p class="mb-0"><a href="{{ url('/about') }}" class="btn btn-primary px-3 py-2">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section border-top">
      <div class="container">
        <div class="row">

    <div class="col-md-4">
      <div class="media block-6">
        <div class="icon"><span class="ion-ios-bulb"></span></div>
        <div class="media-body">
          <h3 class="heading">Partner With Us</h3>
          <p>We collaborate with local businesses, schools, and corporate organizations to design innovative solutions and amplify our grassroots impact.</p>
          <p><a href="{{ url('/contact') }}" class="link-underline">Let's Collaborate</a></p>
        </div>
      </div>     
    </div>

    <div class="col-md-4">
      <div class="media block-6">
        <div class="icon"><span class="ion-ios-cash"></span></div>
        <div class="media-body">
          <h3 class="heading">Make a Donation</h3>
          <p>Your financial support directly funds vital education, health initiatives, and empowerment programs that break the cycle of poverty.</p>
          <p><a href="{{ url('/donate') }}" class="link-underline">Donate Now</a></p>
        </div>
      </div>  
    </div>

    <div class="col-md-4">
      <div class="media block-6">
        <div class="icon"><span class="ion-ios-contacts"></span></div>
        <div class="media-body">
          <h3 class="heading">Become a Volunteer</h3>
          <p>Lend your time and skills to our grassroots projects. Join a passionate team dedicated to making a tangible difference on the ground.</p>
          <p><a href="{{ url('/about') }}" class="link-underline">Get Involved</a></p>
        </div>
      </div> 
    </div>

  </div>
    </div>
  </div> <!-- .site-section -->



  

  <div class="site-section fund-raisers bg-light">
    <div class="container">
      <div class="row mb-3 justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Latest Causes</h2>
          <p class="lead">Explore our active grassroots initiatives and see where your support is needed most right now. Discover how we are bringing education, health, and sustainable opportunities to communities in need.</p>
          <p><a href="{{ url('/causes') }}" class="link-underline">View All Causes</a></p>
        </div>
      </div>
    </div>

    <div class="container-fluid">

      <!-- <div class="row"> -->
        
        <div class="col-md-12 block-11">
          <div class="nonloop-block-11 owl-carousel">
            @foreach($causes as $cause)
            <div class="card fundraise-item">
              <a href="/causes/{{ $cause->slug }}">
                @if($cause->image_path)
                  <img class="card-img-top" src="{{ asset('storage/' . $cause->image_path) }}" alt="{{ $cause->title }}">
                @else
                  <img class="card-img-top" src="{{ asset('images/default-blog.jfif') }}" alt="Default" >
                @endif
              </a>
              <div class="card-body">
                <h3 class="card-title"><a href="/causes/{{ $cause->slug }}">{{ $cause->title }}</a></h3>
                <p class="card-text">{{ Str::words(strip_tags($cause->body), 15, '...') }}</p>
                <span class="donation-time mb-3 d-block">{{ $cause->created_at->format('M d, Y') }}</span>
              </div>
            </div>
            @endforeach          
          </div>
        </div>
      <!-- </div> -->
    </div>
  </div> <!-- .section -->

  <div class="featured-section overlay-color-2" style="background-image: url('{{ asset('images/success.jpeg') }}');">
    
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="{{ asset('images/success.jpeg') }}" alt="Image placeholder" class="img-fluid" width="70%" height="70%">
        </div>

        <div class="col-md-6 pl-md-5">
          <span class="featured-text d-block mb-3">Featured Success Story</span>
          <h2>Keeping Girls in School: The Menstrual Health Initiative</h2>
          <p class="mb-3">Lack of access to sanitary products forces many young girls to miss vital days of education every month. Through our recent community drive, we distributed reusable dignity kits and provided health mentorship to over 200 girls in Nairobi, ensuring they can pursue their studies with confidence and pride.</p>
          <span class="fund-raised d-block mb-5">Fully Funded: $1,500 Raised for Dignity Kits</span>

          <p><a href="{{ url('/causes') }}" class="btn btn-success btn-hover-white py-3 px-5">Read The Full Story</a></p>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center mb-5">
          <h2>News & Stories</h2>
          <p class="lead">Stay connected with our journey. Read updates from our field programs, volunteer highlights, and real stories of transformation.</p>
          <p><a href="{{ url('/blog') }}" class="link-underline">View All Posts</a></p>
        </div>
      </div>

      <div class="row">
        @foreach($blogs as $blog)
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry">
            <a href="{{ url('/blog/' . $blog->slug) }}" class="mb-3 img-wrap">
              <img src="{{ asset('storage/' . $blog->image_path) }}" alt="Image placeholder" class="img-fluid">
            </a>
            <h3><a href="{{ url('/blog/' . $blog->slug) }}">{{ $blog->title }}</a></h3>
            <span class="date mb-4 d-block text-muted">{{ $blog->created_at->format('M d, Y') }}</span>
            <p>{{ Str::words(strip_tags($blog->body), 15, '...') }}</p>
            <p><a href="{{ url('/blog/' . $blog->slug) }}" class="link-underline">Read More</a></p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div> <!-- .section -->

  <div class="featured-section overlay-color-2" style="background-image: url('{{ asset('images/volunteer.jpeg') }}');">
    
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