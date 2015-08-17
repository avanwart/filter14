<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
	global $post;
	$args = array( 'posts_per_page' => 1, 'category_name' => 'deal', 'order' => 'ASC', 'orderby' => 'title' );
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) :  setup_postdata($post);
?>
<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
	$url = $thumb['0'];
?>

<section class="deal grey">
	<div class="container">
		<div class="col-sm-12 col-md-10 col-md-offset-1">
			<!-- <div class="alert alert-info text-center">
				This deal will be live for another <strong>3 days</strong>.
			</div> -->
			<div class="card">
			
				<header <?php /*style="background-image: url('<?php the_field('hero'); ?>');" */ ?>>
					<!-- <div class="overlay"></div> -->
					<div class="navbar secondary navbar-default <?php the_field('cname'); ?>">
						<div class="container-fluid">
							<div class="navbar-header">
								<a class="<?php the_field('cname'); ?> company-logo" href="#"><img src="<?php the_field('logo'); ?>"/></a>
							</div>
							<div class="navbar-collapse pull-right">
								<ul class="nav navbar-nav">
									<!-- <li class="invest">
										<a class="btn btn-primary" href="#"><i class="glyphicon glyphicon-usd"></i>Invest Now</a>
									</li> -->
									<li class="scroll"><a href="#data"><i class="glyphicon glyphicon-search"></i> View Data</a></li>
									<li class="scroll"><a href="#comments"><i class="glyphicon glyphicon-comment"></i> Ask a Question</a></li>
									<li><a href="#invest" data-toggle="modal" data-target="#invest"><i class="glyphicon glyphicon-usd"></i> Invest</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
				<section id="video" class="intro">
					<div class="container">
						<div class="row">
							<div class="col-sm-7">
								<div class="video-wrapper">
									<iframe width="640" height="360" src="https://www.youtube.com/embed/DM-pC1U9Y4k?modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-sm-5">
								<h2 class="mission">The #1 cloud-based electronic health record platform for doctors and patients</h2>
								<div class="text-center">
									<a href="#invest" class="btn btn-lg btn-primary btn-block">Invest Now <i class="glyphicon glyphicon-chevron-right"></i></a> <a href="#data" class="scroll btn btn-lg btn-default btn-block">Explore the Company <i class="glyphicon glyphicon-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="quote">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
							<blockquote>&ldquo;Practice Fusion revolutionizes our interactions with the medical community, just as Facebook did for social networking.&rdquo; <small>Peter Thiel</small></blockquote>
						</div>
					</div>
				</section>
				<section class="data" id="data">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h1>Explore the Company</h1>
							</div>
						</div>
						<div role="tabpanel" class="tabbable">
					    <!-- Nav tabs -->
					    <ul class="nav nav-tabs" role="tablist">
					        <li role="presentation" class="active">
					          <a href="#market" aria-controls="tab" role="tab" data-toggle="tab">Market Opportunity</a>
					        </li>
					        <li role="presentation" class="two">
					          <a href="#product" aria-controls="home" role="tab" data-toggle="tab">The Product</a>
					        </li>
					         <li role="presentation" class="three">
					          <a href="#kpi" aria-controls="home" role="tab" data-toggle="tab">Company Data</a>
					        </li>
					        <li role="presentation" class="three">
					          <a href="#leadership" aria-controls="tab" role="tab" data-toggle="tab">Leadership</a>
					        </li>
					    </ul>
					
					    <!-- Tab panes -->
					    <div class="tab-content">
					    	<div role="tabpanel" class="tab-pane market active" id="market">
									<div class="row">
										<div class="col-sm-6">
											<h3 class="text-center">Top Metrics</h3>
											<table class="table">
												<tbody>
													<tr>
														<td class="metric">Addressable Market</td>
														<td class="value">$72M</td>
													</tr>
													<tr>
														<td class="metric">Market Size</td>
														<td class="value">$200B</td>
													</tr>
													<tr>
														<td class="metric">Business Model</td>
														<td class="value">$10 / meal</td>
													</tr>
													<tr>
														<td class="metric"># of subscribers</td>
														<td class="value">8K</td>
													</tr>
													<tr class="last">
														<td class="metric"># of subscribers to $100M business</td>
														<td class="value">33K</td>
													</tr>
												</tbody>
											</table>
											<div class="text-center"><a href="#" class="btn btn-lg btn-default"><i class="glyphicon glyphicon-download-alt"></i>Download Financial Report</a></div>
										</div>
										<div class="col-sm-6 text-center">
											<h3>Subscriber Growth</h3>
											<div class="ct-chart ct-perfect-fourth" id="growth"></div>
											<script>
												jQuery(document).ready(function($){
													// User Growth Chart
													var chart = new Chartist.Line('#growth', {
													  labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
													  series: [
													    [1, 3, 7, 8, 5, 4, 6, 6, 7, 8, 9, 15],
													    [2,  4, 3, 7, 3, 5, 5, 6, 7.5, 10, 12, 15],
													    [5,  3, 4, 5, 6, 3, 7, 8, 9, 12, 13, 17],
													    [7,  4, 5, 6, 7, 6, 4, 5, 7, 9, 11, 12]
													  ]
													}, {
													  low: 0
													});

													// Let's put a sequence number aside so we can use it in the event callbacks
													var seq = 0,
													  delays = 80,
													  durations = 500;

													// Once the chart is fully created we reset the sequence
													chart.on('created', function() {
													  seq = 0;
													});

													// On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
													chart.on('draw', function(data) {
													  seq++;

													  if(data.type === 'line') {
													    // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
													    data.element.animate({
													      opacity: {
													        // The delay when we like to start the animation
													        begin: seq * delays + 1000,
													        // Duration of the animation
													        dur: durations,
													        // The value where the animation should start
													        from: 0,
													        // The value where it should end
													        to: 1
													      }
													    });
													  } else if(data.type === 'label' && data.axis === 'x') {
													    data.element.animate({
													      y: {
													        begin: seq * delays,
													        dur: durations,
													        from: data.y + 100,
													        to: data.y,
													        // We can specify an easing function from Chartist.Svg.Easing
													        easing: 'easeOutQuart'
													      }
													    });
													  } else if(data.type === 'label' && data.axis === 'y') {
													    data.element.animate({
													      x: {
													        begin: seq * delays,
													        dur: durations,
													        from: data.x - 100,
													        to: data.x,
													        easing: 'easeOutQuart'
													      }
													    });
													  } else if(data.type === 'point') {
													    data.element.animate({
													      x1: {
													        begin: seq * delays,
													        dur: durations,
													        from: data.x - 10,
													        to: data.x,
													        easing: 'easeOutQuart'
													      },
													      x2: {
													        begin: seq * delays,
													        dur: durations,
													        from: data.x - 10,
													        to: data.x,
													        easing: 'easeOutQuart'
													      },
													      opacity: {
													        begin: seq * delays,
													        dur: durations,
													        from: 0,
													        to: 1,
													        easing: 'easeOutQuart'
													      }
													    });
													  } else if(data.type === 'grid') {
													    // Using data.axis we get x or y which we can use to construct our animation definition objects
													    var pos1Animation = {
													      begin: seq * delays,
													      dur: durations,
													      from: data[data.axis.units.pos + '1'] - 30,
													      to: data[data.axis.units.pos + '1'],
													      easing: 'easeOutQuart'
													    };

													    var pos2Animation = {
													      begin: seq * delays,
													      dur: durations,
													      from: data[data.axis.units.pos + '2'] - 100,
													      to: data[data.axis.units.pos + '2'],
													      easing: 'easeOutQuart'
													    };

													    var animations = {};
													    animations[data.axis.units.pos + '1'] = pos1Animation;
													    animations[data.axis.units.pos + '2'] = pos2Animation;
													    animations['opacity'] = {
													      begin: seq * delays,
													      dur: durations,
													      from: 0,
													      to: 1,
													      easing: 'easeOutQuart'
													    };

													    data.element.animate(animations);
													  }
													});

													// For the sake of the example we update the chart every time it's created with a delay of 10 seconds
													chart.on('created', function() {
													  if(window.__exampleAnimateTimeout) {
													    clearTimeout(window.__exampleAnimateTimeout);
													    window.__exampleAnimateTimeout = null;
													  }
													  window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
													});
													// end of inside
												});
											</script>
										</div>
									</div>
					    	</div>
					    	<div role="tabpanel" class="tab-pane product" id="product">
									<div class="row">
										<div class="col-sm-6">
											<h3 class="text-center">Product</h3>
												<ul>
													<li><strong>70,000+</strong> <em>Pharmacies</em></li>
													<li><strong>400+</strong> <em>Laboratories</em></li>
													<li><strong>100+</strong> <em>Imaging Centers</em></li>
													<li><strong>100,000+</strong> <em>Referrals</em></li>
												</ul>
												
										</div>
										<div class="col-sm-6">
											<h3 class="text-center">Competitor Matrix</h3>
											<table class="table">
												<thead>
													<tr>
														<td>&nbsp;</td>
														<td>Company A</td>
														<td>Company B</td>
														<td>Company C</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Feature A</td>
														<td><i class="glyphicon glyphicon-ok"></i></td>
														<td><i class="glyphicon glyphicon-ok"></i></td>
														<td><i class="glyphicon glyphicon-remove"></i></td>
													</tr>
													<tr>
														<td>Feature B</td>
														<td><i class="glyphicon glyphicon-ok"></i></td>
														<td><i class="glyphicon glyphicon-remove"></i></td>
														<td><i class="glyphicon glyphicon-remove"></i></td>
													</tr>
													<tr>
														<td>Feature C</td>
														<td><i class="glyphicon glyphicon-ok"></i></td>
														<td><i class="glyphicon glyphicon-ok"></i></td>
														<td><i class="glyphicon glyphicon-remove"></i></td>
													</tr>
													<tr>
														<td>Feature D</td>
														<td><i class="glyphicon glyphicon-ok"></i></td>
														<td><i class="glyphicon glyphicon-remove"></i></td>
														<td><i class="glyphicon glyphicon-ok"></i></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div> 
				        <div role="tabpanel" class="tab-pane metrics" id="kpi">
									<div class="row">
										<div class="col-sm-6">
											<h3 class="text-center">Top Metrics</h3>
											<table class="table">
												<thead>
													<tr>
														<td>Metric</td>
														<td>Value</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="metric">Annual Revenue Rate</td>
														<td class="value">$2M</td>
													</tr>
													<tr>
														<td class="metric">LTV</td>
														<td class="value">$600 / $200 (3/1)</td>
													</tr>
													<tr>
														<td class="metric">Churn</td>
														<td class="value">10% /mo.</td>
													</tr>
													<tr>
														<td class="metric">Margin</td>
														<td class="value">25% (Scale 40%)</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-sm-6">
											<h2>Yearly Revenue</h2>
											<div class="ct-chart ct-perfect-fourth" id="revenueChart"></div>
											<script>
												jQuery(document).ready(function($){
													new Chartist.Line('#revenueChart', {
													  labels: [1, 2, 3, 4, 5, 6, 7, 8],
													  series: [
													    [5, 9, 7, 8, 5, 3, 5, 4]
													  ]
													}, {
													  low: 0,
													  showArea: true
													});

												}); // end doc ready
											</script>
										</div>
									</div>
								</div> 
								<div role="tabpanel" class="leadership tab-pane fade" id="leadership">
									<!-- <div class="row">
										<div class="col-sm-12 text-center">
											<h3>Leadership Team</h3>
										</div>
									</div> -->
									<div class="row">
										<div class="col-sm-12 text-center">
											<h3>Leadership Team</h3>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4 leader">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/ryan-howard.jpg" class="img-thumbnail" alt="">
											<h4>Ryan Howard <small>Founder, CEO</small> </h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum fuga quaerat, quod numquam accusantium, facere cupiditate dolore cumque ab natus voluptatem sequi perferendis qui.</p>
											<p class="linkedin">
											<a class="btn btn-default" href="https://www.linkedin.com/in/sedmondson" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> Ryan Howard on LinkedIn</a></p>
										</div>
										<div class="col-sm-4 leader">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/matt-douglass.jpg" class="img-thumbnail" alt="">
											<h4>Matthew Douglas <small>Co-founder, Vice President</small> </h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis obcaecati ut animi minus nihil, optio repudiandae magnam numquam similique magni consectetur laborum sit quia.</p>
											<p class="linkedin">
											<a class="btn btn-default" href="https://www.linkedin.com/in/sedmondson" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> Matthew Douglass on LinkedIn</a></p>
										</div>
										<div class="col-sm-4 leader">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/jonathan-malek.jpg" class="img-thumbnail" alt="">
											<h4>Jonathan Malek <small>Co-founder, CTO</small> </h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aut saepe veritatis eligendi ducimus quod temporibus cupiditate nulla dicta quidem, impedit earum placeat</p>
											<p class="linkedin">
											<a class="btn btn-default" href="https://www.linkedin.com/in/sedmondson" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> Jonathan Malek on LinkedIn</a></p>
										</div>
										<!-- <div class="col-sm-3">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/todd-martin.jpg" class="img-thumbnail" alt="">
											<h4>Todd Martin <small>Chief Business Officer</small> </h4>
										</div> -->
									</div> 
								</div>
						  </div>
						</div>
					</div>
				</section><!-- end of data section -->
				<div class="row" id="comments">
					<div class="inner comments">
						<div class="col-sm-12">
							<h1 class="text-center">Any Questions?</h1>
							<?php comments_template(); ?> 
						</div>
					</div><!-- end of disqus -->
				</div><!-- end of inner -->
			</div><!-- inner -->
		</div>
	</div>
</section>
<!-- Close the loop -->
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>

<?php endwhile; endif; ?>
<script src="<?php bloginfo('template_directory'); ?>/library/js/app.min.js"></script>
<script>
jQuery(document).ready(function($){
	$('.nav-tabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	  setTimeout(function(){
			// begin chart code

			// Revenue chart
			new Chartist.Line('#revenueChart', {
			  labels: [1, 2, 3, 4, 5, 6, 7, 8],
			  series: [
			    [1, 3, 2, 4, 5, 7, 10, 13]
			  ]
			}, {
			  low: 0,
			  showArea: true
			});

	  }, 110);
	});
});
</script>

<?php get_footer(); ?>
