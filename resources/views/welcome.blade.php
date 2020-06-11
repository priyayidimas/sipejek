<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPEJEK &middot; Login</title>
    <link rel="shortcut icon" href="{{{ asset('/assets/img/monitor.svg') }}}">
    <link rel="icon" href="{{{ asset('/assets/img/monitor.svg') }}}">
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
                <div class="text-center mb-5">
                    <a href="{{url('')}}">
                        <img src="{{url('/assets/img/monitor.svg')}}" width="150" height="150" class="mb-2 img-fluid rounded-circle z-depth-1-half" alt="">
                    </a>
                    <h4 class="display">Sistem Pengelola Projek</h4>
                </div>
                <form action="{{url('login')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="form-header theme">
                                <h3><i class="fas fa-lock"></i> Login: </h3>
                            </div>
                            <div class="md-form md-outline">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="text" id="defaultForm-email" class="form-control" name="email" value="admin@sipejek.com">
                                <label for="defaultForm-email">email</label>
                            </div>
                            <div class="md-form md-outline">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control" name="password" value="password">
                                <label for="defaultForm-pass">password</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default">Login</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="options">
                                <p>New to Sipejek?
                                    <a href="{{url('/register')}}">Register</a>
                                </p>
                                {{-- <p>Forgot
                                    <a href="#">Password?</a>
                                </p> --}}
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
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr["danger"]("{{ $error }}");
            @endforeach
        @endif
    });
</script>
</html>
