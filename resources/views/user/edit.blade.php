<form class="" action="{{URL::to('/users/edit/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <input type="hidden" name="project" value="{{$project_id}}">
    <div class="row">
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="target" class="form-control" name="fullname" placeholder=" " required value="{{$data->fullname}}">
                <label for="materialLoginFormEmail" class="active">Full Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="target" class="form-control jenis" name="email" placeholder=" " required value="{{$data->email}}">
                <label for="materialLoginFormEmail" class="active">Email</label>
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