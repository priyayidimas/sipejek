<form class="" action="{{URL::to('/submission/edit/')}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">
    <div class="row">
        <div class="col">
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
    <div class="row">
        <div class="col">
            <div class="md-form md-outline">
                <p>Description</label>
                <textarea name="answer" id="" cols="30" rows="5" class="form-control md-textarea">{!! str_replace("<br />","&#13;",$data->desc) !!}</textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn blue white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>