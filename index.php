<!DOCTYPE html>
<html lang="en">
<!-- meow! -->

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php the_field("site_title") ?></title>

    <!-- Bootstrap CSS -->

    <link href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts -->
    <link href="<?php bloginfo('template_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet">

    <!-- Custom styles -->
    <link href="<?php bloginfo('template_directory'); ?>/css/agency.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/agency.min.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#page-top"><?php the_field("brand") ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#services"><?php the_field("menu_1") ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio"><?php the_field("menu_2") ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about"><?php the_field("menu_3") ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team"><?php the_field("menu_4") ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact"><?php the_field("menu_5") ?></a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in"><?php the_field("home_page_intro_top_text") ?></div>
          <div class="intro-heading"><?php the_field("home_page_intro_text_line_2") ?></div>
          <a class="btn btn-xl" href="<?php the_field("home_page_intro_button_link") ?>">
            <?php the_field("home_page_intro_text_button_text") ?></a>
        </div>
      </div>
    </header>

    <!-- Section 1 -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php the_field("section_1_header") ?></h2>
            <h3 class="section-subheading text-muted"><?php the_field("section_1_subheader") ?></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-rocket fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php the_field("offering_1") ?></h4>
            <p class="text-muted"><?php the_field("offering_1_description") ?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php the_field("offering_2") ?></h4>
            <p class="text-muted"><?php the_field("offering_2_description") ?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php the_field("offering_3") ?></h4>
            <p class="text-muted"><?php the_field("offering_3_description") ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2 : Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php the_field("section_2_header") ?></h2>
            <h3 class="section-subheading text-muted"><?php the_field("section_2_subheader") ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/portfolio/01-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php the_field("skill_1") ?></h4>
              <p class="text-muted"><?php the_field("skill_1_description") ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/portfolio/02-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php the_field("skill_2") ?></h4>
              <p class="text-muted"><?php the_field("skill_2_description") ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/portfolio/03-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php the_field("skill_3") ?></h4>
              <p class="text-muted"><?php the_field("skill_3_description") ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/portfolio/04-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php the_field("skill_4") ?></h4>
              <p class="text-muted"><?php the_field("skill_4_description") ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/portfolio/05-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php the_field("skill_5") ?></h4>
              <p class="text-muted"><?php the_field("skill_5_description") ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/portfolio/06-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php the_field("skill_6") ?></h4>
              <p class="text-muted"><?php the_field("skill_6_description") ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3 -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php the_field("section_3_header") ?></h2>
            <h3 class="section-subheading text-muted"><?php the_field("section_3_subheader") ?></h3>
              <div class="embed-container"><?php the_field('oembed'); ?>
              <style>
              	.embed-container {
              		position: relative;
              		padding-bottom: 56.25%;
              		height: 0;
              		overflow: hidden;
              		max-width: 100%;
              		height: auto;
              	}

              	.embed-container iframe,
              	.embed-container object,
              	.embed-container embed {
              		position: absolute;
              		top: 0;
              		left: 0;
              		width: 100%;
              		height: 100%;
              	}
              </style>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- Section 4 -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php the_field("section_4_header") ?></h2>
            <h3 class="section-subheading text-muted"><?php the_field("section_4_subheader") ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo('template_directory'); ?>/img/team/1.jpg" alt="">
              <h4><?php the_field("team_member_1") ?></h4>
              <p class="text-muted"><?php the_field("title_1") ?></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="<?php the_field("twitter_1") ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php the_field("facebook_1") ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php the_field("linkedin_1") ?>">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo('template_directory'); ?>/img/team/2.jpg" alt="">
              <h4><?php the_field("team_member_2") ?></h4>
              <p class="text-muted"><?php the_field("title_2") ?></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="<?php the_field("twitter_2") ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php the_field("facebook_2") ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php the_field("linkedin_2") ?>">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo('template_directory'); ?>/img/team/3.jpg" alt="">
              <h4><?php the_field("team_member_3") ?></h4>
              <p class="text-muted"><?php the_field("title_3") ?></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="<?php the_field("twitter_3") ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php the_field("facebook_3") ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php the_field("linkedin_3") ?>">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted"><?php the_field("section_4_description") ?></p>
          </div>
        </div>
      </div>
    </section>


    <!-- Section 5 -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php the_field("section_5_header") ?></h2>
            <h3 class="section-subheading text-muted"><?php the_field("section_5_subheader") ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button class="btn btn-xl" type="submit"><?php the_field("section_5_button_text") ?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Shannon Hargis 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="<?php the_field("twitter") ?>">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php the_field("facebook") ?>">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php the_field("linkedin") ?>">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="<?php the_field("link_1") ?>"><?php the_field("link_1_name") ?></a>
              </li>
              <li class="list-inline-item">
                <a href="<?php the_field("link_2") ?>"><?php the_field("link_2_name") ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Section 2 Grid Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2><?php the_field("modal_1_project_name") ?></h2>
                  <p class="item-intro text-muted"><?php the_field("modal_1_project_subhead") ?></p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory'); ?>/img/portfolio/01-full.jpg" alt="">
                  <p><?php the_field("modal_1_project_description") ?></p>
                  <ul class="list-inline">
                    <li><?php the_field("modal_1_date") ?></li>
                    <li><?php the_field("modal_1_client") ?></li>
                    <li><?php the_field("modal_1_category") ?></li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2><?php the_field("modal_2_project_name") ?></h2>
                  <p class="item-intro text-muted"><?php the_field("modal_2_project_subhead") ?></p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory'); ?>/img/portfolio/02-full.jpg" alt="">
                  <p><?php the_field("modal_2_project_description") ?></p>
                  <ul class="list-inline">
                    <li><?php the_field("modal_2_date") ?></li>
                    <li><?php the_field("modal_2_client") ?></li>
                    <li><?php the_field("modal_2_category") ?></li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2><?php the_field("modal_3_project_name") ?></h2>
                  <p class="item-intro text-muted"><?php the_field("modal_3_project_subhead") ?></p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory'); ?>/img/portfolio/03-full.jpg" alt="">
                  <p><?php the_field("modal_3_project_description") ?></p>
                  <ul class="list-inline">
                    <li><?php the_field("modal_3_date") ?></li>
                    <li><?php the_field("modal_3_client") ?></li>
                    <li><?php the_field("modal_3_category") ?></li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2><?php the_field("modal_4_project_name") ?></h2>
                  <p class="item-intro text-muted"><?php the_field("modal_4_project_subhead") ?></p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory'); ?>/img/portfolio/04-full.jpg" alt="">
                  <p><?php the_field("modal_4_project_description") ?></p>
                  <ul class="list-inline">
                    <li><?php the_field("modal_4_date") ?></li>
                    <li><?php the_field("modal_4_client") ?></li>
                    <li><?php the_field("modal_4_category") ?></li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2><?php the_field("modal_5_project_name") ?></h2>
                  <p class="item-intro text-muted"><?php the_field("modal_5_project_subhead") ?></p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory'); ?>/img/portfolio/05-full.jpg" alt="">
                  <p><?php the_field("modal_5_project_description") ?></p>
                  <ul class="list-inline">
                    <li><?php the_field("modal_5_date") ?></li>
                    <li><?php the_field("modal_5_client") ?></li>
                    <li><?php the_field("modal_5_category") ?></li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2><?php the_field("modal_6_project_name") ?></h2>
                  <p class="item-intro text-muted"><?php the_field("modal_6_project_subhead") ?></p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory'); ?>/img/portfolio/05-full.jpg" alt="">
                  <p><?php the_field("modal_6_project_description") ?></p>
                  <ul class="list-inline">
                    <li><?php the_field("modal_6_date") ?></li>
                    <li><?php the_field("modal_6_client") ?></li>
                    <li><?php the_field("modal_6_category") ?></li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/popper/popper.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php bloginfo('template_directory'); ?>/js/agency.min.js"></script>

  </body>
</html>
