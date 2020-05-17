@php
    $n = 1;$i = 1;
    <!-- $prequestion = App\model\Prequestion::where('project_id','=',$data->id)->get(); -->
    <!-- $group = DB::table('project_x_user')->join('users','project_x_user.user_id','=','users.id')
                                        ->where('project_id','=',$data->id)->where('users.type','=',1)
                                        ->select('users.fullname','users.email','users.desc','project_x_user.id','project_x_user.user_id')->get(); -->
    <!-- $phase = App\model\Phase::where('project_id','=',$data->id)->get(); -->
@endphp
@extends('t_index')
@section('title')
    Project View
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
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
                                <div class="col-sm-12 col-md">Current Phase Progress : (TBD)</div>
                                <div class="col-sm-12 col-md-6 ">
                                    <div class="my-2 progress md-progress" style="height:20px">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%; height:20px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md">Overall Progress : (TBD)</div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="my-2 progress md-progress" style="height:20px">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%; height:20px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </div>
                                <div class="col"></div>
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
                    <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal" data-url="prequestion" data-token="{{encrypt($data->id)}}"><i class="fas fa-plus"></i> Generate Groups</a>
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
                            @foreach ($group as $g)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$g->fullname}}</td>
                                <td>{{$g->email}}</td>
                                <td style="white-space:pre">{{$g->desc}}</td>
                                <td>
                                    <a href="#editModal" class="text-warning" data-toggle="modal" data-url="users" data-token="{{encrypt($g->user_id)}}"><i class="fas fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#deleteModal" class="text-danger" data-toggle="modal" data-url="projectuser" data-token="{{encrypt($g->id)}}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
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
                            @foreach ($prequestion as $p)
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
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5>Project Phase</h5><hr>
                    <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal" data-url="phase" data-token="{{encrypt($data->id)}}"><i class="fas fa-plus"></i> Add new phase</a>

                    <br><br>
                    <div class="accordion md-accordion" id="accordion" role="tablist">
                        @foreach ($phase as $ph)
                        @php
                            $n = 1;
                            $activity = App\model\Activity::where('phase_id','=',$ph->id)->get();
                        @endphp
                        <div class="card">
                            <div class="card-header" role="tab" id="heading{{$ph->id}}">
                                <h5 class="mb-0"><a data-toggle="collapse" href="#collapse{{$ph->id}}" aria-expanded="true" aria-controls="collapse{{$ph->id}}">{{$ph->title}}<i class="fas fa-angle-down rotate-icon"></i></a></h5>
                            </div>
                            <div id="collapse{{$ph->id}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$ph->id}}" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-2">Start Date : </div>
                                        <div class="col-sm-6 col-md">{{$ph->date_start}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-2">Due Date : </div>
                                        <div class="col-sm-6 col-md">{{$ph->date_due}}</div>
                                    </div>
                                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="th-sm">No</th>
                                                <th class="th-sm">Title</th>
                                                <th class="th-sm">Type</th>
                                                <th class="th-sm">Attachment</th>
                                                <th class="th-sm">Timer</th>
                                                <th class="th-sm">Desc</th>
                                                <th class="th-sm">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($activity as $act)
                                            <tr>
                                                <td>{{$n++}}</td>
                                                <td>{{$act->title}}</td>
                                                <td>{{$act->type}}</td>
                                                <td><a target="_blank" href="{{url('upload/activity/'.$act->attachment)}}" class="text-info">{{$act->attachment}}</a></td>
                                                <td>{{$act->timer}}</td>
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
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function () {

    $("#editModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Edit Data');
        modal.find('.modal-body').load('/'+url+'/edit/' + id);
    });
    $("#detailModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Detail Data');
        modal.find('.modal-body').load('/'+url+'/detail/' + id);
    });
    $("#deleteModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Delete Data');
        modal.find('.modal-body').load('/'+url+'/delete/' + id);
    });
    $("#addModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Add New Data');
        modal.find('.modal-body').load('/'+url+'/add/' + id);
    });
    $("#successModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        modal.find('#modalTitle').html('Confirm');
        modal.find('.modal-body').load('/'+url+'/' + id);
    });
});
</script>
@endsection
