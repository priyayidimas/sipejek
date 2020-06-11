@php
    $n = 1;
@endphp
@extends('t_index')
@section('title')
    Project View
@endsection
@section('content')
<div class="container">    
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Projects</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Projects</h5><hr>
                    <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal"><i class="fas fa-plus"></i> Add new project</a><br>
                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">No</th>
                                <th class="th-sm">Code</th>
                                <th class="th-sm">Title</th>
                                <th class="th-sm">Status</th>
                                <th class="th-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{$n++}}</td>
                                <td>{{$d->code}}</td>
                                <td><a class="blue-text" href="{{url('/projects/detail/'.$d->code)}}">{{$d->topic." : ".$d->title}}</a></td>
                                <td>{!! ($d->hasPreOk == 1) ? '<span class="badge badge-success">Started</span>' : '<span class="badge badge-danger">Not Started</span>' !!}</td>
                                <td><a href="#theModal" class="text-warning" data-toggle="modal" data-action="edit" data-token="{{encrypt($d->id)}}"><i class="fas fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;<a href="#theModal" class="text-danger" data-toggle="modal" data-action="delete" data-token="{{encrypt($d->id)}}"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                                <div class="md-form md-outline">
                                    <input type="text" id="target" class="form-control" name="code" required">
                                    <label for="materialLoginFormEmail" class="active">Code</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form md-outline">
                                    <input type="text" id="target" class="form-control" name="topic" required>
                                    <label for="materialLoginFormEmail" class="active">Topic</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form md-outline">
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
</div>
@endsection
@section('script')
<script>
$(document).ready(function () {

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