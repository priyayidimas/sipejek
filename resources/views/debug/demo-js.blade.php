@extends('t_index')
@section('title')
    Login
@endsection
@section('content')
    <!--Category content-->
    <section class="dynamic-content">
        <style>
            #dynamicContentWrapper-docsPanel {
                display: none !important;
            }
        </style>
        
        <!-- Modals section -->
        <section>
      
          <!-- Central Modal Medium Success -->
          <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-notify modal-success" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                  <p class="heading lead">Modal Success</p>
      
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                  </button>
                </div>
      
                <!--Body-->
                <div class="modal-body">
                  <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
                      ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                      enim, ab officiis totam.</p>
                  </div>
                </div>
      
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-success">Get it now
                    <i class="far fa-gem ml-1"></i>
                  </a>
                  <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!-- Central Modal Medium Success-->
      
          <!-- Full Height Modal Left Info Demo-->
          <div class="modal fade left" id="fluidModalLeftInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-left modal-notify modal-info" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                  <p class="heading lead">Modal Success</p>
      
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                  </button>
                </div>
      
                <!--Body-->
                <div class="modal-body">
                  <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
                      ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga,
                      enim, ab officiis totam.
                    </p>
                  </div>
                  <ul class="list-group z-depth-0">
                    <li class="list-group-item justify-content-between">
                      Cras justo odio
                      <span class="badge badge-info badge-pill">14</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                      Dapibus ac facilisis in
                      <span class="badge badge-info badge-pill">2</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                      Morbi leo risus
                      <span class="badge badge-info badge-pill">1</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                      Cras justo odio
                      <span class="badge badge-info badge-pill">14</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                      Dapibus ac facilisis in
                      <span class="badge badge-info badge-pill">2</span>
                    </li>
                    <li class="list-group-item justify-content-between">
                      Morbi leo risus
                      <span class="badge badge-info badge-pill">1</span>
                    </li>
                  </ul>
                </div>
      
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-info">Get it now
                    <i class="far fa-gem ml-1"></i>
                  </a>
                  <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!-- Full Height Modal Right Info Demo-->
      
          <!-- Side Modal Bottom Right Danger-->
          <div class="modal fade right" id="sideModalBRDangerDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                  <p class="heading">Modal Danger</p>
      
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                  </button>
                </div>
      
                <!--Body-->
                <div class="modal-body">
      
                  <div class="row">
                    <div class="col-3">
                      <p></p>
                      <p class="text-center">
                        <i class="fas fa-shopping-cart fa-4x"></i>
                      </p>
                    </div>
      
                    <div class="col-9">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident temporibus
                        sunt earum.</p>
                      <h2>
                        <span class="badge">v52gs1</span>
                      </h2>
                    </div>
                  </div>
                </div>
      
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-danger">Get it now
                    <i class="far fa-gem ml-1"></i>
                  </a>
                  <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!-- Side Modal Bottom Right Danger-->
      
          <!-- Side Modal Bottom Left Warning-->
          <div class="modal fade left" id="sideModalBLWarningDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-side modal-bottom-left modal-notify modal-warning" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                  <p class="heading">Modal Warning</p>
      
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                  </button>
                </div>
      
                <!--Body-->
                <div class="modal-body">
      
                  <div class="row">
                    <div class="col-3 text-center">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg"
                        alt="Michal Szymanski - founder of Material Design for Bootstrap"
                        class="img-fluid z-depth-1-half rounded-circle">
                      <div style="height: 10px"></div>
                      <p class="title mb-0">Jane</p>
                      <p class="text-muted " style="font-size: 13px">Consultant</p>
                    </div>
      
                    <div class="col-9">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident temporibus
                        sunt earum.</p>
                      <p class="card-text">
                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong>
                      </p>
                    </div>
                  </div>
      
      
                </div>
      
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-warning">Get it now
                    <i class="far fa-gem ml-1"></i>
                  </a>
                  <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!-- Side Modal Bottom Left Warning-->
      
        </section>
      
        <div class="container text-center mt-5">
      
          <section id="pickers">
      
            <!--Section heading-->
            <h3 class="h1 mb-4">Date and Time Pickers</h3>
      
            <!--Grid row-->
            <div class="row mb-5">
      
              <!--Grid column-->
              <div class="col-md-6 offset-lg-3">
      
                <div class="md-form">
                  <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
                  <label for="date-picker-example">Try me...</label>
                </div>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-6">
      
                <div class="md-form">
                  <input placeholder="Selected time" type="text" id="input_starttime" class="form-control timepicker">
                  <label for="input_starttime">Light version, 12hours</label>
                </div>
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-md-6">
      
                <div class="md-form">
                  <input placeholder="Selected time" type="text" id="input_endtime" class="form-control timepicker">
                  <label for="input_starttime">Dark version, 24hours</label>
                </div>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
          </section>
      
          <hr class="my-5">
      
          <section id="notification">
      
            <!--Section heading-->
            <h3 class="mb-5 h1 mt-0">Notification</h3>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-12">
      
                <!--Info message-->
                <a class="btn btn-info" onclick="toastr.info('Hi! I am info message.');">Info message</a>
                <!--Warning message-->
                <a class="btn btn-warning" onclick="toastr.warning('Hi! I am warning message.');">Warning message</a>
                <!--Success message-->
                <a class="btn btn-success" onclick="toastr.success('Hi! I am success message.');">Success message</a>
                <!--Error message-->
                <a class="btn btn-danger" onclick="toastr.error('Hi! I am error message.');">Error message</a>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
          </section>
      
          <hr class="my-5">
      
          <section id="tooltip">
      
            <h3 class="mb-5 h1 mt-0">Tooltips</h3>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-12">
      
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                  title="Tooltip on top">
                  Tooltip on top
                </button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right"
                  title="Tooltip on right">
                  Tooltip on right
                </button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"
                  title="Tooltip on bottom">
                  Tooltip on bottom
                </button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left"
                  title="Tooltip on left">
                  Tooltip on left
                </button>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
          </section>
      
          <hr class="my-5">
      
          <section id="popover">
      
            <!--Section heading-->
            <h3 class="mb-5 h1 mt-0">Popovers</h3>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-12">
      
      
                <button type="button" class="btn btn-indigo" data-container="body" data-toggle="popover" data-placement="top"
                  data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on top
                </button>
      
                <button type="button" class="btn btn-indigo" data-container="body" data-toggle="popover"
                  data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on right
                </button>
      
                <button type="button" class="btn btn-indigo" data-container="body" data-toggle="popover"
                  data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on bottom
                </button>
      
                <button type="button" class="btn btn-indigo" data-container="body" data-toggle="popover" data-placement="left"
                  data-title="Popover title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on left
                </button>
      
                <a tabindex="0" class="btn btn-danger popover-dismiss" role="button" data-toggle="popover"
                  data-placement="bottom" data-trigger="focus" title="Dismissible popover"
                  data-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                  popover</a>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
          </section>
      
          <hr class="my-5">
      
          <section id="dropdown">
      
            <!--Section heading-->
            <h3 class="mb-5 h1 mt-0">Dropdown and Select</h3>
      
            <h5 class="pb-4 mb-4">Dropdown</h5>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-4">
      
                <!--Dropdown primary-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown primary </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-primary">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown primary-->
      
                <!--Dropdown secondary-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown secondary </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-secondary">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown secondary-->
      
                <!--Dropdown default-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown default </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-default">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown default-->
      
              </div>
      
              <!--Grid column-->
              <div class="col-md-4">
      
                <!--Dropdown warning-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-ins dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown mdb </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-ins">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown warning-->
      
                <!--Dropdown danger-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown info </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-info">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown danger-->
      
                <!--Dropdown info-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown warning </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-warning">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown info-->
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-md-4">
      
                <!--Dropdown mdb-color-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown danger </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-danger">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown mdb-color-->
      
                <!--Dropdown elegant-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-elegant dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown elegant </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-dark">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown elegant-->
      
                <!--Dropdown success-->
                <div class="dropdown">
      
                  <!--Trigger-->
                  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown success </button>
      
                  <!--Menu-->
                  <div class="dropdown-menu animated dropdown-success">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
      
                </div>
                <!--/Dropdown success-->
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <h5 class="my-5">Select</h5>
      
            <!--Grid row-->
            <div class="row text-left">
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4">
      
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label class="mdb-main-label">Basic example</label>
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">
      
                <select class="mdb-select md-form" multiple>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label class="mdb-main-label">Multiple seclect</label>
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">
      
                <select class="mdb-select md-form">
                  <optgroup label="team 1">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </optgroup>
                  <optgroup label="team 2">
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                  </optgroup>
                </select>
                <label class="mdb-main-label">Option group</label>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <!--Grid row-->
            <div class="row text-left">
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4">
      
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle">
                    example
                    1</option>
                  <option value="" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle">
                    example
                    2</option>
                  <option value="" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg" class="rounded-circle">
                    example
                    1</option>
                </select>
                <label class="mdb-main-label">Select with avatars</label>
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">
      
                <!-- Disabled select-->
                <select class="mdb-select md-form" disabled>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label class="mdb-main-label">Disabled select</label>
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">
      
                <!--Disabled option-->
                <select class="mdb-select md-form">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1" disabled>Disabled option</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label class="mdb-main-label">Disabled option</label>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <h5 class="mb-5">Color variations</h5>
      
            <!--Grid row-->
            <div class="row text-left">
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4">
      
                <!--Blue select-->
                <select class="mdb-select md-form colorful-select dropdown-primary">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Blue select</label>
                <!--/Blue select-->
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">
      
                <!--Red select-->
                <select class="mdb-select md-form colorful-select dropdown-danger">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Red select</label>
                <!--/Red select-->
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">
      
                <!--Teal select-->
                <select class="mdb-select md-form colorful-select dropdown-default">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Teal select</label>
                <!--/Teal select-->
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <!--Grid row-->
            <div class="row text-left">
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4">
      
                <!--Purple select-->
                <select class="mdb-select md-form colorful-select dropdown-secondary">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Purple select</label>
                <!--/Purple select-->
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">
      
                <!--Green select-->
                <select class="mdb-select md-form colorful-select dropdown-success">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Green select</label>
                <!--/Green select-->
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4">
      
                <!--Blue select-->
                <select class="mdb-select md-form colorful-select dropdown-info">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Light blue select</label>
                <!--/Blue select-->
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <!--Grid row-->
            <div class="row text-left">
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-md-0 mb-4">
      
                <!--Blue select-->
                <select class="mdb-select md-form colorful-select dropdown-warning">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Orange select</label>
                <!--/Blue select-->
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
      
                <!--Blue select-->
                <select class="mdb-select md-form colorful-select dropdown-ins">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Blue grey select</label>
                <!--/Blue select-->
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
      
                <!--Blue select-->
                <select class="mdb-select md-form colorful-select dropdown-dark" searchable="Search here..">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <label class="mdb-main-label">Dark select</label>
                <!--/Blue select-->
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
          </section>
      
          <hr class="my-5">
      
          <section id="collapse">
      
            <!--Section heading-->
            <h3 class="mb-5 h1 mt-0">Collapse</h3>
      
            <!--Grid row-->
            <div class="row text-left">
      
              <!--Grid column-->
              <div class="col-md-7">
      
                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordion" role="tablist">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                      <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Collapsible Group Item #1
                          <i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                      </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                      data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                        3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                        shoreditch et.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                          aria-controls="collapseTwo">
                          Collapsible Group Item #2
                          <i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                      data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                        3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea proident.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="headingThree">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                          aria-controls="collapseThree">
                          Collapsible Group Item #3
                          <i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                      data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                        3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                        shoreditch et.
                      </div>
                    </div>
                  </div>
                </div>
                <!--Accordion wrapper-->
      
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-md-5">
      
                <p>
                  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample">
                    Link with href
                  </a>
                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Button with data-target
                  </button>
                </p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                    anim keffiyeh helvetica,
                    craft beer labore wes anderson cred nesciunt sapiente ea proident.
                  </div>
                </div>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
          </section>
      
          <hr class="my-5">
      
          <section id="modals">
      
            <!--Section heading-->
            <h3 class="mb-5 h1 mt-0">Modals</h3>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-6">
      
                <!--Modal: mdb-abandonedCart-hard-->
                <div class="modal-dialog modal-notify modal-success" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading lead">Modal Success</p>
      
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                      </button>
                    </div>
      
                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                        <i class="fas fa-check fa-4x mb-1 animated rotateIn"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam
                          blanditiis ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat.
                          Esse ratione fuga, enim, ab officiis totam.</p>
                      </div>
                    </div>
      
                    <!--Footer-->
                    <div class="modal-footer justify-content-center flex-wrap">
                      <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                        data-target="#centralModalSuccess">Launch
                        Modal</button>
                      <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!--/Grid column-->
      
              <!--Grid column-->
              <div class="col-md-6">
      
                <!--Modal: mdb-abandonedCart-hard-->
                <div class="modal-dialog modal-notify modal-info" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading lead">Modal Info</p>
      
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                      </button>
                    </div>
      
                    <!--Body-->
                    <div class="modal-body">
      
                      <img src="https://mdbootstrap.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg"
                        alt="Material Design for Bootstrap mockup" class="img-fluid">
      
                      <div class="text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vero illo error eveniet
                          cum.
                        </p>
                      </div>
                    </div>
      
                    <!--Footer-->
                    <div class="modal-footer justify-content-center flex-wrap">
                      <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal"
                        data-target="#fluidModalLeftInfoDemo">Launch
                        Modal</button>
                      <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
                <!--/Modal: mdb-abandonedCart-hard-->
              </div>
              <!--/Grid column-->
            </div>
            <!--/Grid row-->
      
            <!--Grid row-->
            <div class="row">
              <!--First column-->
              <div class="col-md-6">
      
                <!--Modal: mdb-abandonedCart-hard-->
                <div class="modal-dialog modal-notify modal-danger" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading">Modal Danger</p>
      
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                      </button>
                    </div>
      
                    <!--Body-->
                    <div class="modal-body">
      
                      <div class="row">
                        <div class="col-md-12 col-3">
                          <p></p>
                          <p class="te2xt-center">
                            <i class="fas fa-shopping-cart fa-4x"></i>
                          </p>
                        </div>
      
                        <div class="col-md-12 col-9">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident
                            temporibus sunt earum.</p>
                          <h2>
                            <span class="badge">v52gs1</span>
                          </h2>
                        </div>
                      </div>
                    </div>
      
                    <!--Footer-->
                    <div class="modal-footer justify-content-center flex-wrap">
                      <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal"
                        data-target="#sideModalBRDangerDemo">Launch
                        Modal</button>
                      <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!--/Grid column-->
      
              <!--Grid column-->
              <div class="col-md-6">
      
                <!--Modal: mdb-abandonedCart-hard-->
                <div class="modal-dialog modal-notify modal-warning" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading">Modal Warning</p>
      
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                      </button>
                    </div>
      
                    <!--Body-->
                    <div class="modal-body">
      
                      <div class="row">
                        <div class="col-3 text-center">
                          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg"
                            alt="Michal Szymanski - founder of Material Design for Bootstrap"
                            class="img-fluid z-depth-1-half rounded-circle">
                          <div style="height: 10px"></div>
                          <p class="title mb-0">Jane</p>
                          <p class="text-muted " style="font-size: 13px">Consultant</p>
                        </div>
      
                        <div class="col-9">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, molestiae provident
                            temporibus sunt earum.</p>
                          <p class="card-text">
                            <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong>
                          </p>
                        </div>
                      </div>
      
      
                    </div>
      
                    <!--Footer-->
                    <div class="modal-footer justify-content-center flex-wrap">
                      <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal"
                        data-target="#sideModalBLWarningDemo">Launch
                        Modal</button>
                      <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!--/Grid column-->
            </div>
            <!--/Grid row-->
      
          </section>
      
          <hr class="my-5">
      
          <section id="charts" class="section text-center">
      
            <!--Section heading-->
            <h3 class="section-heading h1">Charts</h3>
      
            <p class="lead font-weight-bold mb-4">Simple, clean and interactive charts</p>
      
            <h5 class="mb-5">Classic charts </h5>
      
            <!-- Live preview-->
            <div class="row mb-2">
      
              <div class="col-md-4 mb-4">
      
                <canvas id="lineChart" height="145" width="290" style="width: 290px; height: 145px;"></canvas>
      
              </div>
      
              <div class="col-md-4 mb-4">
      
                <canvas id="radarChart" height="145" width="291" style="width: 291px; height: 145px;"></canvas>
      
              </div>
      
              <div class="col-md-4 mb-4">
      
                <canvas id="barChart" height="145" width="290" style="width: 290px; height: 145px;"></canvas>
      
              </div>
      
            </div>
      
            <div class="row">
      
              <div class="col-md-4 mb-4">
      
                <canvas id="polarChart" height="145" width="290" style="width: 290px; height: 145px;"></canvas>
      
              </div>
      
              <div class="col-md-4 mb-4">
      
                <canvas id="pieChart" height="145" width="291" style="width: 291px; height: 145px;"></canvas>
      
              </div>
      
              <div class="col-md-4 mb-4">
      
                <canvas id="doughnutChart" height="145" width="290" style="width: 290px; height: 145px;"></canvas>
      
              </div>
      
            </div>
            <!-- /.Live preview-->
      
            <h5 class="mt-4 mb-2">Minimalist charts </h5>
      
            <div class="row" style="justify-content: center;">
      
      
              <div class="col-md-4">
                <span class="min-chart" id="chart-sales" data-percent="56">
                  <span class="percent"></span>
                </span>
                <h5>
                  <span class="badge green">Sales
                    <i class="fas fa-arrow-circle-up"></i>
                  </span>
                </h5>
              </div>
      
              <div class="col-md-4">
                <span class="min-chart" id="chart-roi" data-percent="76">
                  <span class="percent"></span>
                </span>
                <h5>
                  <span class="badge red">ROI
                    <i class="fas fa-arrow-circle-down"></i>
                  </span>
                </h5>
              </div>
      
              <div class="col-md-4">
                <span class="min-chart" id="chart-conversion" data-percent="100">
                  <span class="percent"></span>
                </span>
                <h5>
                  <span class="badge grey">Conversion
                    <i class="fas fa-minus-square"></i>
                  </span>
                </h5>
              </div>
      
      
            </div>
      
          </section>
      
          <hr class="my-5">
      
          <section id="lightbox">
      
            <!--Section heading-->
            <h3 class="mb-5 h1 mt-0">Lightbox</h3>
      
            <div class="row">
              <div class="col-md-12">
      
                <div id="mdb-lightbox-ui"></div>
      
                <div class="mdb-lightbox">
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid">
                    </a>
                  </figure>
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" />
                    </a>
                  </figure>
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" />
                    </a>
                  </figure>
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" class="img-fluid" />
                    </a>
                  </figure>
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" />
                    </a>
                  </figure>
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" class="img-fluid" />
                    </a>
                  </figure>
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" class="img-fluid" />
                    </a>
                  </figure>
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" />
                    </a>
                  </figure>
      
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="img-fluid" />
                    </a>
                  </figure>
      
                </div>
      
              </div>
            </div>
      
          </section>
      
          <hr class="my-5">
      
          <section id="carousel">
      
            <!--Section heading-->
            <h3 class="section-heading h1 mb-5">Carousels</h3>
      
            <h5 class="pb-4 mb-4">Basic example</h5>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-12">
      
                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/img%20(141).jpg"
                        alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/img%20(145).jpg"
                        alt="Third slide">
                    </div>
                  </div>
                  <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  <!--/.Controls-->
                </div>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <h5 class="py-5">Optional captions</h5>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-12">
      
                <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                  <!--Indicators-->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                  </ol>
                  <!--/.Indicators-->
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                          alt="First slide">
                        <div class="mask rgba-black-light"></div>
                      </div>
                      <div class="carousel-caption">
                        <h3 class="h3-responsive">Light mask</h3>
                        <p>First text</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <!--Mask color-->
                      <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                          alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                      </div>
                      <div class="carousel-caption">
                        <h3 class="h3-responsive">Strong mask</h3>
                        <p>Secondary text</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <!--Mask color-->
                      <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                          alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                      </div>
                      <div class="carousel-caption">
                        <h3 class="h3-responsive">Slight mask</h3>
                        <p>Third text</p>
                      </div>
                    </div>
                  </div>
                  <!--/.Slides-->
                  <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <h5 class="pt-5 pb-4">Multi-item carousel</h5>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Carousel Wrapper-->
              <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
      
                <!--Controls-->
                <div class="controls-top">
                  <a class="btn-floating" href="#multi-item-example" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                  </a>
                  <a class="btn-floating" href="#multi-item-example" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                  </a>
                </div>
                <!--/.Controls-->
      
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                  <li data-target="#multi-item-example" data-slide-to="1"></li>
                  <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
      
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
      
                  <!--First slide-->
                  <div class="carousel-item active">
      
                    <div class="col-md-4">
                      <div class="card  mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card  mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                          alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                  </div>
                  <!--/.First slide-->
      
                  <!--Second slide-->
                  <div class="carousel-item">
      
                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                  </div>
                  <!--/.Second slide-->
      
                  <!--Third slide-->
                  <div class="carousel-item">
      
                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                          </p>
                          <a class="btn btn-primary">Button</a>
                        </div>
                      </div>
                    </div>
      
                  </div>
                  <!--/.Third slide-->
      
                </div>
                <!--/.Slides-->
      
              </div>
              <!--/.Carousel Wrapper-->
      
            </div>
            <!--Grid row-->
      
            <h5 class="pt-5 pb-4 mb-4">Thumbnails carousel</h5>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-12">
      
                <!--Carousel Wrapper-->
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg"
                        alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"
                        alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"
                        alt="Third slide">
                    </div>
                  </div>
                  <!--/.Slides-->
                  <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  <!--/.Controls-->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" class="img-fluid"
                        alt="Material Design for Bootstrap - example thumbnail">
                    </li>
                    <li data-target="#carousel-thumb" data-slide-to="1">
                      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" class="img-fluid"
                        alt="Material Design for Bootstrap - example thumbnail">
                    </li>
                    <li data-target="#carousel-thumb" data-slide-to="2">
                      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" class="img-fluid"
                        alt="Material Design for Bootstrap - example thumbnail">
                    </li>
                  </ol>
                </div>
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
            <h5 class="pt-4 mt-3 pb-5">Video carousel</h5>
      
            <!--Grid row-->
            <div class="row">
      
              <!--Grid column-->
              <div class="col-md-12 mb-2">
      
                <!--Carousel Wrapper-->
                <div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
                  <!--Indicators-->
                  <ol class="carousel-indicators">
                    <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#video-carousel-example" data-slide-to="1"></li>
                    <li data-target="#video-carousel-example" data-slide-to="2"></li>
                  </ol>
                  <!--/.Indicators-->
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <video class="video-fluid" autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                      </video>
                    </div>
                    <div class="carousel-item">
                      <video class="video-fluid" autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                      </video>
                    </div>
                    <div class="carousel-item">
                      <video class="video-fluid" autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/Agua-natural.mp4" type="video/mp4" />
                      </video>
                    </div>
                  </div>
                  <!--/.Slides-->
                  <!--Controls-->
                  <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  <!--/.Controls-->
                </div>
                <!--Carousel Wrapper-->
      
              </div>
              <!--Grid column-->
      
            </div>
            <!--Grid row-->
      
          </section>
      
          <hr class="my-5">
      
          <section id="sidenav" class="section text-center">
      
            <!--Section heading-->
            <h3 class="mb-5 h1 mt-0">SideNav</h3>
      
            <h5>On mobile</h5>
      
            <style>
              .documentation .gif-content {
                z-index: 1;
                position: relative;
                margin-top: 0px;
                width: 400px;
                padding: 60px 10px 0 10px
              }
      
              .documentation .gif-mockup {
                position: absolute;
                z-index: 10;
                width: 300px
              }
      
              .documentation .gif-wrapper {
                z-index: 8;
                background: #fff;
                padding-bottom: 30px;
              }
            </style>
      
            <div class="documentation flex-center">
              <div class="gif-wrapper">
                <img src="https://mdbootstrap.com/img/Photos/Others/sidenav3.gif" alt="Material Design for Bootstrap - mobile"
                  class="gif-content z-depth-0">
              </div>
            </div>
      
            <h5 class="py-5">SideNav variations </h5>
      
            <p class="pb-5">Click on the images below to see live preview</p>
      
            <!--Grid row-->
            <div class="row">
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/white.jpg"
                    alt="Material Design for Bootstrap white skin" class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">White Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98613"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/black.jpg"
                    alt="Material Design for Bootstrap black skin" class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">Black Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98624"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
            </div>
      
            <div class="row">
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/cyan.jpg" alt="Material Design for Bootstrap cyan skin"
                    class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">Cyan Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98648"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/mdb.jpg" alt="Material Design for Bootstrap mdb skin"
                    class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">MDB Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98644"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
            </div>
      
            <div class="row">
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/deep-purple.jpg"
                    alt="Material Design for Bootstrap deep purple skin" class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">Deep purple Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98655"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/navy-blue.jpg"
                    alt="Material Design for Bootstrap navy blue skin" class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">Navy blue Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98680"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
            </div>
      
            <div class="row">
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/pink.jpg" alt="Material Design for Bootstrap pink skin"
                    class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">Pink Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98672"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/indigo.jpg"
                    alt="Material Design for Bootstrap indigo skin" class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">Indigo Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98664"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
            </div>
      
            <div class="row">
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/light-blue.jpg"
                    alt="Material Design for Bootstrap light blue skin" class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">Light blue Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98685"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
              <div class="col-md-6 mb-5">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/screens/skins/grey.jpg" alt="Material Design for Bootstrap grey skin"
                    class="img-fluid">
      
                  <div class="mask rgba-white-slight">
                  </div>
                </div>
      
                <h3 class="h3 pt-4 mt-1 pb-3">Grey Skin</h3>
                <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98691"
                  class="btn btn-info mt-1">Live
                  preview</a>
              </div>
      
            </div>
            <!--Grid row-->
      
          </section>
      
          <hr class="mt-4">
      
          <section id="more" class="section pb-5 text-center">
      
            <!--Section heading-->
            <h3 class="font-weight-bold py-5 mb-3">...and many more</h3>
      
            <!--First row-->
            <div class="row">
      
              <!--First column-->
              <div class="col-md-6 mb-4">
      
                <!--Featured image-->
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/Others/sections.jpg" alt="Material Design for Bootstrap - sections"
                    class="img-fluid">
                  <a href="https://mdbootstrap.com/docs/jquery/sections/demo/">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
      
                <!--Excerpt-->
                <h4 class="font-weight-bold pt-4 pb-3 mt-2">Sections</h4>
                <a href="https://mdbootstrap.com/docs/jquery/sections/demo/" class="btn btn-info">Live preview</a>
      
              </div>
              <!--/First column-->
      
              <!--Second column-->
              <div class="col-md-6 mb-4">
                <!--Featured image-->
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/Others/templates.jpg" alt="Material Design for Bootstrap - templates"
                    class="img-fluid">
                  <a href="https://mdbootstrap.com/templates-2/">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
      
                <!--Excerpt-->
                <h4 class="font-weight-bold pt-4 pb-3 mt-2">Templates</h4>
                <a href="https://mdbootstrap.com/templates-2/" class="btn btn-info">Live preview</a>
      
              </div>
              <!--/Second column-->
      
              <!--Third column-->
              <div class="col-md-6 mb-4">
                <!--Featured image-->
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/Others/css.jpg" alt="Material Design for Bootstrap - CSS"
                    class="img-fluid">
                  <a href="https://mdbootstrap.com/docs/jquery/css/demo/">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
      
                <!--Excerpt-->
                <h4 class="font-weight-bold pt-4 pb-3 mt-2">CSS</h4>
                <a href="https://mdbootstrap.com/docs/jquery/css/demo/" class="btn btn-info">Live preview</a>
      
              </div>
              <!--/Third column-->
      
              <!--Fourth column-->
              <div class="col-md-6 mb-4">
                <!--Featured image-->
                <div class="view overlay z-depth-1-half">
                  <img src="https://mdbootstrap.com/img/Others/components-new.jpg"
                    alt="Material Design for Bootstrap - components" class="img-fluid">
                  <a href="https://mdbootstrap.com/docs/jquery/components/demo/">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
      
                <!--Excerpt-->
                <h4 class="font-weight-bold pt-4 pb-3 mt-2">Components</h4>
                <a href="https://mdbootstrap.com/docs/jquery/components/demo/" class="btn btn-info">Live preview</a>
      
              </div>
              <!--/Fourth column-->
      
            </div>
            <!--/First row-->
      
          </section>
      
        </div>
      
      </section>
