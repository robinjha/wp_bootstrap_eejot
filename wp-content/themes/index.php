<?php get_header(); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../assets/img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
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

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <!-- <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
       -->
       <div class="row gutter-top-in-4">
			<div class="span3 gutter-horiz-in gutter-bottom-4">
				<form id="survey_2280" class="gutter-bottom-fixed-3" action="http://wwf.worldwildlife.org/site/Survey" method="post" name="survey_2280">
					<input id="cons_info_component" type="hidden" value="t" name="cons_info_component">
					<input id="1566_2280_2_2961_1" type="hidden" value="1126" name="1566_2280_2_2961">
					<input id="SURVEY_ID" type="hidden" value="2280" name="SURVEY_ID">
					<input id="USER_HAS_TAKEN" type="hidden" value="null" name="USER_HAS_TAKEN">
					<input id="SURVEY_IGNORE_ERRORS" type="hidden" value="TRUE" name="SURVEY_IGNORE_ERRORS">
					<input id="QUESTION_STAG_APP_ID" type="hidden" value="" name="QUESTION_STAG_APP_ID">
					<input id="QUESTION_STAG_APP_REF_ID" type="hidden" value="" name="QUESTION_STAG_APP_REF_ID">
					<input id="QUESTION_STAG_CTX_TYPE" type="hidden" value="" name="QUESTION_STAG_CTX_TYPE">
					<input id="ERRORURL" type="hidden" value="http://wwf.worldwildlife.org/site/PageServer?amp;pagename=enews_signup_form" name="ERRORURL">
					<div class="screen-reader">
					<label for="denySubmit">Spam Control Text:</label>
					<input id="denySubmit" type="text" alt="This field is used to prevent form submission by scripts." value="" name="denySubmit">
					Please leave this field empty
					</div>
					<label class="block h3 hdr-important gutter-bottom-fixed-1" for="cons_email">Email Signup</label>
					<div class="form-inline newsletter-form-inline">
						<input id="cons_email" type="text" placeholder="Your Email Address" name="cons_email">
						<button data-track-event="Homepages Show|Email Signup Submission" name="ACTION_SUBMIT_SURVEY_RESPONSE" type="submit">
						<span class="screen-reader">Submit</span>
						<i class="ico" aria-hidden="true">g</i>
						</button>
					</div>
					
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
				</form>

<?php get_footer(); ?>
