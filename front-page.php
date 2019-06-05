<?php get_header(); ?>

<div class="row mb-5">
<?php if( have_posts() ): ?>
    <div class="col mb-5 <?php echo $contentorder; ?>">
    <div id="market">
    <h2> The oldest and most popular market in new zealand</h2>
    <p>Harbourside Market is the oldest and most popular market in Wellington. 
    A market of some sort (initially situated in the centre of Allen St and Blair St, just off Courtenay Place) has been serving customers in this area since 1920.
    In 2002 when the market began in its current position it was often referred to by several different names; Waitangi Park Market,
    Te Papa Market and Chaffers Market. The market has undergone a name change and is now known as Harbourside Market. Read more about our history. </p>
    <h2>Opening Hours</h2>
    <ul>
    <li>Open Every Sunday Morning</li>
    <li>7:30am - 1pm in Winter</li>
    <li>7:30am - 2pm in Summer</li>
    </ul>
    </div>
        <div id="postList" class="row cardList">
            <?php while( have_posts() ): the_post() ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    </div>



    <?php get_footer(); ?>