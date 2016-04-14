<?php
/*
Plugin Name: create crud operation
Plugin URI: http://martiantechnologies.net/
Description: This plugin helps your create crude operation in wordpress.
Version: 1.00
Author: Tehseen ULLAH
Author URI: http://martiantechnologies.net/
*/

define('ROOTDIR', plugin_dir_path(__FILE__));
add_action('admin_menu','create_crud_menu');
function create_crud_menu()
{
add_menu_page('Crud Example', //page title
	'Crud Example', //menu title
	'manage_options', //capabilities
	'crud_operation_wp', //menu slug
	crud_operation_wp1 //function
	);

add_submenu_page(
'crud_operation_wp', //parent slug
'create' , // title
'Add New', //menu title
'manage_options', //capability
'crud_operation_create', //menu slug
'crud_operation_create' //function
);

add_submenu_page(
'crud_operation_wp', //parent slug
'update' , // title
'update', //menu title
'manage_options', //capability
'crud_operation_update', //menu slug
'crud_operation_update' //function
);
add_submenu_page(
'crud_operation_wp', //parent slug
'Delete' , // title
'', //menu title
'manage_options', //capability
'crud_operation_delete', //menu slug
'crud_operation_delete' //function
);
}
function crud_operation_wp1()
{
require_once(ROOTDIR . 'list.php');

}
function crud_operation_create()
{
require_once(ROOTDIR . 'add.php');

}
function crud_operation_update()
{
require_once(ROOTDIR . 'edit.php');

}
function crud_operation_delete()
{
require_once(ROOTDIR . 'delete.php');

}



