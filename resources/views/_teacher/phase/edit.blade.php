@php
    $start = explode(' ',$data->date_start);
    $due = explode(' ',$data->date_due);
    $time_start = explode(':',$start[1]);
    $time_due = explode(':',$due[1]);
@endphp
<form class="" action="{{URL::to('/phase/edit/')}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{$eid}}">

    <div class="row">
        <div class="col-md-12">
            <div class="md-form">
                <input type="text" id="target" class="form-control" name="title" placeholder=" " required value="{{$data->title}}">
                <label for="materialLoginFormEmail" class="active">Title</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="md-form">
                <input placeholder="yyyy-mm-dd" type="text" name="date_start" class="form-control datepicker" value="{{$start[0]}}">
                <label for="date-picker-example" class="active">Start Date</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input placeholder="HH:ii" type="text" name="time_start" class="form-control timepicker" value="{{$time_start[0].':'.$time_start[1]}}">
                <label for="date-picker-example" class="active">Start Time</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="md-form">
                <input placeholder="yyyy-mm-dd" type="text" name="date_due" class="form-control datepicker" value="{{$due[0]}}">
                <label for="date-picker-example" class="active">Due Date</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input placeholder="HH:ii" type="text" name="time_due" class="form-control timepicker" value="{{$time_due[0].':'.$time_due[1]}}">
                <label for="date-picker-example" class="active">Due Time</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="md-form">
                <p>Description</label>
                <textarea name="desc" id="" cols="30" rows="2" class="form-control md-textarea">{!! str_replace("<br />","&#13;",$data->desc) !!}</textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-warning white-text waves-effect waves-light">Submit</button>
    <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal">Cancel</button>
</form>
<script>
    $(document).ready(function () {
        $('.datepicker').pickadate({
            format: 'yyyy-mm-dd',
        });
        $('.timepicker').pickatime({
            twelvehour: false
        });
    });
</script>