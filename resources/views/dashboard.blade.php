@php
    $n = 1;
@endphp
@extends('t_index')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-9">
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Dashboard - {{($auth->type == 1) ? "Student" : (($auth->type == 2) ? "Teacher" : "Admin")}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12">
                            @if ($auth->type > 2)
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="card classic-admin-card unique-color-dark mt-3">
                                        <div class="card-body">
                                            <div class="pull-right">
                                            <i class="fas fa-book mb-2" style="font-size:40px"></i>
                                            </div>
                                            <h5>STUDENTS</h5>
                                            <h1 class="display float-right mr-3">{{$cStudent}}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card classic-admin-card unique-color mt-3">
                                        <div class="card-body">
                                            <div class="pull-right">
                                            <i class="fas fa-chalkboard-teacher mb-2" style="font-size:40px"></i>
                                            </div>
                                            <h5>TEACHERS</h5>
                                            <h1 class="display float-right mr-3">{{$cTeacher}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="card classic-admin-card unique-color mt-3">
                                        <div class="card-body">
                                            <div class="pull-right">
                                            <i class="fas fa-table mb-2" style="font-size:40px"></i>
                                            </div>
                                            <h5>PROJECTS</h5>
                                            <h1 class="display float-right mr-3">{{$cProject}}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card classic-admin-card unique-color-dark mt-3">
                                        <div class="card-body">
                                            <div class="pull-right">
                                            <i class="fas fa-envelope mb-2" style="font-size:40px"></i>
                                            </div>
                                            <h5>MESSAGES</h5>
                                            <h1 class="display float-right mr-3">{{$cMessage}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="card">
                                <div class="card-body">
                                    @if ($auth->type == 2)
                                    <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal"><i class="fas fa-plus"></i> Add new project</a>
                                    <a href="#coteachModal" class="btn btn-md btn-success" data-toggle="modal"><i class="fas fa-chalkboard-teacher"></i> Co-teach</a><br>
                                    @endif
                                    @if ($auth->type == 1)
                                    <a href="#enrollModal" class="btn btn-md btn-success" data-toggle="modal"><i class="fas fa-chalkboard-teacher"></i> Join A Project</a><br>
                                    @endif
                                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="th-sm">No</th>
                                                <th class="th-sm">Code</th>
                                                <th class="th-sm">Title</th>
                                                <th class="th-sm">Status</th>
                                                <th class="th-sm act">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($auth->projectUser as $d)
                                            <tr>    
                                                <td>{{$n++}}</td>
                                                <td>{{$d->project->code}}</td>
                                                <td><a class="blue-text" href="{{url('/projects/detail/'.$d->project->code)}}">{{$d->project->topic." : ".$d->project->title}}</a></td>
                                                <td>{!! ($d->project->hasPreOk == 1) ? '<span class="badge badge-success">Started</span>' : '<span class="badge badge-danger">Not Started</span>' !!}</td>
                                                @if ($d->isOwner == 1)
                                                <td class="act"><a href="#theModal" class="text-warning" data-toggle="modal" data-action="edit" data-token="{{encrypt($d->project->id)}}"><i class="fas fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;<a href="#theModal" class="text-danger" data-toggle="modal" data-action="delete" data-token="{{encrypt($d->project->id)}}"><i class="fas fa-trash"></i></a></td>
                                                @else
                                                <td class="act"> - </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
    
                </div>
    
                <div class="col-md-3">
                    <div class="card card-cascade narrower mb-5">
                        <div class="view view-cascade gradient-card-header special-color">
                            <h5 class="mb-0 font-weight-bold">User Profile</h5>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <img src="{{url(''.$auth->image)}}" alt="User Photo" class="z-depth-1 mb-3 mx-auto" style="width: 150px; height: 150px">
          
                            <p class="text-muted mb-0"><strong>{{$auth->fullname}}</stong></p>
                            <p class="text-muted"><small>{{$auth->email}}</small></p>
                        </div>
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
                    <p id="modalTitle" class="heading lead">Add New Project</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="" action="{{URL::to('/projects/add')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="code" required">
                                    <label for="materialLoginFormEmail" class="active">Code</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="topic" required>
                                    <label for="materialLoginFormEmail" class="active">Topic</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="title" required">
                                    <label for="materialLoginFormEmail" class="active">Title</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn green white-text waves-effect waves-light">Submit</button>
                        <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="theModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify" role="document">
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
    <div class="modal fade" id="enrollModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead">Enroll to Project</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="" action="{{URL::to('/enrollProject')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="code" required">
                                    <label for="materialLoginFormEmail" class="active">Code</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn green white-text waves-effect waves-light">Submit</button>
                        <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="coteachModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead">Co-teach A Project</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="" action="{{URL::to('/coteachProject')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="code" required">
                                    <label for="materialLoginFormEmail" class="active">Code</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn green white-text waves-effect waves-light">Submit</button>
                        <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
    
        var lvl = "{{$auth->type}}";
        if(lvl == "1"){
            $(".act").css('display','none');
        }
        $("#theModal").on('show.bs.modal', function (ev) {
            var modal = $(this);
            var link = $(ev.relatedTarget);
            var id = link.data('token');
            var action = link.data('action');
            if(action == "edit"){
                modal.find('.modal-dialog').removeClass("modal-danger");
                modal.find('.modal-dialog').addClass("modal-warning");
                modal.find('#modalTitle').html('Edit Project Data');
                modal.find('.modal-body').load('/projects/edit/' + id);
            }else{
    
                modal.find('.modal-dialog').removeClass("modal-warning");
                modal.find('.modal-dialog').addClass("modal-danger");
                modal.find('#modalTitle').html('Delete Project Data');
                modal.find('.modal-body').load('/projects/delete/' + id);
            }
        });

    });
</script>
@endsection