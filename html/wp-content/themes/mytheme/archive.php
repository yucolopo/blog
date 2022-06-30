<?php get_header(); ?>
<section id="content">
    <div id="content-wrap" class="container">
        <div id="main" class="col-md-9">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
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
        <div id="sidebar" class="col-md-3">
            <?php get_sidebar(); ?>
            <?php get_footer(); ?>