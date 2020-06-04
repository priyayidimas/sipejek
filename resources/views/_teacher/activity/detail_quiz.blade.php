@php
    $i = 1;
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
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        {{$data->title}}
                        <button class="ml-auto float-right btn btn-danger btn-sm" data-target="#deleteModal" data-toggle="modal" data-url="activity" data-token="{{encrypt($data->id)}}" style="padding: 10px; margin: 5px"><i class="fas fa-trash"></i></button>
                        <button class="ml-auto float-right btn btn-warning btn-sm" data-target="#editModal" data-toggle="modal" data-url="activity" data-token="{{encrypt($data->id)}}" style="padding: 10px; margin: 5px"><i class="fas fa-pencil"></i></button>
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
                            <p><b>Quiz Body</b></p>
                            <hr>
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
                            <div class="ml-auto">
                                <h6>Max Score: {{$data->maxgrade}}</h6>
                            </div>
                            <button class="btn btn-md btn-info dropdown-toggle mr-4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-plus"></i> Add Question</button>
                            <div class="dropdown-menu">
                                {{-- <a class="dropdown-item" id="choiceBtn">Multi-choice</a> --}}
                                <a class="dropdown-item" href="#addModal" data-toggle="modal" data-url="question" data-token="{{encrypt($data->id)}}">Essay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quiz-body">
        @foreach ($data->questions as $question)
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ml-auto float-right">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#editModal" data-toggle="modal" data-url="question" data-token="{{encrypt($question->id)}}">Edit</a>
                                        <a class="dropdown-item" href="#deleteModal" data-toggle="modal" data-url="question" data-token="{{encrypt($question->id)}}">Delete</a>
                                    </div>
                                </div>
                                <p>Question #{{$i++}}</p>
                                <p>{{$question->question}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
</div>
@endsection
@section('script')
<script src="{{url('assets/js/detail.js')}}"></script>
@endsection