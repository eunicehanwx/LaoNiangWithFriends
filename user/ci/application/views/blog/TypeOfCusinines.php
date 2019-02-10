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
<!--            <li class="nav-item mx-0 mx-lg-1">-->
<!--              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>-->
<!--            </li>-->
<!--            <li class="nav-item mx-0 mx-lg-1">-->
<!--              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="--><?php //echo base_url(). "index.php/activity_ctl/index/"; ?><!--">Activity</a>-->
<!--            </li>-->
<!--            <li class="nav-item mx-0 mx-lg-1">-->
<!--              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="--><?php //echo base_url(). "index.php/blog/cuisines/"; ?><!--">Recipe</a>-->
<!--            </li>-->
              <li class="nav-item mx-0 mx-lg-1">
                  <a  href="#about" >About</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                  <a  href="<?php echo base_url(). "index.php/activity_ctl/index/"; ?>">Activity</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                  <a  href="<?php echo base_url(). "index.php/blog/cuisines/"; ?>">Recipe</a>
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
        <h2 class="font-weight-light mb-0">Recipes</h2>
      </div>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <?php foreach($cuisines as $cuisine) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-0" onclick="showactivity(this);" id="<?php echo $cuisine->recipeid; ?>">
                            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                    <i class="fas fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>assets/uploaded_image/<?php echo $cuisine->recipeimage ?>" />
                        </a>
                        <h4 class="text-center mb-5"><?php echo $cuisine->recipename ?></h4>
                    </div>
                    <?php
                }
                ?>
                <script>
                    function showactivity(button) {
                        var recipe_id = button.id;
                        //AJAX call to get activity_id details
                        $.ajax({
                            url: "<?=base_url()?>index.php/Cuisines/recipedetails",
                            method: "post",
                            data: {recipe_id: recipe_id},
                            success: function(response) {
                                // alert(response);
                                var recipe = JSON.parse(response);
                                var text = recipe[0].recipestep;
                                textstep = text.replace('/\r?\n/g', "\\r\\n");
                                $("#recipe_id").text(button.id);
                                $("#recipe_name_title").text(recipe[0].recipename);
                                $("#recipe_cuisine").text(recipe[0].recipecuisine);
                                $("#recipe_image").text(recipe[0].recipeimage);
                                $("#recipe_step").text(textstep);
                                $("#recipe_status").text(recipe[0].recipestatus);
                                $("#recipe_ingredient").text(recipe[0].recipeingredient);
                                $("#recipe_img").attr("src", '<?php echo base_url() ?>assets/uploaded_image/'+recipe[0].recipeimage);
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

    Portfolio Modal 0
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-0">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0"><span id="recipe_name_title"></span></h2>
                        <span id="recipe_name_title"></span>
                        <hr class="star-dark mb-5">
                    </div>
                    <div class="col-lg-5 mx-auto">
                        <img id="recipe_img" class="img-fluid mb-5" src="" alt="">
                    </div>

                    <div class="col-lg-5 mx-auto">
<!--                        <p class="mb-6"><span id="recipe_cuisine"></span></p>-->
                        <h4>Steps</h4>
                        <textarea readonly style="width:500px; height: 300px; border: none;" id="recipe_step" class="mb-6" ></textarea>
                    </div>

                    <div class="col-lg-4 mx-auto">
                        <h4>Ingredients</h4>
                        <textarea readonly style="width:500px; height: 300px; border: none;" id="recipe_ingredient" class="mb-6" ></textarea>
<!--                        <p class="mb-6"><span id="recipe_ingredient"></span></p>-->
                    </div>

                    <div class="col-lg-12 mx-auto">
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 0 -->
<!--    <div class="portfolio-modal mfp-hide" id="portfolio-modal-0">-->
<!--        <div class="portfolio-modal-dialog bg-white">-->
<!--            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">-->
<!--                <i class="fa fa-3x fa-times"></i>-->
<!--            </a>-->
<!--            <div class="container text-center">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-8 mx-auto">-->
<!--                        <h2 class="text-secondary text-uppercase mb-0"><span id="activity_name_title"></span></h2>-->
<!--                        <span id="activity_name_title"></span>-->
<!--                        <hr class="star-dark mb-5">-->
<!--                        <img id="recipe_img" class="img-fluid mb-5" src="" alt="">-->
<!--                        <h4 class="text-uppercase mb-4"><span id="activity_venue"></span></h4>-->
<!--                        <h4 class="text-uppercase mb-4"><span id="activity_date"></span>&nbsp;<span id="activity_time"></span></h4>-->
<!--                        <h4 class="text-uppercase mb-4">Price:&nbsp;$<span id="activity_fees"></span> Per Pax</h4>-->
<!--                        <h4 class="text-uppercase mb-4"><span id="activity_desc"></span></p>-->
<!--                            <h4 class="mb-6"><span id="activity_fees"></span></h4>-->
<!--                            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">-->
<!--                                <i class="fa fa-close"></i>-->
<!--                                Close</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


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