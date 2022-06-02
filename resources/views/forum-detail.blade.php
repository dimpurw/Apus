@extends('layouts.app')

@section('content')
<div class="row mt-2">
    <div class="col-12">
        <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-12">
        <!-- Box Comment -->
        <div class="card card-widget">
            <div class="card-header">
            <div class="user-block">
                <img class="img-circle" src="{{$forum->user->getFoto()}}" alt="Tidak ada foto">
                <span class="username"><a href="#">{{$forum->user->username}}</a></span>
                <span class="description">Shared publicly - {{$forum->created_at->format('m/d/Y')}}</span>
            </div>
            <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- post text -->
            <p>{!!$forum->description!!}</p>
            <!-- Social sharing buttons -->
            <!-- <h5 class="card-header">Comments 
            <span class="comment-count btn btn-sm btn-outline-info"></span>
            <small class="float-right">
                <span title="Likes" id="saveLikeDislike" data-type="like" data-post="" class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold">
                    Like
                    <span class="like-count">5</span>
                </span>
                <span title="Dislikes" id="saveLikeDislike" data-type="dislike" data-type="dislike" data-post="" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                    Dislike
                    <span class="dislike-count">2</span>
                </span>
            </small>
            </h5> -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer card-comments">
            @foreach($forum->comment as $comments)
            <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{$comments->user->getFoto()}}" alt="Tidak ada foto">
                <div class="comment-text">
                <span class="username">
                    {{$comments->user->username}}
                    <span class="text-muted float-right">{{$comments->created_at}}</span>
                </span><!-- /.username -->
               {{$comments->comment}}
                </div>
                <!-- /.comment-text -->
            </div>
            @endforeach
            <!-- /.card-comment -->
            </div>
            <!-- /.card-footer -->
            <div class="card-footer">
            <form action="/postcomment" method="post">
                @csrf
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                <input type="text" name="forum_id" value="{{$forum->id}}" hidden>
                <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>
                <input type="text" name="comment" class="form-control form-control-sm" placeholder="komentar anda">
                <button type="submit" class="btn btn-primary mt-2">kirim</button>
                <a href="/forum"><button type="button" class="btn btn-secondary mt-2">kembali</button></a>
                </div>
            </form>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection