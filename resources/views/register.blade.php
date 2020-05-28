<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DPM SAEP &middot; Register</title>
    <link rel="shortcut icon" href="{{{ asset('/assets/img/icon.png') }}}">
    <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col">
                <form action="{{url('register')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="form-header default-color">
                                <h3><i class="fas fa-user"></i> Register:</h3>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-id-badge prefix grey-text"></i>
                                <input type="text" id="defaultForm-email" class="form-control" name="nama" value="{{old('nama')}}">
                                <label for="defaultForm-email">Full name</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="text" id="defaultForm-email" class="form-control" name="email" value="{{old('email')}}">
                                <label for="defaultForm-email">Email</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control" name="password">
                                <label for="defaultForm-pass">Password</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control" name="cpassword">
                                <label for="defaultForm-pass">Confirm password</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default" type="submit">Register</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="options">
                                <p>Sudah ada akun?
                                    <a href="{{url('/')}}">Sini Login Lah</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
<script src="{{url('/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/fontawesome/js/all.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/mdb.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        new WOW().init();
        @if(session('msg'))
            toastr["{{session('color')}}"]("{{session('msg')}}");
        @endif
    });
</script>
</html>
