<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SIPEJEK</title>
        <link rel="shortcut icon" href="{{{ asset('/assets/img/monitor.svg') }}}">
        <link rel="icon" href="{{{ asset('/assets/img/monitor.svg') }}}">
        <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('/assets/fontawesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{url('/assets/css/mdb.min.css')}}" rel="stylesheet">
        <link href="{{url('/assets/css/landing.css')}}" rel="stylesheet">
    </head>
  </head>
  <body>
      <header>
          <nav id="" class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
              <div class="container">
                  <a class="navbar-brand" href="{{url('')}}">
                    <img src="{{url('/assets/img/monitor.svg')}}" height="30" alt="mdb logo" class="ml-3">
                    <span class="h4">SIPEJEK</span>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#landingNav"
                      aria-controls="landingNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="landingNav">
                      <ul class="navbar-nav mr-auto smooth-scroll">
                          <li class="nav-item">
                              <a class="nav-link" href="{{url('#intro')}}">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{url('#about')}}">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{url('#features')}}">Features</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{url('#contact')}}">Contact</a>
                          </li>
                      </ul>
                      <ul class="navbar-nav nav-flex-icons">
                        @if (Auth::check())
                        <li class="nav-item">
                          <a href="{{url('dashboard')}}" class="nav-link"><i class="fas fa-user"></i> {{Auth::user()->fullname}}</a>
                        </li>                            
                        @else
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/login')}}"><i class="fas fa-user"></i> Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/register')}}"><i class="fas fa-key"></i> Register</a>
                        </li>
                        @endif
                      </ul>
                  </div>
              </div>
          </nav>

          <div id="intro" class="view">
              <div class="mask rgba-black-strong">
                  <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                      <div class="row d-flex justify-content-center text-center">
                          <div class="col-md-10">
                              <h1 class="display-4 font-weight-bold white-text pt-3 mb-2">Sistem Pengelolaan Projek</h1>
                              <hr class="hr-light">
                              <h4 class="white-text my-4">Contact</h4>
                              <p class="white-text my-4"><i class="fab fa-whatsapp"></i> +62 838-2194-9586 : Anom</p>
                              <p class="white-text my-4"><i class="fab fa-whatsapp"></i> +62 851-5602-1661 : Mmull</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      <main class="mt-5">
          <div class="container">
              <section id="about">
                  <hr class="my-5">
                  <h2 class="mb-5 font-weight-bold text-center">About</h2>
                  <div class="row">
                      <div class="col-md-6 mb-4">
                          <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                              <div class="carousel-inner z-depth-1-half" role="listbox">
                                  <div class="carousel-item active">
                                      <img class="d-block w-100" src="{{url('/assets/img/sipejek.jpeg')}}" alt="First slide">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <h3 class="mb-3"><strong>Apa itu SIPEJEK ?</strong></h3>
                          <p>Sistem Pengelola Projek (SIPEJEK) adalah aplikasi khusus untuk
                            memberikan sarana kepada guru yang menerapkan sistem pembelajaran
                            berbasis projek (Project-based learning) dalam memberikan materi dan tugas
                            siswa serta memonitoring kemajuan pemahaman siswa.
                          </p>
                          <p>Aplikasi SIPEJEK bertujuan untuk membantu guru dan siswa dalam
                             berbagi informasi, materi pembelajaran, dan memberikan tugas
                             agar menjadi lebih mudah.</p>
                      </div>
                  </div>
              </section>
          </div>

          <hr class="my-5">

          <div class="container">
              <section id="excellence" class="text-center">
                  <h2 class="mb-5 font-weight-bold">Keunggulan SIPEJEK</h2>
                  <div class="row">
                      <div class="col-md-4 mb-5">
                          <i class="far fa-grin-alt fa-4x"></i>
                          <h4 class="my-4 font-weight-bold">Mudah</h4>
                          <p class="black-text">Tampilan yang digunakan tidak membuat guru dan siswa
                            kebingungan untuk mengakses aplikasi sehingga mudah diakses oleh guru dan siswa</p>
                      </div>
                      <div class="col-md-4 mb-1">
                          <i class="fas fa-check fa-4x"></i>
                          <h4 class="my-4 font-weight-bold">Lengkap</h4>
                          <p class="black-text">Menyediakan Preliminary Phase, menyediakan forum diskusi, dapat membagi kelompok,
                            , dan password terenkripsi sehingga aman</p>
                      </div>
                      <div class="col-md-4 mb-1">
                          <i class="fas fa-project-diagram fa-4x"></i>
                          <h4 class="my-4 font-weight-bold">Project-based Learning</h4>
                          <p class="black-text">Tidak banyak aplikasi yang memfasilitasi guru dengan menggunakan
                             sistem pembelajaran Project-based learning. SIPEJEK adalah aplikasi berbasis
                              Project-based learning sehingga guru dapat menggunakannya</p>
                      </div>
                  </div>
              </section>
          </div>

          <section id="features">
              <hr class="my-5">
              <div class="container">
                  <h2 class="mb-5 font-weight-bold text-center">Apa saja fitur SIPEJEK?</h2>
                  <div class="row">
                  <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="mb-2">
                      <ul class="nav md-pills pills-theme flex-center" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#guru" role="tab" aria-selected="true"><i class="fas fa-chalkboard-teacher fa-2x"></i><br>
                            Guru</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#siswa" role="tab" aria-selected="false"><i class="fas fa-graduation-cap fa-2x"></i><br> Siswa</a>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content">
                      <div class="tab-pane fade in active show" id="guru" role="tabpanel">
                        <br>
                        <div class="row">
                          <div class="col-lg-5 col-md-12 mb-5">
                            <div class="view overlay z-depth-1 rounded">
                              <img src="{{url('/assets/img/sipejek2.jpg')}}" class="img-fluid">
                            </div>
                          </div>
                          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                            <h4 class="mb-3 grey-text"><strong>Guru</strong></h4>
                            <h3 class="mb-3"><strong>Mempermudah guru dalam mengelola pembelajaran</strong></h3>
                            <ul>
                              <li>SIPEJEK dapat membagi siswa ke dalam beberapa kelompok sehingga
                                 memudahkan guru dalam penyampaian materi kepada siswa</li>
                              <li>Guru dapat memberikan materi hanya dengan mencantumkan file materi
                               di dalam projek</li>
                              <li>Sistem penugasan siswa yang mudah diakses dan dapat diatur jadwal pengumpulannya</li>
                            </ul>
                          </div>
                        </div>
                        <hr class="my-5">
                        <div>
                          <h2 class="text-center title my-5 py-4 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                            <strong>Fitur Detail</strong>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                            <h4 class="mb-3 grey-text"><strong>Guru</strong></h4>
                            <h3 class="mb-3"><strong>Mudah untuk mengatur projek siswa</strong></h3>
                            <p>Guru dapat menambahkan projek dengan mencantumkan kode, topik, dan tema projek. Guru pun
                            dapat mengubah dan menghapusnya dengan mudah</p>
                          </div>
                          <div class="col-lg-5 col-md-12 mb-5">
                            <div class="view overlay z-depth-1 rounded">
                              <img src="{{url('/assets/img/landingpage/project.jpg')}}" class="img-fluid">
                            </div>
                          </div>
                        </div>
                        <hr class="my-5">
                        <div class="row">
                          <div class="col-lg-5 col-md-12 mb-5">
                            <div class="view overlay z-depth-1 rounded">
                              <img src="{{url('/assets/img/landingpage/group.jpg')}}" class="img-fluid">
                            </div>
                          </div>
                          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                            <h4 class="mb-3 grey-text"><strong>Guru</strong></h4>
                            <h3 class="mb-3"><strong>Mengelompokan siswa untuk mengerjakan projek</strong></h3>
                            <p>Dengan adanya kelompok, siswa akan lebih banyak berdiskusi dengan anggota kelompoknya
                            sehingga akan memudahkan pemahaman mengenai materi yang dipelajari</p>
                          </div>
                        </div>
                        <hr class="my-5">
                        <div class="row">
                          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                            <h4 class="mb-3 grey-text"><strong>Guru</strong></h4>
                            <h3 class="mb-3"><strong>Memberikan pendahuluan mengenai projek</strong></h3>
                            <p>Sebelum melakukan projek, siswa diarahkan untuk menjawab pertanyaan di pleliminary phase
                            untuk memudahkan pemahaman materi</p>
                          </div>
                          <div class="col-lg-5 col-md-12 mb-5">
                            <div class="view overlay z-depth-1 rounded">
                              <img src="{{url('/assets/img/landingpage/pleliminary.jpg')}}" class="img-fluid">
                            </div>
                          </div>
                        </div>
                        <hr class="my-5">
                        <div class="row">
                          <div class="col-lg-5 col-md-12 mb-5">
                            <div class="view overlay z-depth-1 rounded">
                              <img src="{{url('/assets/img/landingpage/activities.jpg')}}" class="img-fluid">
                            </div>
                          </div>
                          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                            <h4 class="mb-3 grey-text"><strong>Guru</strong></h4>
                            <h3 class="mb-3"><strong>Mengelompokkan materi sesuai fase secara bertahap</strong></h3>
                            <p>Memberikan ruang bagi siswa untuk memahami materi secara bertahap sehingga siswa
                            mendapatkan alur pembelajaran yang baik dan mempercepat proses pemahaman</p>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="siswa" role="tabpanel">
                        <br>
                        <div class="row">
                          <div class="col-lg-5 col-md-12 mb-5">
                            <div class="view overlay z-depth-1 rounded">
                              <img src="{{url('/assets/img/sipejek3.jpg')}}" class="img-fluid">
                            </div>
                          </div>
                          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                            <h4 class="mb-3 grey-text"><strong>Siswa</strong></h4>
                            <h3 class="mb-3"><strong>Media pembelajaran dan penilaian yang lengkap</strong></h3>
                            <ul>
                              <li>Menyediakan forum diskusi bagi siswa untuk memudahkan pembelajaran</li>
                              <li>Siswa dapat mengakses materi pembelajaran kapan saja dan di mana saja</li>
                              <li>Projek dibagi dalam beberapa kelompok sehingga tidak menyulitkan siswa</li>
                            </ul>
                          </div>
                          </div>
                          <hr class="my-5">
                          <div>
                              <h2 class="text-center title my-5 py-4 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                                <strong>Fitur Detail</strong>
                          </div>
                          <div class="row">
                            <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                              <h4 class="mb-3 grey-text"><strong>Siswa</strong></h4>
                              <h3 class="mb-3"><strong>Dilengkapi dengan notifikasi</strong></h3>
                              <p>Siswa akan mendapatkan notifikasikasi jika guru mempublikasikan materi, tugas, atau pun quiz
                              agar pelaksanaan projek tepat pada waktunya</p>
                            </div>
                            <div class="col-lg-5 col-md-12 mb-5">
                              <div class="view overlay z-depth-1 rounded">
                                <img src="{{url('/assets/img/landingpage/notification.jpg')}}" class="img-fluid">
                              </div>
                            </div>
                          </div>
                          <hr class="my-5">
                          <div class="row">
                            <div class="col-lg-5 col-md-12 mb-5">
                              <div class="view overlay z-depth-1 rounded">
                                <img src="{{url('/assets/img/landingpage/group.jpg')}}" class="img-fluid">
                              </div>
                            </div>
                            <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                              <h4 class="mb-3 grey-text"><strong>Siswa</strong></h4>
                              <h3 class="mb-3"><strong>Mengelompokan siswa untuk mengerjakan projek</strong></h3>
                              <p>Dengan adanya kelompok, siswa akan lebih banyak berdiskusi dengan anggota kelompoknya
                              sehingga akan memudahkan pemahaman mengenai materi yang dipelajari</p>
                            </div>
                          </div>
                          <hr class="my-5">
                          <div class="row">
                            <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                              <h4 class="mb-3 grey-text"><strong>Siswa</strong></h4>
                              <h3 class="mb-3"><strong>Menyajikan tampilan yang simpel untuk menjawab soal</strong></h3>
                              <p>Dengan tampilan ini, siswa bisa fokus menjawab pertanyaan dan tidak mendapatkan gangguan.
                              Ditampilkan juga nilai setiap soal sehingga siswa dapat menggunakan strateginya masing-masing
                            untuk menjawab soal</p>                             </p>
                            </div>
                            <div class="col-lg-5 col-md-12 mb-5">
                              <div class="view overlay z-depth-1 rounded">
                                <img src="{{url('/assets/img/landingpage/quiz.jpg')}}" class="img-fluid">
                              </div>
                            </div>
                          </div>
                          <hr class="my-5">
                          <div class="row">
                            <div class="col-lg-5 col-md-12 mb-5">
                              <div class="view overlay z-depth-1 rounded">
                                <img src="{{url('/assets/img/landingpage/activities-student.jpg')}}" class="img-fluid">
                              </div>
                            </div>
                            <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
                              <h4 class="mb-3 grey-text"><strong>Siswa</strong></h4>
                              <h3 class="mb-3"><strong>Mengelompokkan materi sesuai fase secara bertahap</strong></h3>
                              <p>Memberikan ruang bagi siswa untuk memahami materi secara bertahap sehingga siswa
                              mendapatkan alur pembelajaran yang baik dan mempercepat proses pemahaman</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </section>
      </main>

      <section id="contact" class="mb-5">
        <hr class="my-5">
        <h2 class="text-center title my-5 py-4 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
          <strong>Hubungi Kami</strong>
        </h2>
        <div class="container">
            <p class="text-center black-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
              Kami siap mendengar dan melayani Anda. Serta dapatkan bantuan mengenai seluruh kendala dan permasalahan akun Anda,
              saran dan kritik anda sangat diperlukan untuk kemajuan apikasi SIPEJEK..</p>
            <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
              <div class="col-md-8 col-lg-9">
                <form method="POST" action="{{url('submitMessage')}}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="md-form">
                        <div class="md-form">
                          <input type="text" id="nama" class="form-control" name="name">
                          <label for="nama" class="">Nama Lengkap</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="md-form">
                        <div class="md-form">
                          <input type="text" id="email" class="form-control" name="email">
                          <label for="email" class="">E-mail</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="md-form">
                        <input type="text" id="subjek" class="form-control" name="subject">
                        <label for="subjek" class="">Subjek</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="md-form">
                        <textarea type="text" id="pesan" class="md-textarea form-control" rows="3" name="message"></textarea>
                        <label for="pesan">Pesan</label>
                      </div>
                    </div>
                  </div>
                  <div class="text-center text-md-left mb-5 mt-4">
                    <button class="btn btn-rounded theme text-white font-weight-bold waves-effect waves-light" type="submit">Send</button>
                  </div>
                </form>
              </div>
              <div class="col-md-4 col-lg-3">
                <ul class="text-center list-unstyled float-md-right">
                  <li>
                    <i class="fas fa-map-marker-alt fa-2x title"></i>
                    <p>Bandung, Jawa Barat, Indonesia</p>
                  </li>
                  <li>
                    <i class="fab fa-whatsapp fa-2x title"></i>
                    <p>+62 838-2194-9586</p>
                  </li>
                  <li>
                    <i class="fas fa-envelope fa-2x title"></i>
                    <p>sipejek@gmail.com</p>
                  </li>
                </ul>
              </div>
            </div>
        </div>
      </section>

      <footer class="page-footer font-small unique-color-dark">

          <div class="footer-copyright text-center py-3">
              <p><i class="far fa-copyright"></i> Copyright2020, All rights Reserved. PT Kreasi Sayah.</p>
          </div>

      </footer>
  </body>
  <script src="{{url('/assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/assets/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/assets/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/assets/fontawesome/js/all.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/assets/js/mdb.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/assets/js/landing.js')}}"></script>
  <script>
    $(document).ready(function() {
      @if(session('msg'))
          toastr["{{session('color')}}"]("{{session('msg')}}");
      @endif
      @if ($errors->any())
          @foreach ($errors->all() as $error)
              toastr['error']("{{$error}}");
          @endforeach
      @endif
    })
    
  </script>
</html>
