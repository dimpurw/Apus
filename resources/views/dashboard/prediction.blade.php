@extends('layouts-dashboard.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- general form elements disabled -->
    <div class="card card-secondary">
        <div class="card-header">
        <h3 class="card-title">Custom Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form>
            <div class="row ml-4">
            <div class="col-sm-6">
                <!-- checkbox -->
                <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                    <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option1">
                    <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option1">
                    <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option1">
                    <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                </div>
                </div>
            </div>
        </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection