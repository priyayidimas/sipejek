@extends('t_index')
@section('title')
    My Profile
@endsection

@section('content')
<div class="container">    
    <div class="row">
        <div class="col">
            <div class="card mb-2">
                <div class="card-body">
                    <h5>My Profile</h5><hr>
                </div>
            </div>
            <form action="{{url('updateProfile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="token" value="{{encrypt($data->id)}}">
                <div class="row mb-2">
                    <div class="col-lg-4 mx-auto">
                        <div class="card-wrapper">
                            <div id="card-2" class="card card-rotating text-center">
                                <div class="face front">
                                    <div class="card-up">
                                        <img src="{{url('assets/img/sample.jpg')}}" class="img-fluid">
                                    </div>
                                    <div class="avatar mx-auto white">
                                        <img src="{{url('upload/profile/'.$data->image)}}" class="rounded-circle" alt="Sample avatar image.">
                                    </div>
                                    <div class="card-body">
                                        <h4>{{$data->fullname}}</h4>
                                        <p>{{$data->email}}</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn" data-card="card-2">
                                            <i class="fas fa-redo-alt"></i> Click here to rotate</a>
                                    </div>
                                </div>
                                <div class="card face back">
                                    <div class="card-body">
                                        <h4>Edit Profile</h4>
                                        <div class="row">
                                            <div class="col">
                                                <div class="md-form">
                                                    <div class="file-field">
                                                        <div class="btn btn-primary btn-sm float-left">
                                                            <span>Choose file</span>
                                                            <input type="file" name="image">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload your Photo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="md-form">
                                                        <input type="text" class="form-control" name="email" value="{{$data->email}}">
                                                        <label class="">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="md-form">
                                                        <input type="text" class="form-control" name="fullname" value="{{$data->fullname}}">
                                                        <label class="">Fullname</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="md-form">
                                                        <input type="password" class="form-control" name="nPassword">
                                                        <label class="">New Password</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>

                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success btn-md">Submit</button>
                                        <a class="btn btn-flat black-text rotate-btn" data-card="card-2"><i class="fas fa-undo"></i> Back</a>
      
                                    </div>
      
                                </div>
                                <!--/.Back Side-->
      
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection