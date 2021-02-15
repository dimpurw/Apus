@extends('layouts.app')

@section('content')
<div class="row mt-2">
    <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Buat Blog
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="/postblog" enctype="multipart/form-data">
                    @csrf
                    <div id="modal-edit" class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Judul Blog:</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <textarea id="summernote" name="description">
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