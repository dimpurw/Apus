@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row md-3">
            <div class="col-12">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profile Saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-user mr-1"></i> Username</strong>

                <p class="text-muted">
                  {{auth()->user()->username}}
                </p>

                <hr>

                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                <p class="text-muted">{{auth()->user()->email}}</p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                <p class="text-muted">
                  {{auth()->user()->alamat}}
                </p>

                <hr>

                <strong><i class="fas fa-phone mr-1"></i> No HP</strong>

                <p class="text-muted">{{auth()->user()->nohp}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <button id="profile" class="btn btn-primary mb-4" data-toggle="modal" data-target="#profile{{ auth()->user()->id }}" >Edit Profile</button>
            <!-- Edit profile modal -->
            <div class="modal fade" id="profile{{ auth()->user()->id }}" tabindex="-1" role="dialog" aria-labelledby="profile" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="/editprofile/{{auth()->user()->id}}" enctype="multipart/form-data">
                            @csrf
                            <div id="modal-edit" class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                    <input type="text" name="username" class="form-control" id="username" value="{{auth()->user()->username}}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{auth()->user()->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Alamat:</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{auth()->user()->alamat}}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">No Hp:</label>
                                    <input type="number" name="nohp" class="form-control" id="nohp" value="{{auth()->user()->nohp}}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>          
        </div>
    </div>
</section>

@endsection
