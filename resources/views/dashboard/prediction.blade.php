@extends('layouts-dashboard.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gejala</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Gejala</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- general form elements disabled -->
            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Gejala Pada Kucing Anda</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form>
                    <div class="row ml-4">
                    <div class="col-sm-6">
                        <!-- checkbox -->
                        <div class="form-group">
                            <div class="custom-control custom-checkbox mt-2">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                <label for="customCheckbox1" class="custom-control-label">Adanya ruam atau lesi yang berbentuk melingkar di bagian kepala dan badan</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option1">
                                <label for="customCheckbox2" class="custom-control-label">Penebalan pada area lesi dengan warna kemerahan di tengahnya</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option1">
                                <label for="customCheckbox3" class="custom-control-label">Kucing mengalami gatal-gatal </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option1">
                                <label for="customCheckbox4" class="custom-control-label">Nafsu makan menurun</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="option1">
                                <label for="customCheckbox5" class="custom-control-label">Bau tidak sedap di pernafasan kucing</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="option1">
                                <label for="customCheckbox6" class="custom-control-label">Kulit kucing menimbulkan kerak, bersisik dan menutupi area kuping dan kepala</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="option1">
                                <label for="customCheckbox7" class="custom-control-label">Fases kucing cair dan berdarah</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="option1">
                                <label for="customCheckbox8" class="custom-control-label">Bersin terus menerus dan terdapat kotoran pada hidung</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="option1">
                                <label for="customCheckbox9" class="custom-control-label">Diare/gangguan pencernaan </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="option1">
                                <label for="customCheckbox10" class="custom-control-label">Menjilat bagian kaki dan ekor terus menerus </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="option1">
                                <label for="customCheckbox11" class="custom-control-label">Sering menggaruk dagu dan menyebabkan luka/trauma pada area dagu </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
                                <label for="customCheckbox12" class="custom-control-label">Banyak komedo, bintik hitam pada bagian dagu dan mulut kucing </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox13" value="option1">
                                <label for="customCheckbox13" class="custom-control-label">Dagu kucing terlihat kotor </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox14" value="option1">
                                <label for="customCheckbox14" class="custom-control-label">Bau menyangat dari kulit </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox15" value="option1">
                                <label for="customCheckbox15" class="custom-control-label">Mengeluarkan cairan berupa nanah berwarna kuning dan bau </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox16" value="option1">
                                <label for="customCheckbox16" class="custom-control-label">Lembab di bagian ekor</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox17" value="option1">
                                <label for="customCheckbox17" class="custom-control-label">Menggigiti ekor, lengan, paha, dan bokong terus menerus</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox18" value="option1">
                                <label for="customCheckbox18" class="custom-control-label">Kulit kucing terlihat kering dan kasar</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox19" value="option1">
                                <label for="customCheckbox19" class="custom-control-label">Berat badan mengalami penurunan </label>
                            </div>
                            <div class="custom-control custom-checkbox mb-4">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox20" value="option1">
                                <label for="customCheckbox20" class="custom-control-label">Bulu rontok berlebihan</label>
                            </div>
                            <label for="exampleInputEmail1 mt-4">Nama Kucing</label>
                            <input type="name" class="form-control mb-4" id="exampleInputEmail1" placeholder="nama kucing anda">
                            <button type="submit" class="btn btn-block bg-gradient-success btn-lg">Chek</button>
                        </div>
                    </div>
                </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection