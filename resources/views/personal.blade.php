
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRIS | Dashboard</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('partials.employee.topnav')
  @include('partials.employee.sidenav')

  <div class="content-wrapper">
    <section class="content-header">

        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Personal Information</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Personal Information</li>
              </ol>
            </div>
          </div>
        </div>
     
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Jay Johnson D. Reyes</h3>

                <p class="text-muted text-center">Programmer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>User Code</b> <a class="float-right">0056</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">jjreyes055@gmail.com</a>
                  </li>
                  <li class="list-group-item">
                    <b>Birth Date</b> <a class="float-right">January 04, 1998</a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Contact Number</strong>

                <p class="text-muted">
                09164184347
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Telephone</strong>

                <p class="text-muted">N/A</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Address</strong>
                <p class="text-muted">Registered</p>
                <p class="text-muted">Local</p>

         

              </div>
       
            </div>
        
          </div>
         
          <!-- /.col -->
          <div class="col-md-9">
          <div class="invoice p-3 mb-3">

              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                General Information
                  <address>
                    <strong>Department:</strong><br>
                    IT/GRAPHICS<br>
                    <strong>Supervisor:</strong><br>
                    PALENCIA, JOHN KELVIN<br>
                    <strong>Employment Type:</strong><br>
                    Regular<br>
                    <strong>Assign Location:</strong><br>
                    ANTIPOLO<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  ---
                  <address>
                    <strong>Date Hired:</strong><br>    
                    September 28, 2019<br>
                    <strong>Team:</strong><br>   
                    N/A<br>
                    <strong>Date Regular:</strong><br>
                    N/A<br>
                    <strong>Date Separated:</strong><br>    
                    N/A<br>
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  ---
                  <address>

                    <strong>Contract Start:</strong><br>   
                    N/A<br>
                    <strong>Contract End:</strong><br>   
                    N/A<br>
                  </address>
                </div>

              </div>

              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                Salary Information
                  <address>
                    <strong>Monthly Rate:</strong><br>
                    17,000,00.00<br>
                    <strong>Daily Rate:</strong><br>
                    653.85<br>
                    <strong>Hourly Rate:</strong><br>
                    81.73<br>

                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                Approvers
                  <address>
                    <strong>Sequence No:</strong><br>    
                    1<br>
                    <strong>Approver Name:</strong><br>   
                    PALENCIA, JOHN KELVIN<br>
                  </address>
                </div>


              </div>

              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                Government Information
                  <address>
                    <strong>TIN No:</strong><br>
                    753-797-997<br>
                    <strong>PHIC No:</strong><br>
                    03-251091561-4<br>
                    <strong>SSS No:</strong><br>
                    34-8800793-6<br>
                    <strong>HDMF No:</strong><br>
                    1212-5939-8757<br>
                  </address>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('partials.employee.footer')
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../dist/js/adminlte.js"></script>
</body>
</html>
