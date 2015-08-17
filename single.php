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
									<li role="presentation" class="three">
										<a href="#kpi" aria-controls="home" role="tab" data-toggle="tab">Company Data</a>
									</li>
									<li role="presentation" class="two">
										<a href="#product" aria-controls="home" role="tab" data-toggle="tab">The Product</a>
									</li>
									<li role="presentation" class="three">
										<a href="#leadership" aria-controls="tab" role="tab" data-toggle="tab">Leadership</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in market active" id="market">
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
								<div role="tabpanel" class="tab-pane fade product" id="product">
									<h3 class="text-center">Business Partnerships</h3>
									<div class="row">
										<div class="col-sm-3"><strong>70,000+</strong> <em>Pharmacies</em></div>
										<div class="col-sm-3"><strong>400+</strong> <em>Laboratories</em></div>
										<div class="col-sm-3"><strong>100+</strong> <em>Imaging Centers</em></div>
										<div class="col-sm-3"><strong>100,000+</strong> <em>Referrals</em></div>
									</div>
									<hr>
									<h3 class="text-center">Competitor Matrix</h3>
									<div class="row">
										<div class="col-sm-12">
											<table class="table small">
												<tbody>
													<tr>
														<th></th>
														<th class="text-center">Practice Fusion</th>
														<th class="text-center">eClinicalWorks</th>
														<th class="text-center">Allscripts</th>
														<th class="text-center">NextGen</th>
													</tr>
													<tr class="top">
														<td>Overall Customer Satisfaction<sup>1</sup></td>
														<td class="text-center">No. 1</td>
														<td class="text-center">No. 16</td>
														<td class="text-center">No. 9</td>
														<td class="text-center">No. 11</td>
													</tr>
													<tr>
														<td>EHR cost per provider</td>
														<td class="text-center">Free</td>
														<td class="text-center">$375+/month</td>
														<td class="text-center">$700+/month</td>
														<td class="text-center">$599+/month</td>
													</tr>
													<tr>
														<td>Implementation fee</td>
														<td class="text-center">Free</td>
														<td class="text-center">$7,000</td>
														<td class="text-center">$3,000</td>
														<td class="text-center">One time fee of $1600/provider</td>
													</tr>
													<tr>
														<td>Contract length and termination fee</td>
														<td class="text-center">No contracts, no termination penalties</td>
														<td class="text-center">5 year contract, $7k termination penalty</td>
														<td class="text-center">5 year contract, early termination penalty</td>
														<td class="text-center">Monthly contract, no termination penalty</td>
													</tr>
													<tr>
														<td>Setup time</td>
														<td class="text-center">Get started in minutes</td>
														<td class="text-center">3+ months</td>
														<td class="text-center">1+ month</td>
														<td class="text-center">2+ months</td>
													</tr>
													<tr>
														<td>Lab and imaging integrations</td>
														<td class="text-center">Free</td>
														<td class="text-center">Additional cost per connection</td>
														<td class="text-center">Monthly fee</td>
														<td class="text-center">Monthly fee</td>
													</tr>
													<tr>
														<td>e-Prescribing</td>
														<td class="text-center">Free</td>
														<td class="text-center">Monthly fee</td>
														<td class="text-center">Monthly fee, cost to set up</td>
														<td class="text-center">Monthly fee, cost to set up</td>
													</tr>
													<tr>
														<td>Free automatic updates</td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-remove"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-remove"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-remove"></i></td>
													</tr>
													<tr>
														<td>Free support and training</td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-remove"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-remove"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-remove"></i></td>
													</tr>
													<tr>
														<td>Meaningful Use certified 2014</td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
													</tr>
													<tr>
														<td>Integrated billing</td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
														<td class="text-center"><i class="glyphicon glyphicon-ok"></i></td>
													</tr>
													<tr class="bottom">
														<td>Patient portal with secure messaging</td>
														<td class="text-center">Free</td>
														<td class="text-center">Monthly fee</td>
														<td class="text-center">Monthly fee</td>
														<td class="text-center">$1200 set up, $300 to maintain</td>
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
														<td class="metric">Valuation</td>
														<td class="value">$1B</td>
													</tr>
													<tr>
														<td class="metric">Total # of Users</td>
														<td class="value">150K</td>
													</tr>
													<tr>
														<td class="metric">CPA</td>
														<td class="value">$48</td>
													</tr>
													<tr>
														<td class="metric">Another Metric</td>
														<td class="value">$100K / mo.</td>
													</tr>
													<tr>
														<td class="metric">Profitable Stat</td>
														<td class="value">28.2%</td>
													</tr>
												</tbody>
											</table>
											<p>We work with pharmaceutical partners to market relevant media directly to the physician community inside the EHR and with health partners such as labs to bring connections to their services. As a result, independent medical practices have access to the largest cloud-based EHR in the country at zero cost.</p>
										</div>
										<div class="col-sm-6">
											<h3 class="text-center">Yearly Revenue</h3>
											<div class="ct-chart ct-perfect-fourth" id="revenueChart"></div>
											<p style="margin-left: 20px">Practice Fusion’s connects doctors, patients and data to drive better health and save lives. Founded in 2005, we pioneered a free, cloud-based model for electronic health records. Having tripled revenue and more than doubled staff in 2013, Practice Fusion is helping transform U.S. healthcare.</p>
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
								<div role="tabpanel" class="tab-pane fade leadership " id="leadership">
									<div class="row">
										<div class="col-sm-12 text-center">
											<h3>Leadership Team</h3>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4 leader">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/matt-douglass.jpg" class="img-thumbnail" alt="">
											<h4>Matthew Douglas <small>Co-founder, Vice President</small> </h4>
											<p>As Practice Fusion’s technology co-founder, Matt created the SaaS technology framework that enables rapid development of the electronic health record’s nationwide platform, now used daily by over 100,000 medical professionals.</p>
											<p class="linkedin">
												<a class="btn btn-default" href="https://www.linkedin.com/in/sedmondson" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> Matthew Douglass on LinkedIn</a>
											</p>
										</div>
										<div class="col-sm-4 leader">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/ryan-howard.jpg" class="img-thumbnail" alt="">
											<h4>Ryan Howard <small>Founder, CEO</small> </h4>
											<p>Ryan is the founder and Chairman of the Board of Practice Fusion. He founded the company in 2005 and has grown it into the largest physician-patient community in the US. Serving over 80 million patients, the platform connects doctors, pharmacies, labs, and imaging centers to solve healthcare’s biggest challenges.</p>
											<p class="linkedin">
												<a class="btn btn-default" href="https://www.linkedin.com/in/sedmondson" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> Ryan Howard on LinkedIn</a>
											</p>
										</div>
										<div class="col-sm-4 leader">
											<img src="<?php bloginfo('template_directory'); ?>/library/images/jonathan-malek.jpg" class="img-thumbnail" alt="">
											<h4>Jonathan Malek <small>Co-founder, CTO</small> </h4>
											<p>Jonathan leads Practice Fusion’s technology strategy, ensuring IT architecture remains scalable and reliable while pursuing new directions in areas such as mobile connectivity and API integration. </p>
											<p class="linkedin">
												<a class="btn btn-default" href="https://www.linkedin.com/in/sedmondson" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> Jonathan Malek on LinkedIn</a>
											</p>
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

		}, 200);
		});
	});
</script>

<?php get_footer(); ?>
