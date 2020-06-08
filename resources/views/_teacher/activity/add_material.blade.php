@extends('t_index')
@section('title')
    Add Material
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{url('/projects/detail/'.$project->code)}}">{{$project->code}} - {{$project->title}}</a></li>
                  <li class="breadcrumb-item active">Add New Material</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Material</h4>
                </div>
            </div>
        </div>
    </div>
    <form action="{{url('activity/add')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="token" value="{{$phase_id}}">
        <input type="hidden" name="type" value="material">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">     

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form md-outline">
                                    <input type="text" id="target" class="form-control" name="title" placeholder=" " required>
                                    <label for="materialLoginFormEmail" class="active">Title</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="md-form md-outline">
                                    <label for="desc">Description (Optional)</label>
                                    <textarea placeholder=" " name="desc" id="" cols="30" rows="3" class="form-control md-textarea"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form md-outline">
                                    <div class="file-field">
                                        <div class="btn btn-primary btn-sm float-left">
                                            <span>Choose file</span>
                                            <input type="file" name="attachment" accept="image/*,audio/*,video/*,.pdf,.zip,.ppt,.pptx,.doc,.docx">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path" readonly name="attachmentName" type="text" placeholder="Attachment (Optional)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button class="col btn btn-success waves-effect" type="submit"><i class="far fa-check mr-2" aria-hidden="true"></i> Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
