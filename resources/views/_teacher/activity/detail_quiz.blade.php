@php
    $i = 1;
    $project = $data->phase->project;
@endphp
@extends('t_index')
@section('title')
    Quiz
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
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{url('/projects/detail/'.$project->code)}}">{{$project->code}} - {{$project->title}}</a></li>
                  <li class="breadcrumb-item active">{{$data->title}}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <span class="text-capitalize">{{$data->type}}</span> <i class="fas fa-angle-right"></i> {{$data->title}}
                        <button class="ml-auto float-right btn btn-danger btn-sm" data-target="#deleteModal" data-toggle="modal" data-url="activity" data-token="{{encrypt($data->id)}}" style="padding: 10px; margin: 5px"><i class="fas fa-trash"></i></button>
                        <button class="ml-auto float-right btn btn-warning btn-sm" data-target="#editModal" data-toggle="modal" data-url="activity" data-token="{{encrypt($data->id)}}" style="padding: 10px; margin: 5px"><i class="fas fa-pencil"></i></button>
                    </h4>
                    <p class="text-muted">Max Score : {{$data->maxscore}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-7">

            <div class="row mb-2">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
        
                                <div class="col-md-12">
                                    <p><b>Student Submissions</b></p>
                                    <hr>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submissions">

                <div class="row mb-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">

                                <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Group Name</th>
                                            <th class="th-sm">Status</th>
                                            <th class="th-sm">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($project->projectUser as $g)
                                        @if ($g->user->type != 2)        
                                        @php
                                            $submission = $data->answers->where('user_id','=',$g->user_id);
                                            $badge = "";
                                            if($submission->count() < 1){
                                                $badge = '<span class="badge badge-danger">Not Submitted</span>';
                                            }elseif ($submission->first()->score == null) {
                                                $badge = '<span class="badge badge-warning">Submission Sent</span>';
                                            }else{
                                                $badge = '<span class="badge badge-success">Submission Scored</span>';
                                            }
                                        @endphp                        
                                        <tr>
                                            <td><a href="#detailModal" class="text-info" data-toggle="modal" data-url="users" data-token="{{encrypt($g->user_id)}}">{{$g->user->fullname}}</a></td>
                                            <td>{!! $badge !!}</td>
                                            @if ($submission->count() > 0)
                                            <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#reviewModal" data-url="reviewQuiz" data-token="{{($data->id)}}" data-user="{{($g->user_id)}}">Review</button></td>
                                            @endif
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-5">
            <div class="row mb-2">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"><b>Quiz Body</b> 
                                <button class="ml-5 btn btn-md btn-info dropdown-toggle mr-4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 10px; margin: 5px"><i class="fas fa-plus"></i></button>
                                <div class="dropdown-menu">
                                    {{-- <a class="dropdown-item" id="choiceBtn">Multi-choice</a> --}}
                                    <a class="dropdown-item" href="#addModal" data-toggle="modal" data-url="question" data-token="{{encrypt($data->id)}}">Essay</a>
                                </div>
                            </h5>
                            
        

                        </div>
                    </div>

                </div>
            </div>
            <div class="quiz-body">

                @foreach ($data->questions as $question)
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12" style="font-size: 14px">
                                        <div class="ml-auto float-right">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#editModal" data-toggle="modal" data-url="question" data-token="{{encrypt($question->id)}}">Edit</a>
                                                <a class="dropdown-item" href="#deleteModal" data-toggle="modal" data-url="question" data-token="{{encrypt($question->id)}}">Delete</a>
                                            </div>
                                        </div>
                                        <p>Question #{{$i++}}</p>
                                        <p class="text-muted">{{$question->question}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

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
    <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-notify modal-success" role="document">
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
</div>
@endsection
@section('script')
<script src="{{url('assets/js/detail.js')}}"></script>
<script>
$(document).ready(function () {
    $("#reviewModal").on('show.bs.modal', function (ev) {
        var modal = $(this);
        var link = $(ev.relatedTarget);
        var id = link.data('token');
        var url = link.data('url');
        var user = link.data('user');
        modal.find('#modalTitle').html('Confirm');
        setTimeout(function () { 
            modal.find('.forumLoader').css('display','none');
            modal.find('.forumContent').css('display','block');
        },400);
        setTimeout(function () { 
            modal.find('.forumContent').load('/'+url+'/' + id + '/' + user);
        },300);
        console.log('/'+url+'/' + user + '/' + id);
    });
    $("#reviewModal").on('hide.bs.modal', function () {
        var modal = $(this);
        modal.find('.forumLoader').css('display','block');
        modal.find('.forumContent').css('display','none');
    });
});
</script>
@endsection