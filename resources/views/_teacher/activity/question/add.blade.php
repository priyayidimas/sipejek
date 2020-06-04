<form class="" action="{{URL::to('/question/add/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <div class="row">
        <div class="col-md-12">
            <div class="md-form">
                <input type="text" id="target" class="form-control" name="question" placeholder=" " required value="">
                <label for="materialLoginFormEmail" class="active">Type Question</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-info white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>