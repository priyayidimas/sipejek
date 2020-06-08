<form class="" action="{{URL::to('/activity/edit/')}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <div class="row">
        <div class="col-md-12">
            <div class="md-form md-outline">
                <input type="text" id="target" class="form-control" name="title" placeholder=" " required value="{{$data->title}}">
                <label for="materialLoginFormEmail" class="active">Title</label>
            </div>
        </div>
    </div>
    @if ($data->type != 'quiz')
    <div class="row">
        <div class="col">
            <div class="md-form md-outline">
                <p>Description</label>
                <textarea name="desc" id="" cols="30" rows="3" class="form-control md-textarea">{!! str_replace("<br />","&#13;",$data->desc) !!}</textarea>
            </div>
        </div>
    </div>
    @endif
    @if ($data->type != 'material')
    <div class="row">
        <div class="col-md-12">
            <div class="md-form md-outline">
                <input type="text" id="target" class="form-control" name="maxscore" placeholder=" " required value="100">
                <label for="materialLoginFormEmail" class="active">Max Score</label>
            </div>
        </div>
    </div>
    @endif
    @if ($data->type != 'quiz')
    <div class="row">
        <div class="col-md-12">
            <div class="md-form md-outline">
                <div class="file-field">
                    <div class="btn btn-primary btn-sm float-left">
                        <span>Choose file</span>
                        <input type="file" name="attachment" accept="image/*,audio/*,video/*,.pdf,.zip,.ppt,.pptx,.doc,.docx">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" readonly name="attachmentName" type="text" placeholder="Replace Attachment">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <button type="submit" class="btn btn-warning white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>