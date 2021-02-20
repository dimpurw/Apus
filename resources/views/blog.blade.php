@extends('layouts.app')

@section('content')

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg-apus.png);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Blog</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($blog as $blogs)
                    <div class="col-sm-6 py-3">
                        <div class="card-blog">
                        <div class="header">
                            <a href="/blogdetail/{{$blogs->id}}" class="post-thumb">
                            <img src="{{ asset('blog/' . $blogs->foto) }}" alt="">
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
                                    <span class="mai-time"></span> {{$blogs->created_at}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> <!-- .row -->
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Recent Blog</h3>
                        @foreach($recent as $recents)
                        <div class="blog-item">
                            <div class="content">
                                <h5 class="post-title"><a href="/blogdetail/{{$blogs->id}}">{{$recents->title}}</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span>{{$recents->created_at}}</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Paragraph</h3>
                        <p>Informasi mengenai kucing, ayoo jaga kucing anda</p>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .page-section -->

@endsection