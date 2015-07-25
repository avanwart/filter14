<?php 
/*
Use this page if you want to create a custom homepage for 
your site. WordPress will look for home.php before index.php. If
you end up using a custom home.php page you can also use the 
blog.php page to display your blog posts. Simply rename or delete
this page template and the latest blog posts(index.php) will be the
homepage of your website. 
*/
?>
<?php get_header(); ?>

<div id="banner" class="hero">
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
				<form action="" class="form-horizontal">
					<div class="form-group">
						<div class="col-lg-9 left">
							<input type="email" class="form-control input-lg" placeholder="Enter your email address">	
						</div>
						<div class="col-lg-3 right">
							<button type="submit" class="btn btn-lg btn-primary btn-block">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> <!-- end #banner-->
<section class="about grey" id="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<h2>Pitches Without Board Rooms</h2>
				<blockquote>It's Monday morning, but instead of heading out to pound the pavement on Sand Hill Road, this entrepreneur is getting ready to mic up and pitch you, online, through Filter14.</blockquote>
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
				<i class="chart"></i>
				<h3>Examine the Pitch</h3>
				<p>Once a deal goes live you can analyze KPIs, learn more about the company and ask questions directly on the deal page.</p>
			</div><!-- /.col-lg-4 -->
			<div class="col-sm-4 bucket">
				<i class="invest"></i>
				<h3>Invest</h3>
				<p>If you think a deal is profitable, invest. <br>You can even subscribe to invest in each deal that hits the site each month.</p>
			</div><!-- /.col-lg-4 -->
		</div> <!-- end .row-->
	</div> <!-- end .container-->
</section>
<section class="features grey">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Why Filter14?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-1 bucket">
				<div class="row">
					<div class="col-sm-4 text-right">
						<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/cube-blue-icon.png" alt="">
					</div>
					<div class="col-sm-8">
						<h3>Curated Deals</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
				</div>
			</div>
			<div class="col-md-5 bucket">
				<div class="row">
					<div class="col-sm-4 text-right">
						<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/magnify-blue-icon.png" alt="">
					</div>
					<div class="col-sm-8">
						<h3>Access to Metrics</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-1 bucket">
				<div class="row">
					<div class="col-sm-4 text-right">
						<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/gears-blue-icon.png" alt="">
					</div>
					<div class="col-sm-8">
						<h3>Live Forum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
				</div>
			</div>
			<div class="col-md-5 bucket">
				<div class="row">
					<div class="col-sm-4 text-right">
						<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/laptop-blue-icon.png" alt="">
					</div>
					<div class="col-sm-8">
						<h3>Subscriptions</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
				</div>
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
				<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, delectus dignissimos ratione debitis doloremque. <small>Ryan Adams, Yahoo</small></blockquote>
			</div>
			<div class="col-md-5 bucket">
				<img class="img-circle" src="<?php bloginfo('template_directory'); ?>/library/images/headshot.jpg" alt="">
				<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, delectus dignissimos ratione debitis doloremque. <small>Ryan Adams, Yahoo</small></blockquote>
			</div>
		</div>
	</div>
</section>
<section class="faq grey">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h1>Frequently Asked Questions</h1>
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
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center"><a href="#hero" class="btn btn-lg btn-default signup">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></a></p>
			</div>
		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function($){

		// Affix functionality
		$('.hero').bind('inview', function (event, isInView, visiblePartX, visiblePartY) {

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

	});
</script>
<?php get_footer(); ?>
