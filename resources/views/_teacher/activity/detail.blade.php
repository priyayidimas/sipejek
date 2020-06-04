@php
    $code = $data->phase->project->code;
    $path = $code."/".$data->type."/".$data->slug;
@endphp
@extends('t_index')
@section('title')
    {{($data->type == 'material') ? "Material" : "Assignment"}}
@endsection
@section('head')
<style>
    @media(min-width: 992px){
        .cm {
            margin-top: 31px;
        }
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        {{$data->title}}
                        <button class="ml-auto float-right btn btn-danger btn-sm" data-target="#deleteModal" data-toggle="modal" data-url="activity" data-token="{{encrypt($data->id)}}" style="padding: 10px; margin: 5px"><i class="fas fa-trash"></i></button>
                        <button class="ml-auto float-right btn btn-warning btn-sm" data-target="#editModal" data-toggle="modal" data-url="activity" data-token="{{encrypt($data->id)}}" style="padding: 10px; margin: 5px"><i class="fas fa-pencil"></i></button>
                        @if ($data->type == 'assignment')
                        <a href="{{url('/lfm?leftDisk=project&leftPath='.$path)}}" target="_blank" class="ml-auto float-right btn btn-success btn-sm" style="padding: 10px; margin: 5px"><i class="fas fa-file"></i></a>
                        @endif
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">     

                    <div class="row">
                        <div class="col-md-12">
                            <h6>Description: </h6>
                            {!!$data->desc!!}
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
                            @if ($data->type == 'assignment')
                            <div class="ml-auto">
                                <h6>Max Score: {{$data->maxgrade}}</h6>
                            </div>
                            @endif
                            <br>
                            @if ($data->attachment != '')
                                <a target="_blank" class="col btn btn-success waves-effect" href="{{url(''.$data->attachment)}}"><i class="fas fa-paperclip mr-2" aria-hidden="true"></i> View Attachment</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p><b>Class Comments</b></p>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            @foreach ($data->commentUser as $cu)
                            <div class="media mb-2" style="font-size:13px">
                                <img class="d-flex align-self-start mr-3 img-fluid rounded-circle" src="{{$cu->user->image}}" alt="Placeholder image" style="width: 50px; height:50px">
                                <div class="media-body">
                                  <h5 class="mt-0 font-weight-bold" style="font-size:15px">{{$cu->user->fullname}}</h5>
                                  <p>
                                      {{$cu->message}}
                                  </p>
                                </div>
                                <div class="ml-auto">
                                    @if ($auth->id == $cu->user->id)
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#editModal" data-toggle="modal" data-url="comment" data-token="{{encrypt($cu->id)}}">Edit</a>
                                        <a class="dropdown-item" href="#deleteModal" data-toggle="modal" data-url="comment" data-token="{{encrypt($cu->id)}}">Delete</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('/comment/add')}}" method="post">
                        @csrf
                        <input type="hidden" name="activity_id" value="{{($data->id)}}">
                        <input type="hidden" name="user_id" value="{{($auth->id)}}">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="md-form">
                                    <input placeholder="" type="text" name="message" class="form-control" size="40">
                                    <label for="date-picker-example">Add New Comment</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button class="float-right btn btn-success btn-sm cm" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="just-modals">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row editLoader">
                        <div class="col-md-12" style="text-align: center">
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-yellow-only ">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="editContent"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-danger" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row deleteLoader">
                        <div class="col-md-12" style="text-align: center">
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-red-only ">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deleteContent"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{url('assets/js/detail.js')}}"></script>
@endsection