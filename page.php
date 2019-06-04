
<?php get_header(); ?>
<div class="container">
<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post() ?>
        <div class="">
            <h2><?php the_title(); ?></h2>
            <div id="posted">
            <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
            </div>
            <div class="content">
                <?php the_content(); ?>
                <?php the_excerpt(); ?>
            </div>
            <hr>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>