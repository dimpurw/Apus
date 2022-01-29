@extends('layouts.app')

@section('content')

<div class="page-hero bg-image overlay-dark" style="background-image: url(assets/img/bg-apus.png);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
        <span class="subhead">Ayoo berbagi informasi mengenai perawatan kucing</span>
        <h1 class="display-4">Dan tanyakan di forum jika anda butuh bantuan</h1>
        <a href="/forum" class="btn btn-primary">Go Forum</a>
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
                        <p><span>Forum</span>Diskusi</p>
                      </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                      <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                          <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>Jaga</span>Kesehatan Kucing</p>
                      </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                      <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-accent text-white">
                          <span class="mai-basket"></span>
                        </div>
                        <p><span>Berita</span>Seputar Kucing</p>
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
                    <p class="text-grey mb-4">Apus adalah website untuk berbagi informasi mengenai kucing dan juga terdapat blog untuk melihat informasi terkait kucing</p>
                    <a href="/about" class="btn btn-primary">Learn More</a>
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
    <h1 class="text-center wow fadeInUp">Blog</h1>
    <div class="row mt-5">
      @foreach($blog as $blogs)
      <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
        <div class="header">
            <a href="/blogdetail/{{$blogs->id}}" class="post-thumb">
              <img src="{{ asset($blogs->foto) }}" alt="">
            </a>
        </div>
          <div class="body">
            <h5 class="post-title"><a href="/blogdetail/{{$blogs->id}}">{{$blogs->title}}</a></h5>
            <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">
                  <img src="dashboard/dist/img/user1-128x128.jpg" alt="">
                </div>
                <span>Admin</span>
              </div>
              <span class="mai-time"></span>{{$blogs->created_at}}
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-12 text-center mt-4 wow zoomIn">
        <a href="/blog" class="btn btn-primary">Read More</a>
      </div>

    </div>
  </div>
</div> <!-- .page-section -->

@endsection