@endsection
@section('script')
    <script>
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(el);
    </script>
    <script>
        $('.datepicker').pickadate();
      
        $('#input_starttime').pickatime({
            twelvehour: true
        });
      
        $('#input_endtime').pickatime({
            // 12 or 24 hour 
            twelvehour: false,
            // Light or Dark theme
            darktheme: true
        });
      
        // MDB Lightbox Init
        $(function() {
            $("#mdb-lightbox-ui").load("../../../mdb-addons/mdb-lightbox-ui.html");
        });
      
        new WOW().init();
      
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
      
      
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
      
        //line
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January","February","March","April","May","June","July"],
                datasets: [
                    {
                        label:"My First dataset",
                        fillColor:"rgba(220,220,220,0.2)",
                        strokeColor:"rgba(220,220,220,1)",
                        pointColor:"rgba(220,220,220,1)",
                        pointStrokeColor:"#fff",
                        pointHighlightFill:"#fff",
                        pointHighlightStroke:"rgba(220,220,220,1)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label:"My Second dataset",
                        fillColor:"rgba(151,187,205,0.2)",
                        strokeColor:"rgba(151,187,205,1)",
                        pointColor:"rgba(151,187,205,1)",
                        pointStrokeColor:"#fff",
                        pointHighlightFill:"#fff",
                        pointHighlightStroke:"rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            },
            options: {
                responsive: true
            }    
        });
      
        //radar
        var ctxR = document.getElementById("radarChart").getContext('2d');
        var myRadarChart = new Chart(ctxR, {
            type: 'radar',
            data: {
                labels: ["Eating","Drinking","Sleeping","Designing","Coding","Cycling","Running"],
                datasets: [
                    {
                        label:"My First dataset",
                        fillColor:"rgba(220,220,220,0.2)",
                        strokeColor:"rgba(220,220,220,1)",
                        pointColor:"rgba(220,220,220,1)",
                        pointStrokeColor:"#fff",
                        pointHighlightFill:"#fff",
                        pointHighlightStroke:"rgba(220,220,220,1)",
                        data: [65, 59, 90, 81, 56, 55, 40]
                    },
                    {
                        label:"My Second dataset",
                        fillColor:"rgba(151,187,205,0.2)",
                        strokeColor:"rgba(151,187,205,1)",
                        pointColor:"rgba(151,187,205,1)",
                        pointStrokeColor:"#fff",
                        pointHighlightFill:"#fff",
                        pointHighlightStroke:"rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }
                ]
            },
            options: {
                responsive: true
            }    
        });
      
        //bar
        var ctxB = document.getElementById("barChart").getContext('2d');
        var myBarChart = new Chart(ctxB, {
            type: 'bar',
            data: {
                labels: ["Red","Blue","Yellow","Green","Purple","Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            optionss: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
      
        //polar
        var ctxPA = document.getElementById("polarChart").getContext('2d');
        var myPolarChart = new Chart(ctxPA, {
            type: 'polarArea',
            data: {
                labels: ["Red","Green","Yellow","Grey","Dark Grey"],
                datasets: [
                    {
                        data: [300, 50, 100, 40, 120],
                        backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"],
                        hoverBackgroundColor: ["#FF5A5E","#5AD3D1","#FFC870","#A8B3C5","#616774"]
                    }
                ]
            },
            options: {
                responsive: true
            }    
        });
      
        //pie
        var ctxP = document.getElementById("pieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Red","Green","Yellow","Grey","Dark Grey"],
                datasets: [
                    {
                        data: [300, 50, 100, 40, 120],
                        backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"],
                        hoverBackgroundColor: ["#FF5A5E","#5AD3D1","#FFC870","#A8B3C5","#616774"]
                    }
                ]
            },
            options: {
                responsive: true
            }    
        });
      
        //doughnut
        var ctxD = document.getElementById("doughnutChart").getContext('2d');
        var myLineChart = new Chart(ctxD, {
            type: 'doughnut',
            data: {
                labels: ["Red","Green","Yellow","Grey","Dark Grey"],
                datasets: [
                    {
                        data: [300, 50, 100, 40, 120],
                        backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"],
                        hoverBackgroundColor: ["#FF5A5E","#5AD3D1","#FFC870","#A8B3C5","#616774"]
                    }
                ]
            },
            options: {
                responsive: true
            }    
        });
      
        $(function() {
            //Sales
            $('.min-chart#chart-sales').easyPieChart({
                barColor:"#4caf50",
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
      
            //ROI
            $('.min-chart#chart-roi').easyPieChart({
                barColor:"#f44336",
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
      
            //Conversion            
            $('.min-chart#chart-conversion').easyPieChart({
                barColor:"#9e9e9e",
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });                                                                                                                                                                                                                                            
    </script>
      
@endsection
