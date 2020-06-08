@php
    $n = 1;$i=0;
@endphp
<form class="" action="{{URL::to('/reviewQuiz')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="session" value="{{encrypt($eid)}}">
    @foreach ($data->questions as $question)
    @php
    $answer = $question->quizUser()->where('user_id','=',$user_id)->first();
    @endphp
    <div class="row mb-4">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="ml-auto float-right">
                                <p class="grey-text"> Max Score : {{$question->maxscore}}</p>
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
        <div class="col-md-2">
            <input type="hidden" name="token[{{$i}}]" value="{{encrypt($answer->id)}}">
            <div class="md-form md-outline">
                <input type="number" min="0" max="{{$question->maxscore}}" id="target" class="form-control" name="score[{{$i}}]" placeholder=" " required value="{{$answer->score}}">
                <label for="materialLoginFormEmail" class="active">Score</label>
            </div>
        </div>
    </div>
    <?php $i++; ?>
    @endforeach
    <button type="submit" class="btn btn-success white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>