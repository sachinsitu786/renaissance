<!DOCTYPE html>
<html <?php
language_attributes();
?>>
  <head>
      <?php
if (!function_exists('has_site_icon') || !has_site_icon()):
?>
         <?php
    if (get_field("site_favicon", "options")):
?>
             <link rel="icon" type="image/png" href="<?php
        the_field("site_favicon", "options");
?>" />
          <?php
    endif;
?>
     <?php
endif;
?>

      <meta charset="<?php
bloginfo('charset');
?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        

      <title><?php bloginfo('name');?></title>
      <?php wp_head();?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body  <?php body_class();?>> 
  	<!-- site-header -->
      <div class="ran-nav">
  	
  	<!-- starting of header -->
    <?php $acurl = $_SERVER['REQUEST_URI'];?>
    <div class="container-fluid">
        <div class="ran-nav-right col-md-4 col-xs-12  col-sm-4">

           <a href="http://sachin.acropolisglobal.com/renaissance/">  <img src="<?php echo wp_get_attachment_url(get_theme_mod('header_logo_setting')); ?>" class="img-responsive" alt="logo"></a>
        </div>
        <div class="col-xs-12 toogle">
          <p class="too">&#9776;</p>
        </div>
        <div class="ran-nav-left col-md-8  col-xs-12 col-sm-8">

            <div class="ran-nav-inner">
                
                <!-- Declaring a variable which hold argument for the wp_nav-menu() register function -->
                
                <?php 
                
                $args=array(
                'theme_location' => 'primary',
                'container' => false
                );
                wp_nav_menu($args);
                ?>
              
  <!-- commenting the previous static page link with html and change to the dynamc menu of wordpress 
                <ul>
                <li <?php if($acurl == '/renaissance/') { echo ' class="active" ';} ?>>   
                  <a href="http://sachin.acropolisglobal.com/renaissance/">  About</a>
                </li>

                <li  <?php if($acurl == '/renaissance/who_we_are/') { ?> class="active" <?php } ?> >
                    <a href="http://sachin.acropolisglobal.com/renaissance/who_we_are/">  Who We Are <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                   <ul>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Why Renaissance</a></li>
                    <li><a href="#">Client Benefits</a></li>
                    <li><a href="#">Corporate Responsibility</a></li>
                   
                  </ul>
                </div>

                </li>


                <li <?php if($acurl == '/renaissance/product/') { ?> class="active" <?php } ?>  >
                   <a href="http://sachin.acropolisglobal.com/renaissance/product/">   Products <i class="fa fa-angle-down" aria-hidden="true"></i></a>

                   <div class="dropdown-content">
                   <ul>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/product/#renaissance_platfrom">Renaissance Platform Overview</a></a></li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/product/#renaissance_gpu">Economic Scenario Generator</a></li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/product/#renaissance_valuation">Valuation Module</a></li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/product/#hedging_module">Hedging Module</a></li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/product/#margining_collateral">Margining &amp; Collateral</a></li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/product/#risk_management">Risk Management Modules</a></li>
                     <li><a href="http://sachin.acropolisglobal.com/renaissance/product/#aggregator_module">GPU Aggregator</a></li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/product/#distributed">Distributed Ledger Layer</a></li>
                  </ul>
                </div>

                </li>

                <li <?php if($acurl == '/renaissance/consulting/') { ?> class="active" <?php } ?> >
                    <a href="http://sachin.acropolisglobal.com/renaissance/consulting/">  Consulting <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
                    
                <div class="dropdown-content">
                   <ul>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/consulting/#consulting_services">Consulting Services</a></li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/consulting/#our_expertise">Areas of Expertise</a></li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/consulting/#engagement">Engagement Model</a></li>
                  
                   
                  </ul>
                </div>



                </li>



                <li <?php if($acurl == '/renaissance/our-people/') { ?> class="active" <?php } ?> >
                    <a href="http://sachin.acropolisglobal.com/renaissance/our-people/">  Our People <i class="fa fa-angle-down" aria-hidden="true"></i>  </a>   
                    <div class="dropdown-content">
                   <ul>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/our-people/#our_people">Our People</a>
                       </li>
                    <li><a href="http://sachin.acropolisglobal.com/renaissance/our-people/#join_team">Join our Team</a></li>
                  </ul>
                </div>
                </li>
                <li <?php if($acurl == '/renaissance/contact-us/') { ?> class="active" <?php } ?> >
                    <a href="http://sachin.acropolisglobal.com/renaissance/contact-us/">  Contact Us</a>

                </li>
               </ul>
            </div>

-->
            </div>
        </div>
    </div>
    <!-- End of header -->
    <!-- marquee section -->
    <div class=" conatainer ran-marquee">
     <marquee>  <p id="text"><?php echo get_theme_mod('scrolling_text_setting'); ?></p></marquee>
    </div>
    
    <!-- /marquee -->
  

    
