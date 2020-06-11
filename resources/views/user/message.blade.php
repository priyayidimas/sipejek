@php
    $n = 1;
@endphp
@extends('t_index')
@section('title')
    Messages View
@endsection
@section('head')
<link href="{{url('/assets/css/addons/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Messages</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Messages</h5><hr>
                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">No</th>
                                <th class="th-sm">Full Name</th>
                                <th class="th-sm">Email</th>
                                <th class="th-sm">Subject</th>
                                <th class="th-sm">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{$n++}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->subject}}</td>
                                <td>{{$d->message}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
    $('#dtTable_wrapper .dataTables_filter').addClass('md-form md-outline');
    $('#dtTable_wrapper select').removeClass(
    'custom-select custom-select-sm form-control form-control-sm');
    $('#dtTable_wrapper select').addClass('mdb-select');
    $('#dtTable_wrapper .mdb-select').materialSelect();
    $('#dtTable_wrapper .dataTables_filter').find('label').remove();

});
</script>
@endsection
