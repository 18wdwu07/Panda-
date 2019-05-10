<?php get_header(); ?>

    <h1>This is from front-page.php</h1>


    <?php if( have_posts() ): ?>
        <div class="card-deck">
        <?php while( have_posts() ): the_post() ?>
            <div class="card">




                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium', ['class'=>'card-img-top img-fluid', 'alt' =>'thumbnail image for the post']); ?>
                <?php endif; ?>








              <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <?php the_content(); ?>
                    <a class="btn btn-primary btn-block" href="<?php the_permalink(); ?>">View Post</a>
                <p class="card-text"><small class="text-muted">Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></small></p>
              </div>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
