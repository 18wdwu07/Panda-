<?php get_header(); ?>

    <h1>This is from single-post.php</h1>


    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            <div class="row">
                <div class="col-12">
                    <h2><?php the_title(); ?></h2>
                    <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                </div>
            </div>

            <div class="row">
                <?php if(has_post_thumbnail()): ?>
                    <div class="col-12 col-sm-6">
                        <?php the_post_thumbnail('medium_large', ['class'=>'img-fluid', 'alt'=>'this is the featured image']); ?>
                    </div>
                    <!-- <div class="col-12 col-sm-6"> -->
                    <?php $columnClasses = 'col-12 col-sm-6' ?>
                <?php else: ?>
                    <div class="col-12">
                    <?php $columnClasses = 'col-12' ?>
                <?php endif; ?>
                <div class="<?php echo $columnClasses; ?>">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>





                <hr>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
