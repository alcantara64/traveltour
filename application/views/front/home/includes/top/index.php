
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $page_name?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/fonts/fi/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/css/indent.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/tuner/css/colorpicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>templates/front/tuner/css/styles.css">
  </head>
  <body>
    <!-- header page-->
    <header>
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-6 col-sm-7">
              <!-- lang select wrapper-->
              <div class="top-left-wrap font-3">
                <div class="mail-top"><a href="mailto:info@traveltourltd.com"> <i class="flaticon-suntour-email"></i>info@traveltourltd.com</a></div><span>/</span>
                <div class="tel-top"><a href="tel:(723)-700-1183"> <i class="flaticon-suntour-phone"></i>(723)-700-1183</a></div>
              </div>
              <!-- ! lang select wrapper-->
            </div>
            <div class="col-md-6 col-sm-5 text-right">
              <div class="top-right-wrap">
                <div class="top-login"><a href="#">Login</a></div>
                <div class="curr-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Currency<i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">USD</a></li>
                          <li><a href="#">EUR</a></li>
                          <li> <a href="#">GBP</a></li>
                          <li> <a href="#">AUD</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="lang-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Language <i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">English</a></li>
                          <li> <a href="#">Deutsch</a></li>
                          <li> <a href="#">Espanol</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ! site top panel-->
      <!-- Navigation panel-->
      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll"><a href="<?php echo base_url();?>" class="logo"><img src="" data-at2x="" alt='Logo'></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav">
            <ul class="clearlist">
              <!-- Item With Sub-->
              <li><a href="<?php echo base_url();?>" class="mn-has-sub active">Home </a>

              </li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="<?php echo base_url();?>/home/pages/our_travels" class="mn-has-sub">Our Travels </a>

              </li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li class="megamenu"><a href="<?php echo base_url();?>/home/pages/about_us" class="mn-has-sub">About Us</a>

              </li>
              <!-- End Item With Sub-->
              <!-- span /-->
              <!-- Item With Sub-->
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="<?php echo base_url();?>/home/pages/our_services" class="mn-has-sub">Our Services </a>
                <!-- Sub-->

                <!-- End Sub-->
              </li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item-->
              <li><a href="<?php echo base_url();?>/home/pages/join_us">Join Us</a></li>
              <li class="slash">/</li>
              <li><a href="<?php echo base_url();?>/home/pages/contact-us">Contact</a></li>
              <!-- End Item-->
              <!-- Search-->
              <li class="search"><a href="#" class="mn-has-sub">Search</a>
                <ul class="search-sub">
                  <li>
                    <div class="container">
                      <div class="mn-wrap">
                        <form method="post" class="form">
                          <div class="search-wrap">
                            <input type="text" placeholder="Where will you go next?" class="form-control search-field"><i class="flaticon-suntour-search search-icon"></i>
                          </div>
                        </form>
                      </div>
                      <div class="close-button"><span>Search</span></div>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- End Search-->
            </ul>
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
      <!-- breadcrumbs start-->
<?php if(!empty($page_name) && $page_name != 'Home||Traveltour' ){?>
      <section style="background-image:url('pic/breadcrumbs/bg-2.jpg');" class="breadcrumbs style-2 gray-90">
        <div class="container">
          <div class="text-left breadcrumbs-item"><a href="<?php echo base_url();?>">home</a><i>/</i><a href="#"><?php echo $page_name;?></a>
            <h2><span><?php echo $page_name?></h2>

          </div>

        </div>
      </section>
    <?php }?>
    </header>

    <!-- ! header page-->
