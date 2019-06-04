<?php get_header(); ?>

<div class="row mb-5">
<?php if( have_posts() ): ?>
    <div class="col <?php echo $contentorder; ?>">
        <div id="postList" class="row cardList">
            <?php while( have_posts() ): the_post() ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    </div>



    <?php get_footer(); ?>