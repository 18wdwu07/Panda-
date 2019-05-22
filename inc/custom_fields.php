<?php

$metaboxes = array(
    'post_meta' => array(
        'title' => 'Extra Post Information',
        'post_type' => 'post',
        'fields' => array(
            'location' => array(
                'title' => 'Post Location',
                'type' => 'text',
                'description' => 'Where was this post located?'
            ),
            'price' => array(
                'title' => 'Post Price',
                'type' => 'number',
                'description' => 'The price of the post'
            ),
            'side' => array(
                'title' => 'What side is it on?',
                'type' => 'select',
                'description' => '',
                'choices' => array('left', 'right')
            )
        )
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
            add_meta_box($metaboxID, $metabox['title'], 'output_custom_meta_box', $metabox['post_type'],
            'normal', 'high', $metabox);
        };
    }

    // var_dump($metaboxes);
    // add_meta_box('random_meta_box', 'This is a Meta Box', 'output_custom_meta_box', 'post');

}

add_action('admin_init', 'create_custom_meta_boxes');

function output_custom_meta_box($post, $metabox){
    // var_dump($metabox);
    // echo '<h1>'.$metabox['title'].'</h1>';
    $fields = $metabox['args']['fields'];
    if($fields){
        foreach ($fields as $fieldID => $field) {
            switch($field['type']){
                case 'text':
                    echo '<label>'.$field['title'].'</label>';
                    echo '<input type="text" name="'.$fieldID.'" class="inputField">';
                break;
                case 'number':
                    echo '<label>'.$field['title'].'</label>';
                    echo '<input type="number" class="inputField">';
                break;
                default:
                    echo '<p>This is a the default input</p>';
                break;
            }
        }
    }
    // var_dump($fields);
}
