<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title ><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="Robin Jha" content="">

   <!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/mystyle.css" media="screen" />

	
    
    <style>


	</style>

  <?php wp_enqueue_script("jquery"); ?>
  <?php 
  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
  * generally use this hook to add elements to <head> such
  * as styles, scripts, and meta tags.
  */
  wp_head(); ?>                                  
    </head>

  <body>


	
    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. 
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>-->
           
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <a class="logo" href="http://www.eejot.org"><img src="<?php bloginfo('template_url'); ?>/bootstrap/img/eejot_logo_600x.png" alt="Eejot"></a>
              <ul class="nav push-right">
                <li class="dropdown">
                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">ABOUT US</a>
                	<ul class="dropdown-menu">
                    	<li><a href="">About Us</a></li>
                    	<li><a href="#">Board Members</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">OUR WORK</a>
                	<ul class="dropdown-menu">
                    	<li><a href="#">Computer Literacy</a></li>
                    	<li><a href="#">Digital Library</a></li>
                    	<li><a href="#">OSS Awareness</a></li>
                    </ul>
                 </li>
                 <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">HOW TO HELP</a>
                	<ul class="dropdown-menu">
                    	<li><a href="#">Be a Volunteer</a></li>
                    	<li><a href="#">Current Volunteers</a></li>
                    	<li><a href="#">Other Donations</a></li>
                    </ul>
                 </li>
                 <li class="dropdown">
                    <a class="dropdown-toggle action action-primary" data-track-event="Homepages Show|Upper Nav Click|Donate"  href="#" data-toggle="dropdown">DONATE</a>
                	<ul class="dropdown-menu">
                    	<li><a href="#">Action</a></li>
                    	<li><a href="#">Another action</a></li>
                    </ul>
                </li>
              
               	<form id="cse-search-box" class="push-right navbar-search" action="/search">
						 <div class="input-prepend">
                            <span class="add-on"><i class="icon-search"></i></span>
                            <input class="span2" id="inputIcon" placeholder="Search" type="text">
                        </div>
					
				</form>
            
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns 
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>-->
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
