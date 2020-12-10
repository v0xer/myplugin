<?php
/*
Plugin Name: First Project
Plugin URI: https://www.accmobile.ir/
Description: My First Project in wordpress plugins
Version: 4.1.6
Author: Amir Mahdizadeh
License: GPLv2 or later
Text Domain: allINOne
*/
define('MF_DIR',plugin_dir_path(__FILE__));
define('MF_INC',MF_DIR.'/inc/');
define('MF_TPL',MF_DIR.'/tpl/');




if(is_admin()){
include MF_INC.'admin/menu.php';
include MF_INC.'admin/emetabox.php';
}else{


}