@php
    $n = 1;$i = 1;
@endphp
@extends('t_index')
@section('title')
    Project View
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">{{$data->code}} - {{$data->title}}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Project Detail</h5><hr>
                    <div class="row">
                        <div class="col"></div>
                    </div>
                    <h5 class="pb-3">{{$data->topic." : ".$data->title}}</h5>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <p>Status : {!! ($data->hasPreOk == 1) ? '<span class="badge badge-success">Started</span>' : '<span class="badge badge-danger">Not Started</span>' !!}</p>
                                    @if ($data->hasPreOk == 1)
                                    <p>Description :</p>
                                    <div>
                                        {!! $data->desc !!}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Preliminary Phase</h5><hr>
                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">No</th>
                                <th class="th-sm">Question</th>
                                <th class="th-sm">Desc</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->prequestions as $p)
                            @php
                                $exist = $p->prequestionUser->where('user_id','=',Auth::id())->count();
                                if($data->hasPreOk == 1){
                                    $badge = '<span class="badge badge-info">Forum Closed</span>';
                                }elseif ($exist > 0) {
                                    $badge = '<span class="badge badge-success">Submitted</span>';
                                }else{
                                    $badge = '<span class="badge badge-danger">Not Submitted</span>';
                                }
                            @endphp
                            <tr>
                                <td>{{$n++}}</td>
                                <td><a href="#answerModal" class="text-info" data-toggle="modal" data-token="{{encrypt($p->id)}}">{{$p->question}}</a></td>
                                <td style="white-space:pre">{!! $p->desc !!}</td>
                                <td>{!! $badge !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if ($data->hasPreOk == 1)        
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5>Project Activities</h5><hr>
                    <br><br>
                    <div class="accordion md-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach ($data->phases as $ph)
                        @php
                            $n = 1;
                            $activity = $ph->activities;
                        @endphp
                        <div class="card">
                            <div class="card-header" role="tab" id="heading{{$ph->id}}">
                                <a data-toggle="collapse" href="#collapse{{$ph->id}}" aria-expanded="true" 
                                    aria-controls="collapse{{$ph->id}}">
                                    <h5 class="mb-0">{{$ph->title}} 
                                    <i class="fas fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapse{{$ph->id}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$ph->id}}" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-2">Start Date : </div>
                                        <div class="col-sm-6 col-md">{{Carbon::parse($ph->date_start)->format('M d, Y @ H:i')}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-2">Due Date : </div>
                                        <div class="col-sm-6 col-md">{{Carbon::parse($ph->date_due)->format('M d, Y @ H:i')}}</div>
                                    </div>
                                    <table id="dtTable" class="table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="th-sm">No</th>
                                                <th class="th-sm">Title</th>
                                                <th class="th-sm">Type</th>
                                                <th class="th-sm">Status</th>
                                                <th class="th-sm">Score</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($activity as $act)
                                            @php
                                                $score = -1;
                                                if($act->type == 'quiz'){
                                                    $submission = $act->answers->where('user_id','=',Auth::id());
                                                }else{
                                                    $submission = $act->assignmentUser()->where('user_id','=',Auth::id());
                                                }
                                                $badge = "";
                                                if($submission->count() < 1){
                                                    $badge = '<span class="badge badge-danger">Not Submitted</span>';
                                                }elseif ($submission->first()->score == null) {
                                                    $badge = '<span class="badge badge-warning">Submission Sent</span>';
                                                }else{
                                                    $badge = '<span class="badge badge-success">Submission Scored</span>';
                                                    $score = ($act->type == 'quiz') ? $submission->sum('score') : $submission->first()->score;
                                                }
                                            @endphp
                                            <tr>
                                                <td>{{$n++}}</td>
                                                <td><a href="{{url('activity/detail/'.$act->slug.'/submission')}}" class="text-info">{{$act->title}}</a></td>
                                                <td>{{$act->type}}</td>
                                                @if ($act->type != 'material')
                                                <td>{!! $badge !!}</td>
                                                <td style="font-size: 16px">{{($score < 0) ? '-' : $score}} / {{$act->maxscore}}</td>
                                                @else
                                                <td> - </td>
                                                <td> - </td>
                                                @endif

                                                {{-- <td>{{($act->type == 'material') ? '-' : $act->score}}</td> --}}
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<div class="just-modals">
    <div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p id="modalTitle" class="heading lead">Preliminary Question</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row answerLoader">
                        <div class="col-md-12" style="text-align: center">
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-blue-only ">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="answerContent"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $("#answerModal").on('show.bs.modal', function (ev) {
            var modal = $(this);
            var link = $(ev.relatedTarget);
            var id = link.data('token');
            var url = link.data('url');
            modal.find('#modalTitle').html('Answer');
            setTimeout(function () { 
                modal.find('.answerLoader').css('display','none');
                modal.find('.answerContent').css('display','block');
            },400);
            setTimeout(function () { 
                modal.find('.answerContent').load('/prequestion/answer/add/' + id);
            },300);
        });
        $("#answerModal").on('hide.bs.modal', function () {
            var modal = $(this);
            modal.find('.answerLoader').css('display','block');
            modal.find('.answerContent').css('display','none');
        });
    });
</script>
@endsection
