@php
    $n = 1;
@endphp
@extends('t_index')
@section('title')
    User View
@endsection
@section('head')
<link href="{{url('/assets/css/addons/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5>Users</h5><hr>
                    <a href="#addModal" class="btn btn-md btn-info" data-toggle="modal"><i class="fas fa-plus"></i> Add new user</a><br>
                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">No</th>
                                <th class="th-sm">Full Name</th>
                                <th class="th-sm">Email</th>
                                <th class="th-sm">Type</th>
                                <th class="th-sm">Desc</th>
                                <th class="th-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{$n++}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->type}}</td>
                                <td style="white-space:pre">{{$d->desc}}</td>
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
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead">Add New User</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="" action="{{URL::to('/users/add')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="fullname" required">
                                    <label for="materialLoginFormEmail" class="active">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="email" required>
                                    <label for="materialLoginFormEmail" class="active">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="password" id="target" class="form-control" name="password" required">
                                    <label for="materialLoginFormEmail" class="active">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select id="sel" class="mdb-select md-form colorful-select dropdown-danger" name="type" required>
                                    <option disabled>Select Type...</option>
                                    <option value="2">Teacher</option>
                                    <option value="1">Student</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="md-form">
                                    <p>Description</label>
                                    <textarea name="desc" id="" cols="30" rows="3" class="form-control md-textarea"></textarea>
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
<script src="{{url('/assets/js/addons/datatables.min.js')}}"></script>
<script>
$(document).ready(function () {

    $('#dtTable').DataTable();
    $('#dtTable_wrapper').find('label').each(function () {
        $(this).parent().append($(this).children());
    });
    $('#dtTable_wrapper .dataTables_filter').find('input').each(function () {
        const $this = $(this);
        $this.attr("placeholder", "Search");
        $this.removeClass('form-control-sm');
    });
    $('#dtTable_wrapper .dataTables_length').addClass('d-flex flex-row');
    $('#dtTable_wrapper .dataTables_filter').addClass('md-form');
    $('#dtTable_wrapper select').removeClass(
    'custom-select custom-select-sm form-control form-control-sm');
    $('#dtTable_wrapper select').addClass('mdb-select');
    $('#dtTable_wrapper .mdb-select').materialSelect();
    $('#dtTable_wrapper .dataTables_filter').find('label').remove();

    $("#theModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var action = link.data('action');
        if(action == "edit"){
            modal.find('.modal-dialog').removeClass("modal-danger");
            modal.find('.modal-dialog').addClass("modal-warning");
            modal.find('#modalTitle').html('Edit User Data');
            modal.find('.modal-body').load('/users/edit/' + id);
        }else{

            modal.find('.modal-dialog').removeClass("modal-warning");
            modal.find('.modal-dialog').addClass("modal-danger");
            modal.find('#modalTitle').html('Delete User Data');
            modal.find('.modal-body').load('/users/delete/' + id);
        }
    });
});
</script>
@endsection
