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
			<div class="alert alert-info text-center">
				This deal will be live for another <strong>3 days</strong>.
			</div>
			<div class="card">
				<header style="background-image: url('<?php the_field('hero'); ?>');">
					<div class="overlay"></div>
					<div class="navbar navbar-default <?php the_field('cname'); ?>">
						<div class="navbar-header">
							<a class="<?php the_field('cname'); ?> company-logo" href="#"><img src="<?php the_field('logo'); ?>"/></a>
						</div>
						<div class="navbar-collapse pull-right">
							<ul class="nav navbar-nav">
								<li class="invest">
									<a class="btn btn-primary" href="#"><i class="glyphicon glyphicon-usd"></i>Invest Now</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<blockquote>&ldquo;Practice Fusion revolutionizes our interactions with the medical community, just as Facebook did for social networking.&rdquo; <small>Peter Thiel</small></blockquote>
						</div>
					</div>
				</header>
				<div class="inner">
					<div class="row">
						<div class="col-sm-4">
							<h2>LTV / CAC</h2>
							<div class="ct-chart ct-perfect-fourth" id="chart1"></div>
						</div>
						<div class="col-sm-4">
							<h2>Yearly Revenue</h2>
							<div class="ct-chart ct-perfect-fourth" id="chart2"></div>
						</div>
						<div class="col-sm-4">
							<h2>Valuation</h2>
							<div class="ct-chart ct-perfect-fourth" id="chart3"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<?php comments_template(); ?> 
						</div>
					</div><!-- end of disqus -->
				</div><!-- end of inner -->
			</div><!-- end of card -->
		</div>
	</div>
</section>
<!-- Close the loop -->
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>

<?php endwhile; endif; ?>
<script src="<?php bloginfo('template_directory'); ?>/library/js/app.min.js"></script>
<script>
	// Chart 1
	new Chartist.Bar('#chart1', {
		labels: ['Q1', 'Q2', 'Q3', 'Q4'],
		series: [
			[800000, 1200000, 1400000, 1300000],
			[200000, 400000, 500000, 300000],
			[100000, 200000, 400000, 600000]
		]
	}, {
		stackBars: true,
		axisY: {
			labelInterpolationFnc: function(value) {
				return (value / 1000) + 'k';
			}
		}
	}).on('draw', function(data) {
		if(data.type === 'bar') {
			data.element.attr({
				style: 'stroke-width: 30px'
			});
		}
	});

	// Chart 2
	var data = {
		// A labels array that can contain any sort of values
		labels: ['2009', '2010', '2011', '2012', '2013', '2014', '2015'],
		// Our series array that contains series objects or in this case series data arrays
		series: [
			[0, 1, 2.2, 1.8, 3, 4, 6.9]
		]
	};

	// Create a new line chart object where as first parameter we pass in a selector
	// that is resolving to our chart container element. The Second parameter
	// is the actual data object.
	new Chartist.Line('#chart2', data);

	// Chart 3
	var data = {
		labels: ['Ads', 'Lab Integrations', 'Partnerships', 'Other'],
		series: [28, 36, 12, 20, 4]
	};

	var options = {
		labelInterpolationFnc: function(value) {
			return value[0]
		}
	};

	var responsiveOptions = [
		['screen and (min-width: 640px)', {
			chartPadding: 30,
			labelOffset: 100,
			labelDirection: 'explode',
			labelInterpolationFnc: function(value) {
				return value;
			}
		}],
		['screen and (min-width: 1024px)', {
			labelOffset: 0,
			chartPadding: 00
		}]
	];

	new Chartist.Pie('#chart3', data, options, responsiveOptions);
</script>

<?php get_footer(); ?>
