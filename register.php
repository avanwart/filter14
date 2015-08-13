<?php

/*
Template Name: Register
*/

?>

<?php get_header(); ?>

<section class="register grey">
	<div class="container">
		<div class="row">
			<h1>Complete Your Registration</h1>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<div class="card">
					<div class="row">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
							$url = $thumb['0'];
						?>
						<div class="col-sm-6">
							<div class="art" style="background-image: url(<?=$url?>); background-size: cover; background-repeat: no-repeat; background-position: center center"></div>
						</div>
						<div class="col-sm-6">
							<form action="">
								<div class="form-group">
									<label for="">Email address</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Choose a password</label>
									<input type="password" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Phone number</label>
									<input type="tel" class="form-control">
								</div>
								<div class="form-group">
									<label for="">I am</label>
									<select name="" id="" class="form-control">
										<option value="">-- Select --</option>
										<option value="">An investor</option>
										<option value="">An entrepreneur</option>
										<option value="">Other</option>
									</select>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>