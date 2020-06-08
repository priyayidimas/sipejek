<form class="" action="{{URL::to('/comment/edit/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <div class="row">
        <div class="col-md-12">
            <div class="md-form md-outline">
                <input type="text" id="target" class="form-control" name="message" placeholder=" " required value="{{$data->message}}">
                <label for="materialLoginFormEmail" class="active">Message</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-warning white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>