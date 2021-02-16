@extends('layouts.app')

@section('content')

<div class="page-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb bg-transparent py-0 mb-5">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- .row -->

        <div class="row">
            <div class="col-lg-8">
                <article class="blog-details">
                    <div class="post-thumb">
                        <img src="../assets/img/blog/blog_1.jpg" alt="">
                    </div>
                    <div class="post-meta">
                        <div class="post-author">
                            <span class="text-grey">By</span> <a href="#">Admin</a>
                        </div>
                        <span class="divider">|</span>
                        <div class="post-date">
                            <a href="#">{{$blog->created_at}}</a>
                        </div>
                    </div>
                    <h2 class="post-title h1">{{$blog->title}}</h2>
                    <div class="post-content">
                        <p>{!!$blog->description!!}</p>
                    </div>
                </article> <!-- .blog-details -->
            </div>
            <div class="col-lg-4">
                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Recent Blog</h3>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="../assets/img/blog/blog_1.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="../assets/img/blog/blog_2.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="../assets/img/blog/blog_3.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .page-section -->

@endsection