<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Apus</title>

    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
      <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
      <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/codemirror/theme/monokai.css') }}">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/simplemde/simplemde.min.css') }}">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('layouts.navbar')

    <!-- Login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="postlogin">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Password:</label>
                            <input type="password" name="password" class="form-control" id="password"></input>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data" id="form-register">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="col-form-label">Username:</label>
                                    <input type="text" name="username" class="form-control" value="{{ old('username') }}"  autocomplete="username" autofocus id="username">
                                    <span class="invalid-feedback" role="alert" id="usernameError">
                                        <strong></strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"  autocomplete="email" autofocus id="email">
                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong></strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" value="{{ old('password') }}"  autocomplete="password" autofocus id="password">
                                    <span class="invalid-feedback" role="alert" id="passwordError">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat" class="col-form-label">Alamat:</label>
                                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}"  autocomplete="alamat" autofocus id="alamat">
                                    <span class="invalid-feedback" role="alert" id="alamatError">
                                        <strong></strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="nohp" class="col-form-label">No Hp:</label>
                                    <input type="number" name="nohp" class="form-control" value="{{ old('nohp') }}"  autocomplete="nohp" autofocus id="nohp">
                                    <span class="invalid-feedback" role="alert" id="nohpError">
                                        <strong></strong>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-form-label" value="{{ old('foto') }}"  autocomplete="foto" autofocus>Foto:</label>
                                    <input id="foto" type="file" name="foto">
                                    <span class="invalid-feedback" role="alert" id="fotoError">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Login -->
    <div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="image" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="postimage">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Foto:</label>
                            <input id="foto" type="file" name="foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- CodeMirror -->
    <script src="{{ asset('dashboard/plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
            });
        })
    </script>
    @if($errors->has('email') || $errors->has('password'))
    <script>
        $(function() {
            $('#login').modal({
                show: true
            });
        });
    </script>
    @endif
    <script>
        $(function () {
            $('#form-register').submit(function (e) {
                e.preventDefault();
                let formData = $(this).serializeArray();
                $(".invalid-feedback").children("strong").text("");
                $("#form-register input").removeClass("is-invalid");
                $.ajax({
                    method: "POST",
                    headers: {
                        Accept: "application/json"
                    },
                    url: "/postregister",
                    data: formData,
                    success: () => window.location.assign("/home"),
                    error: (response) => {
                        if(response.status === 422) {
                            let errors = response.responseJSON.errors;
                            Object.keys(errors).forEach(function (key) {
                                $("#" + key + "Input").addClass("is-invalid");
                                $("#" + key + "Error").children("strong").text(errors[key][0]);
                            });
                        } else {
                            window.location.reload();
                        }
                    }
                })
            });
        })
    </script>
</body>

</html>