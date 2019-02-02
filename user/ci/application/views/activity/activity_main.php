<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lao Niang with Friends</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/ui_user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/ui_user/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/ui_user/vendor/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/ui_user/css/freelancer.min.css'); ?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Lao Niang With Friends</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#activity">Activity</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#recipe">Recipe</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div class="row">
        <div class ="col-lg-12">
            <img class="img-fluid" src="<?php echo base_url('assets/ui_user/img/Banner_02.png');?>" alt="">
        </div>
    </div>
      <div class="container text-center">
        <h1 class="text-uppercase mb-0">Lao Niang with Friends</h1>
        <hr class="star-dark">
        <h2 class="font-weight-light mb-0">Activitys</h2>
          <br />
         <form class="text-uppercase mb-0" action="" method="post" style="font-size:20pt;">
              <select name="field" >
                  <option selected="selected" disabled="disabled" value="">Filter By</option>
                  <option value="">All</option>
                  <?php foreach($dropdownvenue as $venue) {
                      ?>
                      <option value="<?php echo $venue->activityvenue; ?>"><?php echo $venue->activityvenue;?></option>
                      <?php
                  }
                  ?>
              </select>
              <input class="btn btn-default" type="submit" name="filter" value="Go" style="font-size:20pt;">
             </form>
<!--          <div class="col-lg-6">-->
<!--              image upload form-->
<!--              --><?php //echo form_open_multipart('index.php/activity_ctl/add_image') ?>
<!--              <div class="form-group">-->
<!--                  <label>Image</label>-->
<!--                  <input type="file" class="form-control" id="userfile" name="userfile">-->
<!--              </div>-->
<!--              <input type="submit" class="btn btn-primary" value="Upload">-->
<!--              --><?php //form_close() ?>
<!---->
<!--              <a href="--><?php //echo site_url('Image/view_images') ?><!--" class="btn btn-success" style="margin-left: 20px;">View Images</a>-->
<!--          </div>-->
      </div>
    <section class="portfolio" id="portfolio">
        <div class="container">

            <?php if($this->session->flashdata('msg')): ?>
                <script>
                function myFunction() {
                    alert("--><?php //echo $this->session->flashdata('msg'); ?>//");
                }
            </script>
           <?php endif; ?>
            <div class="row">
                    <?php foreach($articles as $article) {
                        ?>
                        <div class="col-md-6 col-lg-4" >
                            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-0" onclick="showactivity(this);" id="<?php echo $article->activityid; ?>">
                                <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                    <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                        <i class="fas fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img width="350" height="240" src="<?php echo base_url() ?>assets/uploaded_image/<?php echo $article->activityimage ?>" />
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                    <script>
                        function showactivity(button) {
                            var activity_id = button.id;
                            //AJAX call to get activity_id details
                            $.ajax({
                                url: "<?php echo base_url()?>index.php/Blog/activitydetails",
                                method: "post",
                                data: {activity_id: activity_id},
                                success: function(response) {
                                    // alert(response);
                                    var activity = JSON.parse(response);

                                    $("#activity_id").text(button.id);
                                    $("#activity_name_title").text(activity[0].activityname);
                                    $("#activity_venue").text(activity[0].activityvenue);
                                    $("#activity_time").text(activity[0].activitytime);
                                    $("#activity_date").text(activity[0].activitydate);
                                    $("#activity_desc").text(activity[0].activitydesc);
                                    $("#activity_fees").text(activity[0].activitfees);
                                }

                            });
                        }
                    </script>
            </div>
        </div>
    </section>

        <!--                                            This Modal title-->

    </h4>
    <!-- About Section -->
    <section class="alert-dark text-dark mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-dark mb-5">About</h2>
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Lao Niang with Friends is a platform for You to look for nearby activities that you can sign up easily with your beloved ones!</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Not only that, you can also search for recipes that you wish to learn! There are up to 100 recipes that you can learn for different cuisines. </p>
          </div>
        </div>
      </div>
    </section>


    <div class="copyright py-4 text-center text-white bg-dark">
      <div class="container">
        <small>Copyright &copy; Lao Niang with Friends 2019</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 0 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-0">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0"><span id="activity_name_title"></span></h2>
                        <span id="activity_name_title"></span>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="<?php echo base_url() ?>assets/uploaded_image/<?php echo $article->activityimage ?>" alt="">
                        <h4 class="text-uppercase mb-4"><span id="activity_venue"></span></h4>
                        <h4 class="text-uppercase mb-4"><span id="activity_date"></span>&nbsp;<span id="activity_time"></span></h4>
                        <h4 class="text-uppercase mb-4">Price:&nbsp;$<span id="activity_fees"></span> Per Pax</h4>
                        <h4 class="text-uppercase mb-4"><span id="activity_desc"></span></p>
                        <h4 class="mb-6"><span id="activity_fees"></span></h4>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close</a>
                    </div>
<!--                    <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" >-->
<!--                        <input type="hidden" id="actid" name="actid" value="--><?php //echo $article->activityid; ?><!--" >-->
<!--                        <div class="control-group">-->
<!--                            <div class="form-group floating-label-form-group controls mb-0 pb-2">-->
<!--                                <label>Name</label>-->
<!--                                <input class="form-control" name="name" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">-->
<!--                                <p class="help-block text-danger"></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="control-group">-->
<!--                            <div class="form-group floating-label-form-group controls mb-0 pb-2">-->
<!--                                <label>Phone Number</label>-->
<!--                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">-->
<!--                                <p class="help-block text-danger"></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <br>-->
<!--                        <div class="form-group">-->
<!--                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" onclick="add_user(this)">Register</button>-->
<!--                            <br />-->
<!--                            <br />-->
<!--                            <label style="visibility:hidden" id="sus_msg"><span id="success_msg"></span></label>-->
<!--                        </div>-->
<!---->
<!--                    </form>-->
                    <script>
                        function add_user() {
                            //AJAX call to get activity_id details
                            $.ajax({
                                url: "<?php echo base_url();?>index.php/activity_ctl/register_user",
                                method: "post",
                                data: {actid: $("#actid").val(), name: $("#name").val(), phone: $("#phone").val()},
                                success: function(data) {
                                    // alert(response);
                                    document.getElementById("sus_msg").style.visibility = "visible";
                                    $("#success_msg").text(data);
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/ui_user/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ui_user/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/ui_user/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ui_user/vendor/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/ui_user/js/jqBootstrapValidation.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ui_user/js/contact_me.min.js'); ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/ui_user/js/freelancer.min.js'); ?>"></script>

  </body>

</html>