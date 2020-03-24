<form class="" action="{{URL::to('/phase/add/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$project_id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="md-form">
                <input type="text" id="target" class="form-control" name="title" placeholder=" " required>
                <label for="materialLoginFormEmail" class="active">Title</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input placeholder="yyyy-mm-dd HH:ii:ss" type="text" class="form-control">
                <label for="date-picker-example" class="active">Start Date</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input placeholder="yyyy-mm-dd HH:ii:ss" type="text" class="form-control">
                <label for="date-picker-example" class="active">Due Date</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="md-form">
                <p>Description</label>
                <textarea name="desc" id="" cols="30" rows="5" class="form-control md-textarea"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn blue white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>