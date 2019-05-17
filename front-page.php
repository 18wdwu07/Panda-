<?php get_header(); ?>

    <h1>This is from front-page.php</h1>

    <div class="row mb-5">
        <?php if( have_posts() ): ?>
            <div class="col">
                <div class="card-deck">
                <?php while( have_posts() ): the_post() ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if( is_active_sidebar('sidebar-1') ): ?>
            <div class="col-3">
                <div class="card bg-light p-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        <?php endif; ?>





    </div>






    <?php
        $args = array(
            'post_type' => 'event',
            'posts_per_page' => 2,
            'order' => 'ASC',
            'orderby' => 'date'
        );
        $allEvents = new WP_Query($args);
     ?>
     <?php if( $allEvents->have_posts() ): ?>
         <div class="row mb-5">
             <div class="col-12">
                 <h2>Next two events</h2>
             </div>
             <?php while( $allEvents->have_posts() ): $allEvents->the_post(); ?>
                 <div class="col">
                     <div class="card">
                         <div class="card-body">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <div class="">
                                <?php the_excerpt(); ?>
                            </div>
                            <a class="btn btn-info btn-block" href="<?php the_permalink(); ?>">View Event</a>
                         </div>
                     </div>
                 </div>
             <?php endwhile; ?>
         </div>
     <?php endif; ?>


     <?php
         $args = array(
             'post_type' => 'staff',
             'posts_per_page' => -1,
             'order' => 'ASC',
             'orderby' => 'title'
         );
         $allStaff = new WP_Query($args);
      ?>

      <?php if( $allStaff->have_posts() ): ?>
          <div class="row mb-5">
              <div class="col-12">
                  <h2>All out Staff</h2>
              </div>
              <?php while( $allStaff->have_posts() ): $allStaff->the_post(); ?>
                  <div class="col-3">
                      <div class="card">
                          <div class="card-body">
                              <?php if(has_post_thumbnail()): ?>
                                  <?php the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt' =>'thumbnail image for the post']); ?>
                              <?php endif; ?>
                             <h3 class="card-title"><?php the_title(); ?></h3>
                             <a class="btn btn-warning btn-block" href="<?php the_permalink(); ?>">View Staff Memeber</a>
                          </div>
                      </div>
                  </div>
              <?php endwhile; ?>
          </div>
      <?php endif; ?>


<?php get_footer(); ?>
