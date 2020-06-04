@php
    $alphabet = range('A','Z');
    $n = 0;
    $i = 1;
@endphp
@extends('t_index')
@section('title')
    File Input
@endsection
@section('content')
<div class="container">    
    <div class="row">
       <div class="card">
           <div class="card-body">
               <h4 class="card-title">{{Auth::user()->nama}}</h4>
               <form action="{{url('/file')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="md-form">
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Choose file</span>
                            <input type="file" name="avatar">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" readonly name="avatarLoc" type="text" placeholder="Upload your file">
                        </div>
                    </div>
                </div>
                <fieldset class="form-check">
                    <input class="form-check-input" name="group1" type="radio" id="radio1" checked="checked">
                    <label class="form-check-label" for="radio1">Option 1</label>
                </fieldset>
                <fieldset class="form-check">
                    <input class="form-check-input" name="group1" type="radio" id="radio2">
                    <label class="form-check-label" for="radio2">Option 2</label>
                </fieldset>
                <fieldset class="form-check">
                    <input class="form-check-input" name="group1" type="radio" id="radio3">
                    <label class="form-check-label" for="radio3">Option 3</label>
                </fieldset>
                <fieldset class="form-check">
                    <input type="hidden" name="check" value="0">
                    <input class="form-check-input filled-in" name="check" type="checkbox" id="checkbox1" checked="checked" value="1">
                    <label class="form-check-label" for="checkbox1">Checkbox</label>
                </fieldset>
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
    
                                        <p>Question #01</p>
                                        <div class="md-form">
                                            <input type="text" id="target" class="form-control" name="essay[0]" placeholder=" " required>
                                            <label for="question" class="active">Type Question</label>
                                        </div>
                                        <p>Question #02</p>
                                        <div class="md-form">
                                            <input type="text" id="target" class="form-control" name="essay[1]" placeholder=" " required>
                                            <label for="question" class="active">Type Question</label>
                                        </div>
                                        <p>Question #03</p>
                                        <div class="md-form">
                                            <input type="text" id="target" class="form-control" name="essay[3]" placeholder=" " required>
                                            <label for="question" class="active">Type Question</label>
                                        </div>
                                        <p>Question #04</p>
                                        <fieldset class="form-check">
                                            <input class="form-check-input" name="group1" type="radio" id="radio1" checked="checked">
                                            <label class="form-check-label" for="radio1">Option 1</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-default" type="submit">Submit</button>
            </form>
           </div>
       </div>
    </div>

    <div class="row">

            <div class="dropdown">

                <!--Trigger-->
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Material dropdown</button>
            
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

    </div>
    <div class="row">
        <!-- Basic dropdown -->
<button class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
aria-haspopup="true" aria-expanded="false">Basic dropdown</button>

        <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
        </div>
<!-- Basic dropdown -->
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
            <svg class="rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img">
                <rect fill="#007aff" width="100%" height="100%" />
            </svg>
            <strong class="mr-auto">Bootstrap</strong>
            <small class="text-muted">just now</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            See? Just like this.
        </div>
    </div>
      
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
            <svg class="rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img">
                <rect fill="#007aff" width="100%" height="100%" />
            </svg>
            <strong class="mr-auto">Bootstrap</strong>
            <small class="text-muted">2 seconds ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Heads up, toasts will stack automatically
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{Auth::user()->fullname}}</h4>
                <div class="input-group">
                    <input type="text" id="image_label" class="form-control" name="image"
                           aria-label="Image" aria-describedby="button-image">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-only">
    <div class="modal fade" id="ketModal" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><h5>Keterangan</h5></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('button-image').addEventListener('click', (event) => {
                var uri = encodeURI('/file-manager/fm-button?leftDisk=project&leftPath=BIO100/Assignment/Assignment#01');
                event.preventDefault();
                window.open(uri, 'fm', 'width=1400,height=800');
            });
        });
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
        
        $(document).ready(function () {
            $("#ketModal").on("show.bs.modal",function (e) {
                var btn = $(e.relatedTarget);
                var data = btn.data('keterangan');
                var modal = $(this);
                modal.find('.modal-body').html(data);
            });
            $(".toast").toast('show');
        });
    </script>
@endsection