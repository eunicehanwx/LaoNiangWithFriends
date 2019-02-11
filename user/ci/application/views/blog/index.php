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
          <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(). "index.php/blog/index/"; ?>"><?php echo $message; ?></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a  href="#about" ><?php echo $about; ?></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
               <a  href="<?php echo base_url(). "index.php/activity_ctl/index/"; ?>"><?php echo $activity; ?></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a  href="<?php echo base_url(). "index.php/blog/cuisines/"; ?>"><?php echo $recipe; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div class="row">
        <div class ="col-lg-12">
            <
            <img class="img-fluid" src="<?php echo base_url('assets/ui_user/img/Banner_02.png');?>" alt="">
        </div>
    </div>
      <div class="container text-center">
          <button style="height: 50px; width: 100px; font-size: x-large; color: black;"><?php echo anchor('index.php/Blog/index/english', 'English');?></button>
          <button style="height: 50px; width: 100px; font-size: x-large; color: black;"><?php echo anchor('index.php/Blog/index/simplified-chinese', '中文'); ?></button>
          <button style="height: 50px; width: 100px; font-size: x-large; color: black;"><?php echo anchor('index.php/Blog/index/tamil', 'Tamil'); ?> </button>
          <button style="height: 50px; width: 100px; font-size: x-large; color: black;"><?php echo anchor('index.php/Blog/index/malay', 'Malay'); ?> </button>
          <br/>
          <br/>
        <h1 class="text-uppercase mb-0"><?php echo $message; ?></h1>
        <hr class="star-dark">
        <h2 class="font-weight-light mb-0"><?php echo $welcome_massage; ?></h2>
      </div>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo base_url('assets/ui_user/img/portfolio/Recipe_10.png'); ?>" alt="">
                    </a>
                    <h2 class="text-center mb-5"><?php echo $recipe; ?></h2>
                </div>
                <div class="col-md-6 col-lg-6">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo base_url('assets/ui_user/img/portfolio/Activity_10.png');?>" alt="">

                    </a>
                    <h2 class="text-center mb-5"><?php echo $activity; ?></h2>
                </div>
            </div>
        </div>
    </section>

        <!--                                            This Modal title-->

    </h4>
    <!-- About Section -->
    <section class="alert-dark text-dark mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-dark mb-5"><?php echo $about; ?></h2>
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead"><?php echo $about1; ?></p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead"><?php echo $about2; ?></p>
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
                        <img class="img-fluid mb-5" src="<?php echo base_url('assets/ui_user/img/portfolio/cabin.png');?>" alt="">
                        <p class="mb-6"><span id="activity_venue"></span></p>
                        <p class="mb-6">Date:&nbsp;<span id="activity_date"></span>&nbsp;<span id="activity_time"></span></p>
                        <p class="mb-6">Price:&nbsp;<span id="activity_fees"></span></p>
                        <p class="mb-6"><span id="activity_desc"></span></p>
                        <p class="mb-6"><span id="activity_fees"></span></p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Recipes</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="<?php echo base_url('assets/ui_user/img/portfolio/cuisines.jpg');?>" alt="">
              <p class="mb-5">Interested in learning more cuisines for your dear ones? Click "View More" to learn more! </p>
                <a href="<?php echo base_url(). "index.php/blog/cuisines/"; ?>">
                <i class="fa fa-close"></i>
                View More</a>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Activities</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="<?php echo base_url('assets/ui_user/img/portfolio/activities.jpg');?>" alt="">
              <p class="mb-5">Looking for fun activities like healthy walk, family-bonding games and events? Click "View More" to have a list of available activities in your vicinity!</p>
                  <a href="<?php echo base_url(). "index.php/activity_ctl/index/"; ?>">
                    <i class="fa fa-close"></i>
                    View More</a>
            </div>
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