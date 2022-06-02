@extends('layouts.app')

@section('content')
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="row ml-4 mt-2">
                @if (Auth::check())
                <a href="/createforum"><button class="btn btn-primary mb-4">Buat Forum +</button></a>
                @else
                <a href="#" data-toggle="modal" data-target="#login" data-whatever="login"><button class="btn btn-primary mb-4">Buat Forum +</button></a>
                @endif
                <div class="col-12">
                    <h4>Forum</h4>
                    @foreach($forum as $forums)
                    <div class="post">
                        <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{$forums->user->getFoto()}}"  alt="not img">
                        <span class="username">
                            <a href="#">{{$forums->user->username}}</a>
                        </span>
                        <span class="description">Shared publicly - {{$forums->created_at->format('m/d/Y')}}</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                        {{$forums->title}}
                        </p>
                        <p>
                        @if (Auth::check())
                        <a href="/forumdetail/{{$forums->id}}" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Lihat selengkapnya...</a>
                        @else
                        <a href="#" class="link-black text-sm" data-toggle="modal" data-target="#login" data-whatever="login"><i class="fas fa-link mr-1"></i>Lihat selengkapnya...</a>
                        @endif
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection