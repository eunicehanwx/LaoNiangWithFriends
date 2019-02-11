<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-3Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

      <!-- Bootstrap core CSS-->
      <link href="<?php echo base_url('assets/ui_admin/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

      <!-- Custom fonts for this template-->
      <link href="<?php echo base_url('assets/ui_admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

      <!-- Custom styles for this template-->
      <link href="<?php echo base_url('assets/ui_admin/css/sb-admin.css');?>" rel="stylesheet">

      <!-- Page level plugin CSS-->
      <link href="<?php echo base_url('assets/ui_admin/vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet">

  </head>

  <body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">
          <img src="<?php echo base_url('assets/ui_admin/lib/LNWF_logo2.png');?>" height="30px" width="30px"/>
      </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                     aria-describedby="basic-addon2">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                      <i class="fas fa-search"></i>
                  </button>
              </div>
          </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
          <!--        <li class="nav-item dropdown no-arrow mx-1">-->
          <!--            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"-->
          <!--               aria-haspopup="true" aria-expanded="false">-->
          <!--                <i class="fas fa-bell fa-fw"></i>-->
          <!--                <span class="badge badge-danger">9+</span>-->
          <!--            </a>-->
          <!--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">-->
          <!--                <a class="dropdown-item" href="#">Action</a>-->
          <!--                <a class="dropdown-item" href="#">Another action</a>-->
          <!--                <div class="dropdown-divider"></div>-->
          <!--                <a class="dropdown-item" href="#">Something else here</a>-->
          <!--            </div>-->
          <!--        </li>-->
          <!--        <li class="nav-item dropdown no-arrow mx-1">-->
          <!--            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"-->
          <!--               aria-haspopup="true" aria-expanded="false">-->
          <!--                <i class="fas fa-envelope fa-fw"></i>-->
          <!--                <span class="badge badge-danger">7</span>-->
          <!--            </a>-->
          <!--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">-->
          <!--                <a class="dropdown-item" href="#">Action</a>-->
          <!--                <a class="dropdown-item" href="#">Another action</a>-->
          <!--                <div class="dropdown-divider"></div>-->
          <!--                <a class="dropdown-item" href="#">Something else here</a>-->
          <!--            </div>-->
          <!--        </li>-->
          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
              </div>
          </li>
      </ul>

  </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('index.php/AdminMain/dashboard')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/AdminActivity/viewActivity')?>">
                    <i class="fas fa-th-list"></i>
                    <span>Review all activity requests</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/AdminActivity/createActivity')?>">
                    <i class="fab fa-wpforms"></i>
                    <span>Create New Activity</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/AdminRecipe/viewRecipe') ?>">
                    <i class="fas fa-th-list"></i>
                    <span>Review all recipe request</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/AdminRecipe/createRecipe') ?>">
                    <i class="fab fa-wpforms"></i>
                    <span>Create New Recipe</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/AdminManageClient/viewClient')?>">
                    <i class="fas fa-handshake"></i>
                    <span>View all clients</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/AdminManageClient/createClient')?>">
                    <i class="fas fa-handshake"></i>
                    <span>Create Clients</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/AdminActivity/viewActivityCat')?>">
                    <i class="fab fa-wpforms"></i>
                    <span>Categories</span></a>
            </li>

            <!--        <li class="nav-item">-->
            <!--            <a class="nav-link" href="--><?php //echo base_url('index.php/AdminActivity/createActivityCat')?><!--">-->
            <!--                <i class="fab fa-wpforms"></i>-->
            <!--                <span>Create New Category</span></a>-->
            <!--        </li>-->
        </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Dashboard</div>
            <div class="card-body">
                <div class="table-responsive">

                    <!--              <canvas id="myAreaChart" width="100%" height="30"></canvas>-->

                    <div id="satisfactionCont" style="height: 370px; width: 100%; float: left; padding-bottom: 10px;"></div>


                    <div id="cuisineRankingCont" style="height: 370px; width: 45%; float: left;"></div>

                    <div id="categoryRankingCont" style="height: 370px; width: 45%; float: right;"></div>


                </div>
            </div>
              <div class="card-footer small text-muted">
                  Updated at
                  <?php
                  date_default_timezone_set('Asia/Singapore');
                  $date = date('d/m/Y h:i:s a', time());
                  echo $date;
                  ?>
              </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="<?php echo base_url('index.php/AdminAuth/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/ui_admin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/ui_admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/ui_admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/ui_admin/vendor/chart.js/Chart.min.js');?>"></script>
    <script src="<?php echo base_url('assets/ui_admin/vendor/datatables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/ui_admin/vendor/datatables/dataTables.bootstrap4.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/ui_admin/js/sb-admin.min.js');?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/ui_admin/js/demo/datatables-demo.js');?>"></script>
    <script src="<?php echo base_url('assets/ui_admin/js/demo/chart-area-demo.js');?>"></script>


    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/js/mdb.min.js"></script>

    <script src="/demo/dashboards/assets/tether/tether.min.js"></script>
    <?php

    $dataPointsCui = array();
    foreach($cui_rankings as $rank){
        array_push($dataPointsCui, array("y"=> $rank->count, "label"=> $rank->recipecuisine));
    }

    $dataPointsCat = array();
    foreach($cat_rankings as $rank){
        array_push($dataPointsCat, array("y"=> $rank->count, "label"=> $rank->activitycategory));
    }

    $dataPointsSatis = array();
    foreach($satisfaction as $satisfy){
        array_push($dataPointsSatis, array("y"=> $satisfy->badReview, "label"=> 'Bad Review'), array("y"=> $satisfy->goodReview, "label"=> "Good Review"));
    }
    ?>

    <script>
        window.onload = function() {

            var satisfactionChart = new CanvasJS.Chart("satisfactionCont", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Total Number of Satisfied Users",
                    fontSize: 25
                },
                data: [{
                    type: "pie",
                    startAngle: 25,
                    toolTipContent: "<b>{label}</b>: {y}%",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - {y}%",
                    dataPoints: <?php echo json_encode($dataPointsSatis, JSON_NUMERIC_CHECK); ?>
                }]
            });

            satisfactionChart.render();

            var chartCui = new CanvasJS.Chart("cuisineRankingCont", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Number of Recipes by Cuisines",
                    fontSize: 25
                },
                axisY: {
                    title: "Count of recipes"
                },
                data: [{
                    type: "column",
                    // yValueFormatString: "#,##0.## tonnes",
                    dataPoints: <?php echo json_encode($dataPointsCui, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chartCui.render();

            var chartCat = new CanvasJS.Chart("categoryRankingCont", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Number of Activities by Categories",
                    fontSize: 25
                },
                axisY: {
                    title: "Count of activities"
                },
                data: [{
                    type: "column",
                    // yValueFormatString: "#,##0.## tonnes",
                    dataPoints: <?php echo json_encode($dataPointsCat, JSON_NUMERIC_CHECK); ?>
                }]
            });

            chartCat.render();

        }


    </script>

  </body>

</html>
