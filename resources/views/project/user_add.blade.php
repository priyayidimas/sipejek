<form class="" action="{{URL::to('/projectuser/add/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$project_id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="md-form">
                <input type="number" id="target" class="form-control" name="groups" placeholder=" " required>
                <label for="materialLoginFormEmail" class="active">How Many Groups?</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn blue white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>