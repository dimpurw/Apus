@extends('layouts.app')

@section('content')
<div class="row mt-2">
    <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Buat Forum
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="/editprofile/{{auth()->user()->id}}" enctype="multipart/form-data">
                    @csrf
                    <div id="modal-edit" class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username:</label>
                            <input type="text" name="username" class="form-control" id="username" value="{{auth()->user()->username}}" readonly>
                        </div>
                        <textarea id="summernote">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                    </div>
                    <div class="modal-footer">
                        <a href="/forum"><button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button></a>
                        <button type="submit" class="btn btn-primary">Buat Forum</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
</div>
@endsection