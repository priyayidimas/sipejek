<form class="" action="{{URL::to('confirmQuiz')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <p>Are you sure finish edit the quiz? You won't be able to add,edit, and delete the question anymore</p>

    <button type="submit" class="btn green white-text waves-effect waves-light">Proceed</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Close</button>
</form>