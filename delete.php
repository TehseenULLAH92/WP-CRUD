<?php
if(isset($_REQUEST['id']))
{
	global $wpdb;
	$id=$_REQUEST['id'];
	$wpdb->delete(
	'wp_employee', //table name 
	array('id'=>$id),//data
	array('%d')
	);
	$message="Data Deleted Successfully";
}
?>

Add Data
<?php if(isset($message)) 
	header('Location:admin.php?page=crud_operation_wp');
?>
