@php
    $n = 1;
    $project = $data->phase->project;
@endphp
@extends('t_index')
@section('title')
    Quiz
@endsection
@section('head')
<style>
    @media(min-width: 992px){
        .container {
            width:55%;
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
                  <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
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
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="quiz-body">
        @foreach ($data->questions as $question)
        @php
            $answer = $question->quizUser()->where('user_id','=',Auth::id())->first();
        @endphp
        <div class="row mb-4">
            <div class="col-md-12 m-auto">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="ml-auto float-right">
                                    <p class="grey-text"> {{$answer->score}} / {{$question->maxscore}}</p>
                                </div>
                                <p>Question #{{$n++}}</p>
                                <p class="text-muted">{{$question->question}}</p>
                                <p>Your Answer: </p>
                                <p>{!! $answer->answer !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
