@php
    $f_section = DB::table('form_section')->get();
    $alphabet = range('A','Z');
    
    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        )
    );

    $path = url('assets/img/Tagun.png');
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path, false, stream_context_create($arrContextOptions));
    $base64 = 'data:image/'.$type.';base64,'.base64_encode($data);

    $path1 = url('assets/img/icon.png');
    $type1 = pathinfo($path1, PATHINFO_EXTENSION);
    $data1 = file_get_contents($path1, false, stream_context_create($arrContextOptions));
    $base641 = 'data:image/'.$type1.';base64,'.base64_encode($data1);

@endphp
<html>
    <head>
        <style>
            p {
                margin: 0;
            }
            table.z {
                border-collapse: collapse;
            }
            table.z tr th {
                border: 1px solid black;
            }
            table.z tr td {
                border: 1px solid black;
            }
            .val {
                font-family: ZapfDingbats,sans-serif;
                text-align: center;
            }
            table#v tr th{
                padding-top: 20px;
                text-align: center;
                vertical-align: text-top !important;
            }
            .page-break {
                page-break-after: always;
            }
        </style>
    </head>
    <body>
        <img src="{{base_path('Kop.jpg')}}" alt="" srcset="" style="width:100%">
        <table style="text-align: left; padding-top: 15px">
            <tr>
                <th>Divisi</th>
                <th>:</th>
                <td>Divkomtekinfo</td>
            </tr>
            <tr>
                <th>Nama Kegiatan</th>
                <th>:</th>
                <td>Wisuda Gelombang 2</td>
            </tr>
            <tr>
                <th>Hari/ Tanggal</th>
                <th>:</th>
                <td>Senin, 10 Oktober 2019</td>
            </tr>
            <tr>
                <th>Waktu dan Tempat</th>
                <th>:</th>
                <td>Dipersilahkan</td>
            </tr>
        </table>
        @foreach ($f_section as $s)
        @php
            $form = DB::table('form_format')->where("section_id",'=',$s->id)->get();
            $i = 1;
        @endphp
        <h3>{{$alphabet[$s->id-1]}}. {{$s->nama}}</h3>
        <table style="width:100%" class="z">
            <tr style="text-align:center">
                <th rowspan="2">No</th>
                <th rowspan="2">Variabel</th>
                <th rowspan="2">Indikator</th>
                <th colspan="4">Nilai</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr style="text-align:center">
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </tr>
            @foreach ($form as $f)
            <tr>
                <td style="width: 6.25%; text-align:center">{{$i++}}</td>
                <td style="width: 18.75%; padding-left:10px">{{$f->variabel}}</td>
                <td style="width: 25%; padding-left:10px">{{$f->indikator}}</td>
                <td class="val" style="width: 6.25%; {{$a = ($f->n1 == 0) ? 'background-color: #000' : ''}}"></td>
                <td class="val" style="width: 6.25%; {{$a = ($f->n2 == 0) ? 'background-color: #000' : ''}}"></td>
                <td class="val" style="width: 6.25%; {{$a = ($f->n3 == 0) ? 'background-color: #000' : ''}}"></td>
                <td class="val" style="width: 6.25%; {{$a = ($f->n4 == 0) ? 'background-color: #000' : ''}}">4</td>
                <td style="width: 25%">{!!$f->keterangan!!}</td>
            </tr>
            @endforeach
        </table>
        @endforeach
        <div class="page-break"></div>
        <h3>D. Rincian</h3>
        <table class="z" id="v" style="width:100%">
            <tr>
                <th style="width:25%">Evaluasi</th>
                <td style="width:50%">
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                </td>
                <th rowspan="2" style="width:25%">
                    <b>Nilai Kegiatan</b>
                    <h1>108/108</h1>
                    <b>Grade</b>
                    <h1>A</h1>
                </th>
            </tr>
            <tr>
                <th style="width:25%">Rekomendasi</th>
                <td style="width:50%">
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                    <p>- Lorem Ipsum</p>
                </td>
            </tr>
        </table>
        <br>
        <table style="width:100%">
            <tr>
                <td style="width:40%"></td>
                <td style="width:30%"></td>
                <td style="width:30%">
                    <b>Bandung, 10 Oktober 2019 </b>
                </td>
            </tr>
            <tr>
                <td style="width:40%"></td>
                <td style="width:30%">
                    <b>Ketua DPM</b>
                </td>
                <td style="width:30%">
                    <b>Pengawas</b>
                </td>
            </tr>
            <tr>
                <td style="width:40%"></td>
                <td style="width:30%">
                </td>
                <td style="width:30%">
                </td>
            </tr>
            <tr>
                <td style="width:40%"></td>
                <td style="width:30%">
                    <img src="{{$base641}}" alt="" style="height:100px; z-index:20; position:absolute">
                    <img src="{{$base64}}" alt="" style="height:100px;width:200px; position:relative">
                </td>
                <td style="width:30%">
                    <img src="{{$base64}}" alt="" style="width:200px;height:100px">
                </td>
            </tr>
            <tr>
                <td style="width:40%"></td>
                <td style="width:30%">
                    <b>Anggi Haifa Lestari</b>   
                </td>
                <td style="width:30%">
                    <b>Mulky Mursyidi Asmilan</b>
                </td>
            </tr>
            <tr>
                <td style="width:40%"></td>
                <td style="width:30%">
                    <b>NIM. 1606420</b>
                </td>
                <td style="width:30%">
                    <b>NIM. 1806500</b>
                </td>
            </tr>
        </table>
    </body>
</html>