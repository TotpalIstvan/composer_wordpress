<?php
/**
* Plugin name: Test Plugin
*/

function test_send_mail($post_ID, $post, $update){
    //mail(....)

    error_log('=========================');
    error_log('=========================');
    error_log('=========================');
    error_log('=========================');
    error_log($post->post_title);
    error_log('=========================');
    error_log('=========================');
    error_log('=========================');
    error_log('=========================');
}
add_action('save_post', 'test_send_mail', 10, 3);

function test_delete($postid, $post ) {
    error_log('=========================');
    error_log('=========================');
    error_log('=========================');
    error_log('=========================');
    error_log($post->post_title);
    error_log('=========================');
    error_log('=========================');
    error_log('=========================');
    error_log('=========================');
}
add_action('delete_post', 'test_delete', 10, 2);

function test_esperente($text){
    $text = preg_replace(' /[aeiuéáűoüöőíóú]/u', 'e', $text);
    $text = preg_replace(' /[AEIUÉÁŰOÜÖÓÚŐÍ]/u', 'E', $text);
    return $text;
}
add_filter('the_title', 'test_esperente');
add_filter('the_content', 'test_esperente');
