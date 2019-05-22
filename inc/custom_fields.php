<?php

$metaboxes = array(
    'post_meta' => array(
        'title' => 'Extra Post Information',
        'post_type' => 'post'
    ),
    'page_meta' => array(
        'title' => 'Extra Page Information',
        'post_type' => 'page'
    ),
    'events_meta' => array(
        'title' => 'Extra Event Information',
        'post_type' => 'event'
    )
);

function create_custom_meta_boxes(){
    global $metaboxes;

    if(!empty($metaboxes)){
        foreach ($metaboxes as $metaboxID => $metabox) {
            var_dump($metaboxID);
            add_meta_box($metaboxID, $metabox['title'], 'output_custom_meta_box', $metabox['post_type']);
        };
    }

    // var_dump($metaboxes);
    // add_meta_box('random_meta_box', 'This is a Meta Box', 'output_custom_meta_box', 'post');

}

add_action('admin_init', 'create_custom_meta_boxes');

function output_custom_meta_box(){
    echo '<input type="text" name="inputField" class="inputField">';
}
