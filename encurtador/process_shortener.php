<?php 

add_action('init', 'enc_process', 10);

function enc_process(){
    if(isset($_POST['enc_url'])){
        $url = $_POST['enc_url'];

        // Create post object
        $my_post = array(
        'post_title'    => wp_strip_all_tags( $url ),
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type' =>'short-url',
        
        );

        // Insert the post into the database
        $post_id = wp_insert_post( $my_post );

        $short = site_url().'/'.base64_encode($post_id);

        update_post_meta($post_id, 'url_original', $url);
        update_post_meta($post_id, 'url-curta', $short);
        
        die('Link encurtado: '.$short);
    }
    
}
