<form class="" action="{{URL::to('/prequestion/answer/add/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$prequestion_id}}">
    @if ($data->project->hasPreOk != 1)        
    <p>Question : {{$data->question}}</p>
    <div class="row">
        <div class="col">
            <div class="md-form md-outline">
                <p>Answer</label>
                <textarea name="answer" id="" cols="30" rows="5" class="form-control md-textarea">{!! ($data->answer != '') ? str_replace("<br />","&#13;",$data->answer) : ''!!}</textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn blue white-text waves-effect waves-light">Submit</button>
    @else
    <p class="text-center">The Forum Has Been Closed!</p>
    @endif
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Close</button>
</form>