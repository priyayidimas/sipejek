<form class="" action="{{URL::to('/prequestion/add/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$project_id}}">
    @if ($project->hasPreOk == 0)        
    <div class="row">
        <div class="col-md-12">
            <div class="md-form md-outline">
                <input type="text" id="target" class="form-control" name="question" placeholder=" " required>
                <label for="materialLoginFormEmail" class="active">Question</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="md-form md-outline">
                <p>Description</label>
                <textarea name="desc" id="" cols="30" rows="5" class="form-control md-textarea"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn blue white-text waves-effect waves-light">Submit</button>
    @else
    <div class="row">
        <div class="col-md-12">
            :: The Forum Has Been Closed ::
        </div>
    </div>
    @endif
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>