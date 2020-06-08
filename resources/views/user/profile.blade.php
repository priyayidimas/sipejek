    <div class="row">
        <div class="col-12">
        
            <form action="{{url('updateProfile')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="token" value="{{encrypt($auth->id)}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form md-outline">
                            <label class="active" for="">Fullname</label>
                            <input type="text" class="form-control" name="fullname" value="{{$auth->fullname}}" placeholder=" " required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form md-outline">
                                <label class="active" for="">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$auth->email}}" placeholder=" " required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form md-outline">
                                <label class="active" for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Fill If Need To Change Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    @if ($auth->type > 1)
                    <h5>Profile Photo</h5><br>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{url(''.$auth->image)}}" class="img-fluid" alt="" style="width: 150px; height: 150px">
                        </div>
                        <div class="col-md-7">
                            <div class="md-form md-outline">
                                <div class="file-field">
                                    <div class="file-path-wrapper">
                                        <input type="text" class="file-path validate" placeholder="Only if need to change photo">
                                    </div>
                                    <div class="btn btn-primary btn-sm float-left">
                                        <span>Choose File</span>
                                        <input type="file" name="image">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    @else
                    <div class="md-form md-outline">
                        <label class="active" for="">Group Description</label>
                        <textarea name="desc" id="" cols="30" rows="5" class="form-control md-textarea">{!! str_replace("<br />","&#13;",$auth->desc)!!}</textarea>
                    </div>
                    @endif
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>
            </form>
          
        </div>
    </div>