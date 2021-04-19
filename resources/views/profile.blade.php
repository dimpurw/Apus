@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row md-3">
            <div class="col-12">
            <!-- About Me Box -->
            <div class="d-flex justify-content-center align-items-center p-5" style="height: 200px;">
                <img src="{{auth()->user()->getFoto()}}" alt="Tidak ada foto" class="img-circle img-responsive center-block" style="width:10%">
            </div>
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
                                    <label for="username" class="col-form-label">Username:</label>
                                    <input type="text" name="username" class="form-control" value="{{ old('username') }}"  autocomplete="username" autofocus id="usernameInput">
                                    <span class="invalid-feedback" role="alert" id="usernameError">
                                        <strong></strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"  autocomplete="email" autofocus id="emailInput">
                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong></strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="col-form-label">Alamat:</label>
                                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}"  autocomplete="alamat" autofocus id="alamatInput">
                                    <span class="invalid-feedback" role="alert" id="alamatError">
                                        <strong></strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="nohp" class="col-form-label">No Hp:</label>
                                    <input type="number" name="nohp" class="form-control" value="{{ old('nohp') }}"  autocomplete="nohp" autofocus id="nohpInput">
                                    <span class="invalid-feedback" role="alert" id="nohpError">
                                        <strong></strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-form-label">Foto:</label>
                                    <input id="fotoInput" type="file" name="foto">
                                    <span class="invalid-feedback" role="alert" id="fotoError">
                                        <strong></strong>
                                    </span>
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
