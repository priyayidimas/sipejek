<form class="" action="{{URL::to('/reviewAssignment')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <p><b>Submission Detail</b></p>
    <hr>
    <div class="row">
        <div class="col-md-12">
            @if ($data->attachment != null)
            <p>Attachment : <a href="{{url(''.$data->attachment)}}">{{$data->filename}}</a></p>
            @endif
            <p>Description :</label>
            <p>{!! $data->desc !!}</label>
        </div>
    </div>
    <p><b>Your Review</b></p>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="md-form md-outline mt-0">
                <label class="active">Review</label>
                <textarea placeholder=" " name="review" id="" cols="30" rows="3" class="form-control md-textarea">{!! str_replace("<br />","&#13;",$data->review) !!}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="md-form md-outline">
                <input type="number" min="0" max="{{$data->activity->maxscore}}" id="target" class="form-control" name="score" placeholder=" " required value="{{$data->score}}">
                <label for="materialLoginFormEmail" class="active">Score</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Close</button>
</form>