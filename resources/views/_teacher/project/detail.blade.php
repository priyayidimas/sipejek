@php
    $n = 1;$i = 1;
@endphp
@extends('t_index')
@section('title')
    Project View
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">{{$data->code}} - {{$data->title}}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Project Detail</h5><hr>
                    {{-- <a href="#addUserModal" class="btn btn-md btn-info" data-toggle="modal"><i class="fas fa-plus"></i> Add new project</a><br> --}}
                    <div class="row">
                        <div class="col"></div>
                    </div>
                    <h5 class="pb-3">{{$data->topic." : ".$data->title}}</h5>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <p>Status : {!! ($data->hasPreOk == 1) ? '<span class="badge badge-success">Started</span>' : '<span class="badge badge-danger">Not Started</span>' !!}</p>
                                    @if ($data->hasPreOk == 1)
                                    <p>Description :</p>
                                    <div>
                                        {!! $data->desc !!}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5>Groups</h5>
                    <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal" data-url="projectuser" data-token="{{encrypt($data->id)}}"><i class="fas fa-plus"></i> Generate Groups</a>
                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">No</th>
                                <th class="th-sm">Group Name</th>
                                <th class="th-sm">Email</th>
                                <th class="th-sm">Desc</th>
                                <th class="th-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->projectUser as $g)
                            @if ($g->user->type != 2)                                
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$g->user->fullname}}</td>
                                <td>{{$g->user->email}}</td>
                                <td style="white-space:pre">{!! $g->user->desc !!}</td>
                                <td>
                                    <a href="#editModal" class="text-warning" data-toggle="modal" data-url="users" data-token="{{encrypt($g->user_id)}}" data-project="{{encrypt($data->id)}}"><i class="fas fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#deleteModal" class="text-danger" data-toggle="modal" data-url="projectuser" data-token="{{encrypt($g->id)}}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5>Preliminary Phase</h5><hr>
                    <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal" data-url="prequestion" data-token="{{encrypt($data->id)}}"><i class="fas fa-plus"></i> Add new question</a>
                    <a href="#successModal" class="btn btn-md btn-success" data-toggle="modal" data-url="prequestion/closeforum" data-token="{{encrypt($data->id)}}"><i class="fas fa-archive"></i> Close Forum</a><br>
                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">No</th>
                                <th class="th-sm">Question</th>
                                <th class="th-sm">Desc</th>
                                <th class="th-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->prequestions as $p)
                            <tr>
                                <td>{{$n++}}</td>
                                <td><a href="#detailModal" class="text-info" data-toggle="modal" data-url="prequestion" data-token="{{encrypt($p->id)}}">{{$p->question}}</a></td>
                                <td style="white-space:pre">{{$p->desc}}</td>
                                <td>
                                    <a href="#editModal" class="text-warning" data-toggle="modal" data-url="prequestion" data-token="{{encrypt($p->id)}}"><i class="fas fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#deleteModal" class="text-danger" data-toggle="modal" data-url="prequestion" data-token="{{encrypt($p->id)}}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if ($data->hasPreOk == 1)        
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5>Project Activities</h5><hr>
                    <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal" data-url="phase" data-token="{{encrypt($data->id)}}"><i class="fas fa-plus"></i> Add new phase</a>
                    <a href="{{url('/lfm?leftDisk=project&leftPath='.$data->code)}}" target="_blank" class="btn btn-md btn-success"><i class="fas fa-file"></i> Visit Project Folder</a>
                    <br><br>
                    <div class="accordion md-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach ($data->phases as $ph)
                        @php
                            $n = 1;
                            $activity = $ph->activities;
                        @endphp
                        <div class="card">
                            <div class="card-header" role="tab" id="heading{{$ph->id}}">
                                <a data-toggle="collapse" href="#collapse{{$ph->id}}" aria-expanded="true" 
                                    aria-controls="collapse{{$ph->id}}">
                                    <h5 class="mb-0">{{$ph->title}} 
                                        <button class="btn btn-warning btn-sm" data-target="#editModal" data-toggle="modal" data-url="phase" data-token="{{encrypt($ph->id)}}" style="padding: 10px; margin: 5px"><i class="fas fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-sm" data-target="#deleteModal" data-toggle="modal" data-url="phase" data-token="{{encrypt($ph->id)}}" style="padding: 10px; margin: 5px"><i class="fas fa-trash"></i></button>
                                    <i class="fas fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapse{{$ph->id}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$ph->id}}" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-2">Start Date : </div>
                                        <div class="col-sm-6 col-md">{{Carbon::parse($ph->date_start)->format('M d, Y @ H:i')}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-2">Due Date : </div>
                                        <div class="col-sm-6 col-md">{{Carbon::parse($ph->date_due)->format('M d, Y @ H:i')}}</div>
                                    </div>
                                    {{-- <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal" data-url="activity" data-token="{{encrypt($ph->id)}}"><i class="fas fa-plus"></i> Add new activity</a> --}}
                                    <button class="btn btn-md btn-info dropdown-toggle mr-4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-plus"></i> Add new activity</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{url('activity/add/material/'.encrypt($ph->id))}}"><i class="far fa-book"></i> Material</a>
                                        <a class="dropdown-item" href="{{url('activity/add/assignment/'.encrypt($ph->id))}}"><i class="far fa-file-alt"></i> Assignment</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('activity/add/quiz/'.encrypt($ph->id))}}"><i class="far fa-question"></i> Quiz</a>
                                    </div>
                                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="th-sm">No</th>
                                                <th class="th-sm">Title</th>
                                                <th class="th-sm">Type</th>
                                                <th class="th-sm">Attachment</th>
                                                <th class="th-sm">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($activity as $act)
                                            <tr>
                                                <td>{{$n++}}</td>
                                                <td><a href="{{url('activity/detail/'.$act->slug)}}" class="text-info">{{$act->title}}</a></td>
                                                <td>{{$act->type}}</td>
                                                <td><a target="_blank" href="{{ url(''.$act->attachment) }}" class="text-info">{{($act->attachment != '') ? 'Here' : ''}}</a></td>
                                                <td>
                                                    <a href="#editModal" class="text-warning" data-toggle="modal" data-url="activity" data-token="{{encrypt($act->id)}}"><i class="fas fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                                                    <a href="#deleteModal" class="text-danger" data-toggle="modal" data-url="activity" data-token="{{encrypt($act->id)}}"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<div class="just-modals">
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-primary" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row addLoader">
                        <div class="col-md-12" style="text-align: center">
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-blue-only ">
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
                    <div class="addContent"></div>
                </div>

            </div>
        </div>
    </div>
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
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row forumLoader">
                        <div class="col-md-12" style="text-align: center">
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-green-only ">
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
                    <div class="forumContent"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row infoLoader">
                        <div class="col-md-12" style="text-align: center">
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-blue-only ">
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
                    <div class="infoContent"></div>
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
