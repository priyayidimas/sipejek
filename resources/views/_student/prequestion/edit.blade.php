<form class="" action="{{URL::to('/prequestion/answer/edit/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$answer_id}}">
    <p>Question : {{$data->prequestion->question}}</p>
    @if ($data->prequestion->project->hasPreOk != 1)
    <div class="row">
        <div class="col">
            <div class="md-form md-outline">
                <p>Answer :</p>
                <textarea name="answer" id="" cols="30" rows="5" class="form-control md-textarea">{!! str_replace("<br />","&#13;",$data->answer) !!}</textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn blue white-text waves-effect waves-light">Submit</button>
    @else
    <p>Answer :</p>
    <div class="desc">
        {!! $data->answer !!}
    </div>
    @endif
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Close</button>
</form>