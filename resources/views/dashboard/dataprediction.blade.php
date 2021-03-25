@extends('layouts-dashboard.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rekap Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Rekap Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/dataprediction/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                <table id="example2" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                  <tr>
                    <th>Nama Kucing</th>
                    <th>Jenis Penyakit</th>
                    <th>Presentase</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($rekap as $rekaps)
                    <tr>
                        <td>{{$rekaps->nama_kucing}}</td>
                        <td>{{$rekaps->jenis_penyakit}}</td>
                        <td>{{$rekaps->presentase}}</td>
                        <td><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
    </section>
</div>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection