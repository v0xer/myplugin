<?php
function comment_func($post,$post_type){
add_meta_box('comment_meta',
'نظرات',
'comment_meta_func',
'post',
'normal',
'default'
);


}
function comment_meta_func($post){

$metabox_get=get_post_meta($post->ID,'comment_input_user',true);
include MF_TPL.'admin/metabox_html.php';


}


function save_function($post_id){
if(isset($_POST['email1'])){
update_post_meta($post_id,'comment_input_user',$_POST['email1']);


}


}


add_action('save_post','save_function');
add_action('add_meta_boxes','comment_func',10,2);
