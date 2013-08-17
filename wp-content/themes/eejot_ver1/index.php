<?php get_header(); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php bloginfo('template_url'); ?>/bootstrap/img/eejot_entrance.jpeg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Entrance to Eejot</h1>
              <p class="lead">Main door at the Eejot computer center in Sisautiya, Nepal</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/bootstrap/img/eejot_students.jpeg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Students at Eejot</h1>
              <p class="lead">Enrollment for girl students have gone up in recent months</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/bootstrap/img/eejot_syllabus.jpeg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>A Sample Syllabus</h1>
              <p class="lead"> Some of the things taught to students at Eejot</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<!--  <div class="bgpattern">-->
    <div class="container marketing">
    
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="card" data-src="holder.js/140x140" src="<?php bloginfo('template_url'); ?>/bootstrap/img/eejot_blog1.jpg"><!-- took out img-circle from class and replaced it with card-->
          <div class="piccontent">
          <strong>One of Eejot's earlier sessions showing kids a computer using kerosens lamps</strong>
          <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="card" data-src="holder.js/140x140" src="<?php bloginfo('template_url'); ?>/bootstrap/img/eejot_blog2.jpg">
          <div class="piccontent">
          <strong>Students taking classes at the newly opened Eejot center</strong>
          <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="card" data-src="holder.js/140x140" src="<?php bloginfo('template_url'); ?>/bootstrap/img/eejot_blog3.jpeg">
          <div class="piccontent">
          <strong>Rakesh Kushwaha: Eejot's computer program instructor</strong>
          <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
 <!--  </div>-->
 </div><!-- /.container -->
      <!-- START THE FEATURETTES -->

  <hr > 

      <div class="container">
       <div class="row gutter-top-in-4">
			<div id="outer" class="span3 gutter-horiz-in gutter-bottom-4">
				<form class="gutter-bottom-fixed-3" action="http://www.eejot.org/subscribe" method="post" name="">
					<label class="block h3 hdr-important gutter-bottom-fixed-1" for="cons_email">Email Signup</label>
					<div id="inner" class="form-inline newsletter-form-inline">
						<input id="cons_email" type="text" placeholder="Your Email Address" name="cons_email">
						<button data-track-event="Homepages Show|Email Signup Submission" name="ACTION_SUBMIT_SURVEY_RESPONSE" type="submit">
						<img style="border-radius:0px 5px 5px 0px;"; class="ico social-icon-reader" src="<?php bloginfo('template_url'); ?>/bootstrap/img/subscribe.jpg">
						</button>
					</div>
					</form>
					<div class="gutter-bottom-fixed-3">
						<h2 class="h3 hdr-important gutter-bottom-fixed-1">Address</h2>
						<p class="gutter-bottom-fixed-1">
							Eejot
							<br>
							Austin, TX
							<br>
							USA
						</p>
				
					</div>
				

			</div>
      </div>
 </div>
 
      <!-- /END THE FEATURETTES -->

      
<?php get_footer(); ?>
     