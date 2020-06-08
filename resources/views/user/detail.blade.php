<form class="" action="{{URL::to('/users/edit/')}}" method="post">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-md-6">
            <div class="md-form md-outline">
                <input readonly type="text" id="target" class="form-control" name="fullname" placeholder=" " required value="{{$data->fullname}}">
                <label for="materialLoginFormEmail" class="active">Full Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form md-outline">
                <input readonly type="text" id="target" class="form-control jenis" name="email" placeholder=" " required value="{{$data->email}}">
                <label for="materialLoginFormEmail" class="active">Email</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="md-form md-outline">
                <p>Description</label>
                <textarea readonly name="desc" id="" cols="30" rows="5" class="form-control md-textarea">{!! str_replace("<br />","&#13;",$data->desc) !!}</textarea>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Close</button>
</form>