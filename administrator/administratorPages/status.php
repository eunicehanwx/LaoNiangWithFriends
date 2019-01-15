<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-3Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Review Status</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">
        <img src="../lib/LNWF_logo2.png" height="30px" width="30px"/> LNWF
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
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="dashboard.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown">

<!--        list of icons:     http://victor-valencia.github.io/bootstrap-iconpicker/-->

            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Login Screens:</h6>
                <a class="dropdown-item" href="login.php">Login</a>
                <a class="dropdown-item" href="register.php">Register</a>
                <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.html">404 Page</a>
                <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="status.php">
                <i class="fas fa-th-list"></i>
                <span>Review requests</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="createActivity.php">
                <i class="fab fa-wpforms"></i>
                <span>Create New Activity</span></a>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Review Requests</li>
            </ol>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Pending requests ...
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Activity Name</th>
                                <th>Client ID</th>
                                <th>Event Category</th>
                                <th>Event Description</th>
                                <th>Event Date</th>
                                <th>Event Time</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
<!--                            <tfoot>-->
<!--                            <tr>-->
<!--                                <th>Activity Name</th>-->
<!--                                <th>Client ID</th>-->
<!--                                <th>Event Category</th>-->
<!--                                <th>Event Description</th>-->
<!--                                <th>Event Date</th>-->
<!--                                <th>Event Time</th>-->
<!--                                <th>Status</th>-->
<!--                                <th></th>-->
<!--                            </tr>-->
<!--                            </tfoot>-->
                            <tbody>
<!--                                <tr>-->
<!--                                    <td>Christmas Dinner</td>-->
<!--                                    <td>eunicehanwx</td>-->
<!--                                    <td></td>-->
<!--                                    <td>Christmas dinner at common area</td>-->
<!--                                    <td>2011/04/25</td>-->
<!--                                    <td>6.30pm - late</td>-->
<!--                                </tr>-->
                                <?php
                                $query = "SELECT * FROM activity;";

                                $dave = mysqli_query($db, $query) or die(mysqli_error());
//                                $row = mysqli_fetch_assoc($dave);
//                                onclick="document.location='blank.html'"
                                while ($row = mysqli_fetch_assoc($dave)) {
                                    echo "<tr >
                                                      <td>" . $row["activity_name"] . "</td>
                                                      <td>" . $row["client_id"] . "</td>
                                                      <td>" . $row["activity_category"] . "</td>
                                                      <td>" . $row["activity_desc"] . "</td>
                                                      <td>" . $row["activity_date"] . "</td>
                                                      <td>" . $row["activity_time"] . "</td>
                                                      <td>" . $row["activity_status"] . "</td>
                                                      <td>
                                                            <!-- Button trigger modal -->
                                                            <button id=" . $row["activity_id"] . " onclick='showDetails(this);' class = \"btn btn-primary btn-lg\" data-toggle = \"modal\" data-target = \"#myModal\">
                                                                Details
                                                            </button>
                                                        </td>
                                          </tr>";

                                }
                                ?>

                            </tbody>
                        </table>

                        <!-- Modal -->
                        <div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog"
                             aria-labelledby = "myModalLabel" aria-hidden = "true">

                            <div class = "modal-dialog">
                                <div class = "modal-content">

                                    <div class = "modal-header">
                                        <h4 class = "modal-title" id = "myModalLabel">
<!--                                            This Modal title-->
                                            <span id="activity_name_title"></span>
                                        </h4>

                                        <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                                            &times;
                                        </button>
                                    </div>

                                    <div class = "modal-body">
<!--                                        <p>Activity Name: <span id="activity_name"></span></p>-->
<!--                                        <p>Category: <span id="activity_category"></span></p>-->
<!--                                        <p>Venue: </p><span id="activity_venue"></span>-->
<!--                                        <p>Date: <span id="activity_date"></span></p>-->
<!--                                        <p>Time: <span id="activity_time"></span></p>-->
<!--                                        <p>Fees: <span id="activity_fees"></span></p>-->
<!--                                        <p>Contact No.: <input type="text" id="activity_mobile_num"></span></p>-->
<!--                                        <p>Contact No.: <span id="activity_mobile_num"></span></p>-->
<!--                                        <p>Description: <textarea id="activity_desc"></textarea></p>-->

                                        <form method="post" action="status.php">
                                            <p>*Insert Activity Photo Blob here*<span id="activity_image"></span></p>

                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="text" name="activity_name" id="activity_name" class="form-control" placeholder="Activity name" required="required" autofocus="autofocus">
                                                    <label for="activity_name">Activity name</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="text" name="activity_category" id="activity_category" class="form-control" placeholder="Activity category" required="required">
                                                    <label for="activity_category">Category</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="text" name="activity_venue" id="activity_venue" class="form-control" placeholder="Activity venue" required="required">
                                                    <label for="activity_venue">Venue</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="date" name="activity_date" id="activity_date" class="form-control" placeholder="Activity date" required="required">
                                                    <label for="activity_date">Date</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="text" name="activity_time" id="activity_time" class="form-control" placeholder="Activity time" required="required">
                                                    <label for="activity_time">Time</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="text" name="activity_fees" id="activity_fees" class="form-control" placeholder="Activity fees" required="required">
                                                    <label for="activity_fees">Fees ($)</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="text" name="activity_mobile_num" id="activity_mobile_num" class="form-control" placeholder="Activity contact number" required="required">
                                                    <label for="activity_mobile_num">Contact Number</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="text" name="activity_desc" id="activity_desc" class="form-control" placeholder="Activity description" required="required">
                                                    <label for="activity_desc">Description of Activity</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class = "modal-footer">
                                        <button type = "button" class = "btn btn-default" data-dismiss = "modal">
                                            Close
                                        </button>

                                        <button type = "button" class = "btn btn-primary">
                                            Submit changes
                                        </button>
                                    </div>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->

                        </div><!-- /.modal -->
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="../vendor/chart.js/Chart.min.js"></script>
<script src="../vendor/datatables/jquery.dataTables.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="../js/demo/datatables-demo.js"></script>
<script src="../js/demo/chart-area-demo.js"></script>

</body>

</html>
<script>
    function showDetails(button) {
        var activity_id = button.id;
        //AJAX call to get activity_id details
        $.ajax({
            url: "activityDetails.php",
            method: "GET",
            data: {"activity_id": activity_id},
            success: function(response) {
                // alert(response);
                var activity = JSON.parse(response);

                // $("#activity_name_title").text(activity.activity_name);
                // $("#activity_name").text(activity.activity_name);
                // $("#activity_category").text(activity.activity_category);
                // $("#activity_venue").text(activity.activity_venue);
                // $("#activity_date").text(activity.activity_date);
                // $("#activity_time").text(activity.activity_time);
                // $("#activity_fees").text(activity.activity_fees);
                // $("#activity_mobile_num").text(activity.activity_mobile_num);
                // $("#activity_desc").text(activity.activity_desc);

                $("#activity_name_title").text(activity.activity_name);
                $("#activity_name_title").val(activity.activity_name);
                $("#activity_name").val(activity.activity_name);
                $("#activity_category").val(activity.activity_category);
                $("#activity_venue").val(activity.activity_venue);
                $("#activity_date").val(activity.activity_date);
                $("#activity_time").val(activity.activity_time);
                $("#activity_fees").val(activity.activity_fees);
                $("#activity_mobile_num").val(activity.activity_mobile_num);
                $("#activity_desc").val(activity.activity_desc);
            }

        });
    }
</script>