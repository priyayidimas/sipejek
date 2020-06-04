@extends('t_index')
@section('title')
    Add Quiz
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Quiz</h4>
                </div>
            </div>
        </div>
    </div>
    <form action="{{url('activity/add/quiz')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{$phase_id}}">
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">     

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="title" placeholder=" " required>
                                    <label for="materialLoginFormEmail" class="active">Title</label>
                                </div>
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
                                <div class="md-form">
                                    <input type="text" id="target" class="form-control" name="maxgrade" placeholder=" " required value="100">
                                    <label for="materialLoginFormEmail" class="active">Max Grade</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button class="col btn btn-success waves-effect" type="submit"><i class="far fa-check mr-2" aria-hidden="true"></i> Submit</button>
                        </div>
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
                                <button class="btn btn-md btn-info dropdown-toggle mr-4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-plus"></i> Add Question</button>
                                <div class="dropdown-menu">
                                    {{-- <a class="dropdown-item" id="choiceBtn">Multi-choice</a> --}}
                                    <a class="dropdown-item" id="essayBtn">Essay</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="quiz-body">


        </div>
    </form>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        var i = 0;
        $("#essayBtn").on('click',function(){
            var html = `
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <p>Question #${i+1}</p>
                                        <div class="md-form">
                                            <input type="text" id="target" class="form-control" name="essay[${i}]" placeholder=" " required>
                                            <label for="question" class="active">Type Question</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            i++;
            $(".quiz-body").append(html);
        });
    });
</script>
@endsection