<?php get_header(); ?>

    <div id="container">
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            <div class="row">
                <div class="col-12">
                    <h2><?php the_title(); ?></h2>
                    <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                    <div class="content">
                    <?php the_content(); ?>
                    </div>
                    <?php
                        if(get_post_meta(get_the_ID(), 'location', true)){
                            $location = get_post_meta(get_the_ID(), 'location', true);
                        }
                    ?>
                    <?php if(isset($location)): ?>
                        <p>Posted from <?= $location; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php
            ?>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>

<?php get_footer(); ?>