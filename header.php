<!DOCTYPE html>
<html lang="<?php language_attributes( );?>">

<head>
  <meta charset="<?php bloginfo( 'charset' );?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php wp_title();?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
<?php wp_head();?>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <div class="text-light"><span>
        <!-- logo goes here-->
        <?php
       function mytheme_custom_logo() {
        // Try to retrieve the Custom Logo
        $output = '';
        if (function_exists('get_custom_logo'))
            $output = get_custom_logo();
    
        // Nothing in the output: Custom Logo is not supported, or there is no selected logo
        // In both cases we display the site's name
        if (empty($output))
            $output = '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
    
        echo $output;
    }
       mytheme_custom_logo();
    
        ?>
        
        
        
        </span></div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <!-- <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul> -->
       <?php wp_nav_menu( array( 
           'theme_location' => 'header-menu',
           'container' =>'',
           
           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
       
       
       ) );?>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

           <!--php loop-->
           <?php
                $args = array( 
                    'post_type' => 'slider',
                     'posts_per_page' => 5
                     );
                $loop = new WP_Query( $args );
                $count=1;
                while ( $loop->have_posts() ) {
                $loop->the_post();
                $image_title=get_field('slider-title');
                $image_description=get_field('slider-description');
                $image=get_field('slider-image');  
                     
                ?>      
          <!-- Slide <?php echo $count ?> -->
          <div class="carousel-item <?php if ($count==1) echo 'active' ?>" style="background-image: url('<?php echo ($image['url']) ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown"><?php echo esc_html($image_title) ?></h2>
                <p class="animated fadeInUp"><?php echo esc_html($image_description) ?></p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>


          <?php
            $count++;
                }
               
                wp_reset_query();
         ?>


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->