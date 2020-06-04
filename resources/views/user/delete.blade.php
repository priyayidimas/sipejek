<form class="" action="{{URL::to('/users/delete/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <input type="hidden" name="project" value="{{$project_id}}">

    <p>Are you sure want to delete this user?</p>

    <button type="submit" class="btn red white-text waves-effect waves-light">Proceed</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>