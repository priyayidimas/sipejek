@php
    <!-- $answer = App\model\PrequestionUser::where('prequestion_id','=',$data->id)->get(); -->
    $n = 1;
@endphp
<p>Question : {{$data->question}}</p>
<p>Answer : </p>
<table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">No</th>
            <th class="th-sm">Group Name</th>
            <th class="th-sm">Answer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($answer as $p)
        <tr>
            <td>{{$n++}}</td>
            <td>{{$name = App\model\User::where('id','=',$p->user_id)->first()->fullname}}</td>
            <td style="white-space:pre">{{$p->answer}}</td>
        </tr>
        @endforeach
    </tbody>
</table><br>
<button type="button" class="btn btn-flat waves-effect" data-dismiss="modal"><i class="fas fa-undo"></i> Back</button>
