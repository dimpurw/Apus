@extends('layouts.app')

@section('content')
<div class="row ml-4 mt-2">
    <a href="/createforum"><button class="btn btn-primary mb-4">Buat Forum +</button></a>
    <div class="col-12">
        <h4>Forum</h4>
        <div class="post">
            <div class="user-block">
            <img class="img-circle img-bordered-sm" src="dashboard/dist/img/user1-128x128.jpg" alt="user image">
            <span class="username">
                <a href="#">Jonathan Burke Jr.</a>
            </span>
            <span class="description">Shared publicly - 7:45 PM today</span>
            </div>
            <!-- /.user-block -->
            <p>
            Lorem ipsum represents a long-held tradition for designers,
            typographers and the like. Some people hate it and argue for
            its demise, but others ignore.
            </p>

            <p>
            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Lihat selengkapnya...</a>
            </p>
        </div>

        <div class="post clearfix">
            <div class="user-block">
            <img class="img-circle img-bordered-sm" src="dashboard/dist/img/user7-128x128.jpg" alt="User Image">
            <span class="username">
                <a href="#">Sarah Ross</a>
            </span>
            <span class="description">Sent you a message - 3 days ago</span>
            </div>
            <!-- /.user-block -->
            <p>
            Lorem ipsum represents a long-held tradition for designers,
            typographers and the like. Some people hate it and argue for
            its demise, but others ignore.
            </p>
            <p>
            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Lihat selengkapnya...</a>
            </p>
        </div>

        <div class="post">
            <div class="user-block">
            <img class="img-circle img-bordered-sm" src="dashboard/dist/img/user1-128x128.jpg" alt="user image">
            <span class="username">
                <a href="#">Jonathan Burke Jr.</a>
            </span>
            <span class="description">Shared publicly - 5 days ago</span>
            </div>
            <!-- /.user-block -->
            <p>
            Lorem ipsum represents a long-held tradition for designers,
            typographers and the like. Some people hate it and argue for
            its demise, but others ignore.
            </p>

            <p>
            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i>Lihat selengkapnya...</a>
            </p>
        </div>
    </div>
    </div>
@endsection