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
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Username:</label>
            <input type="text" class="form-control" id="username">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="password"></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg-apus.png);">
  <div class="banner-section">
    <div class="container text-center wow fadeInUp">
      <nav aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
      <h1 class="font-weight-normal">About Us</h1>
    </div> <!-- .container -->
  </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4 py-3 wow zoomIn">
        <div class="card-service">
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
</div>

<div class="page-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 wow fadeInUp">
        <h1 class="text-center mb-3">Welcome to Your Health Center</h1>
        <div class="text-lg">
          <p>Apus adalah website yang membantu kita dalam mencari informasi mengenai kucing, website ini sangat berguna bagi anda yang memelihara kucing untuk mengetahui informasi tentang kucng</p>
          <p>Dan juga di website ini tersedia forum untuk diskusi sesama user untuk berbagi informasi supaya pengetahuan kita tentang merawat kucing lebih banyak lagi</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection