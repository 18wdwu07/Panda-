<?php get_header(); ?>

    <h1>This is from front-page.php</h1>


    <?php if( have_posts() ): ?>
        <div class="card-deck">
        <?php while( have_posts() ): the_post() ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
