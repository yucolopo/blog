<?php
/**
 * Template Name: 1カラムテンプレート
 * Description: 1カラムレイアウト用のテンプレート
 */
 ?>
<?php get_header(); ?>

 <section id="content">
	 <div id="content-wrap" class="container">
 		<div id="main" class="col-md-12">
      <?php
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
          <h1><?php the_title(); ?></h1>
          <section>
            <?php the_content(); ?>
          </section>
      <?php
          endwhile;
      endif;
      ?>
 		</div>
 	</div>
 </section>

<?php get_footer(); ?>