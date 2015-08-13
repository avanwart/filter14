<?php

/*
Template Name: Deal
*/

?>

<?php get_header(); ?>
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
<header>
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="<?php the_field('cname'); ?> navbar-brand" href="#"><img src="<?php the_field('logo'); ?>"/></a>
			</div>
		</div>
		<div class="navbar-collapse">
			<ul class="nav navbar-nav pull-right">
				<li class="invest">
					<a href="#">Invest Now</a>
				</li>
			</ul>
		</div>
	</div>
</header>
<section class="deal video">
	<div class="container">
		<div class="row">
			<h1>Complete Your Registration</h1>
		</div>
		<?php comments_template(); ?> 
	</div>
</section>
<!-- Close the loop -->
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>