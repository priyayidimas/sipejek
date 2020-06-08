@php
    $project = $data->phase->project;
    $code = $project->code;
    $path = $code."/".$data->type."/".$data->slug;
@endphp
@extends('t_index')
@section('title')
    {{($data->type == 'material') ? "Material" : "Assignment"}}
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{url('/projects/detail/'.$code)}}">{{$code}} - {{$project->title}}</a></li>
                  <li class="breadcrumb-item active">{{$data->title}}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <span class="text-capitalize">{{$data->type}}</span> <i class="fas fa-angle-right"></i> {{$data->title}}
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">     
        
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-muted">Description: </h6>
                                    {!!$data->desc!!}
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
            @if ($data->type == 'assignment')
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">     
        
                            <div class="row">
                                <div class="col-md-12">
                                    <p><b>Your Submission</b></p>
                                    <hr>
                                    <form action="{{url('submission/add')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="token" value="{{encrypt($data->id)}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form md-outline">
                                                    <div class="file-field">
                                                        <div class="btn btn-primary btn-sm float-left">
                                                            <span>Choose file</span>
                                                            <input type="file" name="attachment" accept="image/*,audio/*,video/*,.pdf,.zip,.ppt,.pptx,.doc,.docx">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path" readonly name="attachmentName" type="text" placeholder="Attachment">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="md-form md-outline">
                                                    <p>Description</label>
                                                    <textarea name="desc" id="" cols="30" rows="7" class="form-control md-textarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit"><i class="far fa-paper-plane"></i> Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
            @endif


        </div>
        <div class="col-md-4">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($data->type == 'assignment')
                                    <div class="ml-auto">
                                        <h6>Max Score: {{$data->maxscore}}</h6>
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
                <div class="col-md-12">
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('/comment/add/submission')}}" method="post">
                                @csrf
                                <input type="hidden" name="activity_id" value="{{($data->id)}}">
                                <input type="hidden" name="user_id" value="{{($auth->id)}}">
                                <div class="md-form md-outline">
                                    <input type="text" name="message" class="form-control" size="40">
                                    <label for="example">Add New Comment</label>
                                </div>
                                <button class="float-right btn btn-success btn-sm" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
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