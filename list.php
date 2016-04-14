<?php
global $wpdb;
$result=$wpdb->get_results('select * from wp_employee');
//print_r($result);die;
?>

<div class="" style="    margin-top: 20px;"><a href="<?=admin_url('admin.php?page=crud_operation_create');?>" class="page-title-action" >Add Data</a></div>
<table class="wp-list-table widefat fixed striped posts" style="margin-top: 30px;">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Profile Image</td>
    <td>Age</td>
    <td>Gender</td>
    <td>Company Name</td>
    <td>Action</td>
  </tr>
  <?php if(isset($result)) foreach($result as $result)
{?>
  <tr>
    <td><?=$result->id;?></td>
    <td><?=$result->name; ?></td>
    <td><?=$result->email; ?></td>
    <td><?=$result->profile_image; ?></td>
    <td><?=$result->age; ?></td>
    <td><?=$result->gender; ?></td>
    <td><?=$result->company_name; ?></td>
    <td><a href="admin.php?page=crud_operation_update&id=<?=$result->id;?>" >Edit</a>&nbsp;&nbsp;&nbsp;<a href="admin.php?page=crud_operation_delete&id=<?=$result->id;?>" >Delete</a></td>
  </tr>
  <?php } ?>
</table>
