@extends('layouts.app')

@section('content')

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="postlogin">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="password"></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="page-hero bg-image overlay-dark" style="background-image: url(assets/img/bg-apus.png);">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">Let's predict the disease </span>
      <h1 class="display-4">On Your Cat</h1>
      <a href="#" class="btn btn-primary">Let's Predictions</a>
    </div>
  </div>
</div>

<div class="bg-light">
  <div class="page-section py-3 mt-md-n5 custom-index">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Forum</span> share questions and experiences</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>Cat</span> disease prediction</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>News</span> about cat disease</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1>Welcome to Apus</h1>
          <p class="text-grey mb-4">Apus is a website to view skin diseases in cats from the predictions that have been provided on this website and there is also a forum to share with others, and there are articles on this website about cat diseases and others</p>
          <a href="about.html" class="btn btn-primary">Learn More</a>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
          <div class="img-place custom-img-1">
            <img src="../assets/img/bg-doctor.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Latest News</h1>
    <div class="row mt-5">
      <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
          <div class="header">
            <div class="post-category">
              <a href="#">Covid19</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
              <img src="../assets/img/blog/blog_1.jpg" alt="">
            </a>
          </div>
          <div class="body">
            <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="../assets/img/person/person_1.jpg" alt="">
                </div>
                <span>Roger Adams</span>
              </div>
              <span class="mai-time"></span> 1 week ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
          <div class="header">
            <div class="post-category">
              <a href="#">Covid19</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
              <img src="../assets/img/blog/blog_2.jpg" alt="">
            </a>
          </div>
          <div class="body">
            <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="../assets/img/person/person_1.jpg" alt="">
                </div>
                <span>Roger Adams</span>
              </div>
              <span class="mai-time"></span> 4 weeks ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
          <div class="header">
            <div class="post-category">
              <a href="#">Covid19</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
              <img src="../assets/img/blog/blog_3.jpg" alt="">
            </a>
          </div>
          <div class="body">
            <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="../assets/img/person/person_2.jpg" alt="">
                </div>
                <span>Diego Simmons</span>
              </div>
              <span class="mai-time"></span> 2 months ago
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 text-center mt-4 wow zoomIn">
        <a href="blog.html" class="btn btn-primary">Read More</a>
      </div>

    </div>
  </div>
</div> <!-- .page-section -->

@endsection