@php
    $f_section = DB::table('form_section')->get();
    $alphabet = range('A','Z');
    $n = 0;
    $i = 1;
@endphp
@extends('t_index')
@section('title')
    File Input
@endsection
@section('content')
<div class="container">    
    <div class="row">
       <div class="card">
           <div class="card-body">
               <h4 class="card-title">{{Auth::user()->nama}}</h4>
               <form action="{{url('/file')}}" enctype="multipart/form-data" method="POST">
                @csrf
                {{-- <div class="md-form">
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Choose file</span>
                            <input type="file" name="avatar">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" readonly name="avatarLoc" type="text" placeholder="Upload your file">
                        </div>
                    </div>
                </div> --}}
                {{-- <fieldset class="form-check">
                    <input class="form-check-input" name="group1" type="radio" id="radio1" checked="checked">
                    <label class="form-check-label" for="radio1">Option 1</label>
                </fieldset>
                <fieldset class="form-check">
                    <input class="form-check-input" name="group1" type="radio" id="radio2">
                    <label class="form-check-label" for="radio2">Option 2</label>
                </fieldset>
                <fieldset class="form-check">
                    <input class="form-check-input" name="group1" type="radio" id="radio3">
                    <label class="form-check-label" for="radio3">Option 3</label>
                </fieldset> --}}
                <fieldset class="form-check">
                    <input type="hidden" name="check" value="0">
                    <input class="form-check-input filled-in" name="check" type="checkbox" id="checkbox1" checked="checked" value="1">
                    <label class="form-check-label" for="checkbox1">Checkbox</label>
                </fieldset>
                <button class="btn btn-default" type="submit">Submit</button>
            </form>
           </div>
       </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{Auth::user()->nama}}</h4>
                <table class="table table-hover table-responsive">
                    <thead>
                        <th>No</th>
                        <th>Variabel</th>
                        <th>Indikator</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>Keterangan</th>
                    </thead>
                    <tbody>
                        @foreach (DB::table('form_format')->get() as $f)
                            <tr>
                                <td>1</td>
                                <td>{{$f->variabel}}</td>
                                <td>{{$f->indikator}}</td>
                                <td>{{$f->n1}}</td>
                                <td>{{$f->n2}}</td>
                                <td>{{$f->n3}}</td>
                                <td>{{$f->n4}}</td>
                                <td>{!!$f->keterangan !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="card w-100">
            <div class="card-body">
            <form action="{{url('/insertBap')}}" method="get">
                <div class="tab-content mb-5" style="padding: 1rem">
                @foreach ($f_section as $s)
                @php
                    $f_format = DB::table('form_format')->where('section_id','=',$s->id)->get();        
                @endphp
                    <div class="tab-pane fade in {{$a = ($s->id == 1) ? 'show active' : '' }}" id="section{{$s->id}}" role="tabpanel">
                        <h4>{{$alphabet[$n++]}}. {{$s->nama}}</h4>
                        <table class="table">
                        @foreach ($f_format as $f)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    {{$f->variabel}} <i class="fa fa-arrow-right" aria-hidden="true"></i> {{$f->indikator}} : 
                                    @if ($f->keterangan != "")
                                    <a data-toggle='modal' href='#ketModal' data-keterangan= "{{$f->keterangan}}"><i class='fa fa-question-circle' aria-hidden='true'></i></a>
                                    @endif
                                    @if ($f->n1 != 0)
                                    <fieldset class="form-check">
                                        <input class="form-check-input" name="f{{$f->id}}" type="radio" id="f{{$f->id}}o1" value="1">
                                        <label class="form-check-label" for="f{{$f->id}}o1">1</label>
                                    </fieldset>
                                    @endif
                                    @if ($f->n2 != 0)
                                    <fieldset class="form-check">
                                        <input class="form-check-input" name="f{{$f->id}}" type="radio" id="f{{$f->id}}o2" value="2">
                                        <label class="form-check-label" for="f{{$f->id}}o2">2</label>
                                    </fieldset>
                                    @endif
                                    @if ($f->n3 != 0)
                                    <fieldset class="form-check">
                                        <input class="form-check-input" name="f{{$f->id}}" type="radio" id="f{{$f->id}}o3" value="3">
                                        <label class="form-check-label" for="f{{$f->id}}o3">3</label>
                                    </fieldset>
                                    @endif
                                    @if ($f->n4 != 0)
                                    <fieldset class="form-check">
                                        <input class="form-check-input" name="f{{$f->id}}" type="radio" id="f{{$f->id}}o4" value="4">
                                        <label class="form-check-label" for="f{{$f->id}}o4">4</label>
                                    </fieldset>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                @endforeach
                    <div class="tab-pane fade in" id="section4" role="tabpanel">
                        <h4>{{$alphabet[$n]}}. Rincian</h4>
                        <div class="md-form">
                            <textarea type="text" id="eval" name="evaluasi" class="form-control md-textarea" rows="4"></textarea>
                            <label for="eval">Evaluasi</label>
                        </div>
                        <div class="md-form">
                            <textarea type="text" id="rec" name="rekomendasi" class="form-control md-textarea" rows="4"></textarea>
                            <label for="rec">Rekomendasi</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
                <ul class="nav nav-tabs md-tabs nav-justified mb-5">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#section1" role="tab">1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#section2" role="tab">2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#section3" role="tab">3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#section4" role="tab">4</a>
                    </li>
                </ul>   
            </form>
            </div>
        </div>
    </div>
</div>
<div class="modal-only">
    <div class="modal fade" id="ketModal" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><h5>Keterangan</h5></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $("#ketModal").on("show.bs.modal",function (e) {
                var btn = $(e.relatedTarget);
                var data = btn.data('keterangan');
                var modal = $(this);
                modal.find('.modal-body').html(data);
            });
        });
    </script>
@endsection