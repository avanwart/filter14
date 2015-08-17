<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section id="hero" class="hero">
	<div class="background"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Venture Capitalism. Reinvented.</h1>
				<h2>Get exclusive investor access to Silicon Valley's rising stars.</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form method="post" action="<?php bloginfo('url'); ?>/register" class="form-horizontal" id="signup">
					<div class="form-group">
						<div class="col-lg-9 left">
							<input type="email" id="email" name="email" class="required form-control input-lg" placeholder="Enter your email address" value="">	
						</div>
						<div class="col-lg-3 right">
							<button type="submit" class="btn btn-lg btn-primary btn-block">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section> <!-- end #banner-->
<section class="about grey" id="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<h2>Pitches Without Board Rooms</h2>
				<blockquote>Filter14 provides exclusive investor access to companies that exhibit enormous potential.<br>You are invited to each and every pitch, and you can invest as little or as much as you want.</blockquote>
			</div>
		</div>
	</div>
</section>
<section class="how-it-works white" id="how">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>How It Works</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 bucket">
				<i class="notification"></i>
				<h3>A Deal Goes Live</h3>
				<p>Each month, a round opens up for a company that we've identified as a rising star in the tech industry using our unique algorithms.</p>
			</div><!-- /.col-lg-4 -->
			<div class="col-sm-4 bucket">
				<i class="pitch"></i>
				<h3>Examine Metrics</h3>
				<p>Once a deal goes live you can analyze KPIs, learn more about the company, even ask the CEO questions directly.</p>
			</div><!-- /.col-lg-4 -->
			<div class="col-sm-4 bucket">
				<i class="invest"></i>
				<h3>Invest</h3>
				<p>If you think a deal is profitable, invest. <br>You can even subscribe to invest in each deal that hits the site each month.</p>
			</div><!-- /.col-lg-4 -->
		</div> <!-- end .row-->
	</div> <!-- end .container-->
</section>
<section class="features lightblue" id="why">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Why Filter14?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1 text-center">
				<div class="circle"><img class="img-responsive icon" src="<?php bloginfo('template_directory'); ?>/library/images/chair-icon.png" alt=""></div>
				<h3>Curated Deals</h3>
				<p>Our rounds are focused on top-performing companies that we think will be profitable.</p>
			</div>
			<div class="col-sm-5 text-center">
				<div class="circle"><img class="img-responsive icon" src="<?php bloginfo('template_directory'); ?>/library/images/line-chart-icon.png" alt=""></div>
				<h3>Access to Metrics</h3>
				<p>Examine the data for yourself and decide whether or not a deal could be profitable.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1 text-center">
				<div class="circle"><img class="img-responsive icon" src="<?php bloginfo('template_directory'); ?>/library/images/forum-icon.png" alt=""></div>
				<h3>Live Forum</h3>
				<p>Submit questions and inquiries directly to the CEO on each deal page.</p>
			</div>
			<div class="col-sm-5 text-center">
				<div class="circle"><img class="img-responsive icon" src="<?php bloginfo('template_directory'); ?>/library/images/gears-icon.png" alt=""></div>
				<h3>Subscriptions</h3>
				<p>Subscribe to be automatically included in every deal that hits the site.</p>
			</div>
		</div>
	</div>
</section>
<section class="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>People Are Talking</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-1 bucket">
				<img class="img-circle" src="<?php bloginfo('template_directory'); ?>/library/images/headshot.jpg" alt="">
				<blockquote>&ldquo;Every investor from Seattle to Shanghai is going to want to be a part of what Filter14 has created.&rdquo; <small>Peter Thiel</small></blockquote>
			</div>
			<div class="col-md-5 bucket">
				<img class="img-circle" src="<?php bloginfo('template_directory'); ?>/library/images/marc-andreesen.jpg" alt="">
				<blockquote>&ldquo;Filter14 has completely disrupted the venture capitalism space. I'm validating less parking now.&rdquo;<small>Marc Andreessen</small></blockquote>
			</div>
		</div>
	</div>
</section>
<section class="faq grey" id="faq">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h2>Frequently Asked Questions</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<?php if(get_field('faq')): ?>
 
					<div class="panel-group" id="accordion">

					<?php while(has_sub_field('faq')): ?>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
										<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-minus"></i>	<?php the_sub_field('question'); ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
								<div class="panel-body">
									<?php the_sub_field('answer'); ?>
								</div>
							</div>
						</div>
				
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/library/js/app.min.js"></script>
<script>
	jQuery(document).ready(function($){

		$('.hero').addClass('active');

		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		// Affix functionality
		$('#hero').bind('inview', function (event, isInView, visiblePartX, visiblePartY) {

			if (isInView) {
			  // element is now visible in the viewport
			  if (visiblePartY == 'top') {
			    $('.navbar').removeClass('dark');
			  } else if (visiblePartY == 'bottom') {
			    $('.navbar').removeClass('dark');	
			  } else {
			    // whole part of element is visible
			  }
			} else {
			  $('.navbar').addClass('dark');
			}
      // if (visible == true) {
      //   // element is now visible in the viewport
      //  $('.navbar').removeClass('dark');
          
      // } else {
      // 	// element is no longer visible in the viewport
      //   $('.navbar').addClass('dark');
      // }
    });

    $('.signup a').smoothScroll({
    	offset: -60,
    	afterScroll: function() {
				setTimeout(function(){
					$('#email').focus();
				}, 250);
			}
    });

	});
</script>
<?php get_footer(); ?>