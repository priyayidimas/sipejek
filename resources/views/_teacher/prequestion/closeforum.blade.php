<form class="" action="{{URL::to('/prequestion/closeforum/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$project_id}}">
    @if ($project->hasPreOk == 0)
    <p>Are you sure want to proceed? Students can't no longer answer the preliminary questions.</p>
    <div class="row">
        <div class="col">
            <div class="md-form md-outline">
                <p>Conclusion</label>
                <textarea name="desc" id="" cols="30" rows="5" class="form-control md-textarea"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn green white-text waves-effect waves-light">Proceed</button>
    @else
    <div class="row">
        <div class="col-md-12">
            :: The Forum Has Been Closed ::
        </div>
    </div>
    @endif
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Close</button>
</form>