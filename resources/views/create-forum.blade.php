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
                <form method="POST" action="/createforum/{{auth()->user()->id}}" enctype="multipart/form-data">
                    @csrf
                    <div id="modal-edit" class="modal-body">
                        <input type="text" name="user_id" class="form-control" id="user_id" value="{{auth()->user()->id}}" hidden>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Judul:</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <textarea id="summernote" name="description">
                        buatlah<em>pertanyaan</em> <u>mengenai</u> <strong>kucing</strong>
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