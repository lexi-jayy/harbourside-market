<?php get_header(); ?>

    <h1>This is from front-page.php</h1>
<div class="row mb-5">
<?php if( have_posts() ): ?>
    <div class="col <?php echo $contentorder; ?>">
        <div id="postList" class="row cardList">
            <?php while( have_posts() ): the_post() ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        </div>
        <?php
            $totalPosts = wp_count_posts('post')->publish;
            $maxToShow = get_option('posts_per_page');
         ?>
         <?php if($totalPosts > $maxToShow):  ?>
             <button id="showMore" type="button" name="button" class="btn btn-block btn-primary">Show more Posts</button>
         <?php endif; ?>
    </div>
    <?php endif; ?>
    </div>



    <?php get_footer(); ?>