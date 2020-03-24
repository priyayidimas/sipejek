@extends('t_index')
@section('title')
    My Profile
@endsection

@section('content')
<div class="container">    
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5>My Profile</h5><hr>
                    <form action="" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{encrypt($data->id)}}">
                        <div class="row">
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" class="form-control" value="{{$data->email}}">
                                    <label class="">Email</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" class="form-control" value="{{$data->fullname}}">
                                    <label class="">Fullname</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection