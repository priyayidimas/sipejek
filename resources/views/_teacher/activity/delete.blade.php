<form class="" action="{{URL::to('/activity/delete/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <p>Are you sure want to delete this activity?</p>

    <button type="submit" class="btn red white-text waves-effect waves-light">Proceed</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>