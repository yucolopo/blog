<?php get_header(); ?>
<section id="main ">
	<div class="container">
		<div class="row">
			<div class="col-md-9 border-dark">
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
				?>
						<img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="">
						<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
						<section>
							<p>作成日時：<?php the_time('Y年n月j日'); ?></p>
							<a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
						</section>
						<hr>
				<?php
					endwhile;
				endif;
				?>
			</div>
			<div class="col-md-3">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>