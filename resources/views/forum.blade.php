@extends('layouts.app')

@section('content')
<div class="row ml-4 mt-2">
    <a href="/createforum"><button class="btn btn-primary mb-4">Buat Forum +</button></a>
    <div class="col-12">
        <h4>Forum</h4>
        @foreach($forum as $forums)
        <div class="post">
            <div class="user-block">
            <img class="img-circle img-bordered-sm" src="dashboard/dist/img/user1-128x128.jpg" alt="user image">
            <span class="username">
                <a href="#">{{$forums->user->username}}</a>
            </span>
            <span class="description">Shared publicly - {{$forums->created_at}}</span>
            </div>
            <!-- /.user-block -->
            <p>
            {{$forums->title}}
            </p>
            <p>
            <a href="/forumdetail/{{$forums->id}}" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Lihat selengkapnya...</a>
            </p>
        </div>
        @endforeach
    </div>
</div>
@endsection