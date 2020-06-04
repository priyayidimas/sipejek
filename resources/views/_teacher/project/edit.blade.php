<form class="" action="{{URL::to('/projects/edit/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <div class="row">
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="target" class="form-control" name="code" placeholder=" " readonly required value="{{$data->code}}">
                <label for="materialLoginFormEmail" class="active">Code</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="target" class="form-control" name="topic" placeholder=" " required value="{{$data->topic}}">
                <label for="materialLoginFormEmail" class="active">Topic</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="md-form">
                <input type="text" id="target" class="form-control" name="title" placeholder=" " required value="{{$data->title}}">
                <label for="materialLoginFormEmail" class="active">Title</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="md-form">
                <p>Description (Only Avalaible If Completed The Preliminary Question)</label>
                <textarea name="desc" id="" cols="30" rows="5" {{($data->hasPreOk == 1) ? "" : "disabled"}} class="form-control md-textarea">{!! str_replace("<br />","&#13;",$data->desc) !!}</textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-warning white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>