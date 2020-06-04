<form class="" action="{{URL::to('/comment/delete/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">

    <p>Are you sure want to delete this comment?</p>

    <button type="submit" class="btn red white-text waves-effect waves-light">Proceed</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>