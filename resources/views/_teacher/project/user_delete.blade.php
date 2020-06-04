<form class="" action="{{URL::to('/projectuser/delete/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <p>Are you sure want to unlink this user with current project?</p>

    <button type="submit" class="btn red white-text waves-effect waves-light">Proceed</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>