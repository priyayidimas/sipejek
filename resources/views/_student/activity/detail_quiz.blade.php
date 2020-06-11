@php
    $n = 1;
    $i = 0;
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
    <form action="{{url('answer/add/')}}" method="post">
        @csrf
        <input type="hidden" name="session" value="{{encrypt($data->id)}}">
        <div class="quiz-body">
            @foreach ($data->questions as $question)
            <div class="row mb-4">
                <div class="col-md-12 m-auto">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ml-auto float-right">
                                        <p class="grey-text">Max Score : {{$question->maxscore}}</p>
                                    </div>
                                    <p>Question #{{$n++}}</p>
                                    <p>{{$question->question}}</p>
                                    <input type="hidden" name="token[{{$i}}]" value="{{encrypt($question->id)}}">
                                    <div class="md-form md-outline">
                                        <label for="desc">Your Answer</label>
                                        <textarea name="answer[{{$i}}]" id="" cols="30" rows="3" class="form-control md-textarea" required></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            @endforeach
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-success waves-effect" type="submit"><i class="far fa-paper-plane"></i> Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
