<?php

add_action('admin_menu','newplugin_menu',20);
function newplugin_menu(){

    add_menu_page(
        'تنظیمات پلاگین',
        'تنظیمات پلاگین',
        'manage_options',
        'new_plugin_menu',
        'new_plugin_func'
);
add_submenu_page('new_plugin_menu','ویرایش عکس','ویرایش عکس','manage_options','new_submenu_123','submenufunc');
}
function new_plugin_func(){
//    var_dump($_POST);
    // get_option( 'radio_button');
    // get_option( 'email_input' );
    
   
    if(isset($_POST['saveSetting'])){
    if(isset($_POST['radio'])){
        update_option('radio_button',$_POST['radio']);}
        else{
            delete_option('radio_button');
        }
    }
    

    if(isset($_POST['saveSetting'])){
    if(empty($_POST['email'])){
        delete_option('email_input1');
    }
    else{
        update_option('email_input1',$_POST['email']);
    }}
    $email_input1=get_option('email_input1');
    $radio_button=get_option( 'radio_button' );
    $emailemp=empty($_POST['email']);
    echo $email_input1;

        include MF_DIR.'tpl/admin/adminmenu.php';
        get_option( 'email_input' );

}

function submenufunc(){

}










