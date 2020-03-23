<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel='icon' href='img/fav.png' type='image/x-icon'/ >

  <title>Moris Covid 19 Tracker</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">Covid 19<sup>Mauritius</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Latest Update</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
      </div>

    </ul> 
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button> -->

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="tel" class="form-control bg-light border-0 small phone_number" placeholder="Save Your Mobile Number" aria-label="Save Your Phone Number" aria-describedby="basic-addon2" pattern="[1-9]?[0-9]{8}" maxlength="8"  title="Please enter a Valid Mobile Number" required >
              <div class="input-group-append">
                <button class="btn btn-primary save_phone" type="button" data-toggle="modal" data-target="#saveModal" onclick="getLocation()">
                  <i class="fas fa-save fa-sm">&nbsp;Save</i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong style="color: #f98989;">Here To add Mobile Number</strong> &nbsp;<i class="fas fa-save fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                  <input type="tel" class="form-control bg-light border-0 small phone_number" placeholder="Save Your Mobile Number" aria-label="Save Your Phone Number" aria-describedby="basic-addon2" pattern="[1-9]?[0-9]{8}" maxlength="8"  title="Please enter a Valid Mobile Number" required >

                    <div class="input-group-append">
                      <button class="btn btn-primary save_phone" type="button" data-toggle="modal" data-target="#saveModal" onclick="getLocation()">
                        <i class="fas fa-save fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
           <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Moris Covid 19 Tracker</span>
                <img class="img-profile rounded-circle" src="img/corona.jpg">
              </a>
              
            </li>
            <!--    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div> -->

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Last Update - Mauritius</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row" id="parent_latest">
            <div class="col-md-12 col-md-offset-5" id="loadingmessage">
              <img src="https://media.giphy.com/media/WOtODXI5hjE8o/giphy.gif" style="display: block;
              margin: 0 auto; padding-bottom: 50px; width: 6%;">
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <!-- <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div> -->

     
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            

            <div class="col-lg-4 mb-4">
              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">API - RealTime Data</h6>
                </div>
                <div class="card-body">
                  <p>coronavirus-monitor</p>
                  <p class="mb-0">
                    This API provides realtime information about the coronavirus situation in Mauritius Island.
                     We monitor various resources and grab the most relevant information for you periodically.
                      Some endpoints gets information every minute, some other one time per 10 minutes. 
                  </p>
                </div>
              </div>

            </div>
            <div class="col-lg-8 mb-6">
              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Disclosure</h6>
                </div>
                <div class="card-body">
                  <p>coronavirus-monitor</p>
                  <p class="mb-0">
                    Personal contact details like your phone number will serve the sole purpose 
                    of reaching out to you in case of local outbreak. You are therefore advised to use the 
                    check-in feature if and only if you are going out to an exact known location like pharmacies,
                    hospitals, clinics, ATMs, supermarkets and other essential service locations. 
                    Under no circumstances will your information be disclosed or misused from or by 
                    this web application. This is a non-profit website aiming to alleviate the COVID-19 propagation.

                    Your mobile contact information might be used, if in case, the Ministry of Health would need to 
                    conduct further tracking, following a nearby local outbreak.
                    By inputting your contact information, you agree to the terms and policies of this web application.
                  </p>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Moris Covid 19 Tracker</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Save your location This can save life.</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p style="color: red;">Click "Save" If you agree to share your current location and Phone number.</p>
          <br><br>
          <h5>Your Current Location : 
            <br><br>
            <p id="demo"></p>
            
            <p id="demo_lat" style="display: none;"></p>
            <p id="demo_long" style="display: none;"></p>
          </h5>
          <div id="img_load"></div>
          <br>
          
          
            <div class="row">
                <div class="col-md-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                    <form>
                        <div class="form-group row">
                        <label for="" class="col-md-4 form-control-label">Destination</label>
                        <br>
                        <div class="col-md-12">
                            <select class="form-control selectpicker" id="select-location" data-live-search="true">
                            <option data-tokens="location">Market</option>
                            <option data-tokens="ATM">ATM</option>
                            <option data-tokens="Hospital / Clinics">Hospital / Clinics</option>
                            <option data-tokens="Pharmacy">Pharmacy</option>
                            <option data-tokens="Other Essential Service">Other Essential Service</option>
                            </select>

                        </div>
                        </div>
                        <label>Comment</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                        <p id="brief" style="color: #f98989;"></p>
                    </form>
              
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container -->
        <div class="modal-footer">
          <p id="success_save" style="color: #1cc88a;"></p>
          <p id="bad_save" style="color: #f98989;"></p>
          <hr>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" id="main_save">Save</button>
         
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


  
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="js/api_request/get_latest_data.js"></script>

</body>

</html>
