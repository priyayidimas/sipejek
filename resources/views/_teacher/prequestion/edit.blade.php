<form class="" action="{{URL::to('/prequestion/edit/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <div class="row">
        <div class="col-md-12">
            <div class="md-form">
                <input type="text" id="target" class="form-control" name="question" placeholder=" " required value="{{$data->question}}">
                <label for="materialLoginFormEmail" class="active">Question</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="md-form">
                <p>Description</label>
                <textarea name="desc" id="" cols="30" rows="5" class="form-control md-textarea">{!! str_replace("<br />","&#13;",$data->desc) !!}</textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-warning white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>