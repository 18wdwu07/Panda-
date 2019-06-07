<?php
    if(get_post_meta(get_the_ID(), 'new_image', true)){
        $imageID = get_post_meta(get_the_ID(), 'new_image', true);
        echo $imageID;
        $imageURL = wp_get_attachment_image_src($imageID, 'full');
        // wp_get_attachment_url()
        echo $imageURL[0];
    }
 ?>

<div class="row">
    <div class="col-12">
        <p>This is a image post</p>
    </div>
    <div class="col-12">
        <?php if(get_post_meta(get_the_ID(), 'new_image', true)): ?>
            <img src="<?php echo $imageURL[0] ?>" class="img-fluid" alt="">
        <?php endif; ?>
    </div>
    <div class="col-12">
        <?php the_content(); ?>
    </div>
</div>
