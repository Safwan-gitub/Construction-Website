<?php
include 'config.php';
$admin=new Admin();

if(isset($_GET['delete'])){
  $cust_id=$_GET['delete'];
   $stmt=$admin->cud("DELETE FROM `cont`WHERE`id`='$cust_id'","deleted");
   if($stmt)
   {
     header('location:home.php');
     $message[] = 'product has been deleted';
  }else{
     header('location:home.php');
     $message[] = 'product could not be deleted';
  };
};
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        
              </div>
            </div>
            <!--
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="ti-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="ti-close text-white"></i>
              </button>
            </div>
          </div>-->
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      
      <nav class="navbar default-layout col-lg-30 col-30 p-0 fixed-top d-flex align-items-top flex-row">
      <!--  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
--> 
          </div> 
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Hello, <span class="text-black fw-bold">A.S CONTRACTOR</span></h1>
              <h3 class="welcome-sub-text">Your Update </h3>
            </li>
          </ul>
      
          

          <ul class="navbar-nav ms-auto">
           <li class="nav-item d-none d-lg-block">
              <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                  <span class="icon-calendar input-group-text calendar-icon"></span>
                </span>
                <input type="text" class="form-control">
              </div>
            </li>
            <li class="nav-item">
              <form class="search-form" action="#">
                <i class="icon-search"></i>
                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
              </form>
            </li>

            

            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">Safwan</p>
                  <p class="fw-light text-muted mb-0">ascontractor@gmail.com</p>
                </div>

                <a href="index.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
    
                 
                        <h4 class="card-title">All Users</h4>
                       <br>
                        <div class="table-responsive pt-2">
                          <table class="table table-bordered">
                            <thead>
                            
                              <tr>
                                  <th>SL.NO</th>
                                  <th>NAME</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Address</th>
                                  <th>City</th>
                                  <th>Zip Code</th>
                                  <th>Subject</th>
                                  <th>Message</th>
                                  <th>Delete</th>
                               
                                </tr>
                              
                            </thead>
                            <tbody>
                           
                            <?php 
                               $i=1;
                             
                               $stmt=$admin->ret("SELECT * FROM `cont` ");
                               while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                               ?>
                       <tr>
                                
                                    <td><?php echo $i++?></td>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['Phone']?></td>
                                    <td><?php echo $row['address']?></td>
                                    <td><?php echo $row['city']?></td>
                                    <td><?php echo $row['zip']?></td>
                                    <td><?php echo $row['sub']?></td>
                                    <td><?php echo $row['message']?></td>
                                    <td><a href="home.php?delete=<?php echo $row['id'];?>" class="btn btn-danger btn-rounded btn-fw" onclick="return confirm('are your sure you want to delete this?');"><i class="fas fa-trash"></i>Delete</a></td>
                                    <!-- <td><a href="home.php?delete=<?php echo $row['id'];?>" class="btn btn-success btn-rounded btn-fw" onclick="return confirm('are your sure payments get it?');"><i class="fas fa-trash"></i>Confirm</a></td> -->
                                </tr>
                               <?php } ?>
                                 
                            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>


  

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>

  
 
</html>
