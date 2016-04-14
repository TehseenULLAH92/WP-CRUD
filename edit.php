<?php
if(isset($_REQUEST['edit']))
{
	global $wpdb;
	$id=$_REQUEST['id'];
	$wpdb->update(
	'wp_employee', //table name
	array("name"=>$_REQUEST['name']), //data
	array('id'=>$id),
	array('%s'),
	array('%d')
);
	$id		=			$_REQUEST['id'];
	$name 	=			$_POST['name'];
	$email	=			$_POST['email'];
	$profile_image =	$_POST['profile_image'];
	$age =				$_POST['age'];
	$gender =			$_POST['gender'];
	$company_name =		$_POST['company_name'];
	$wpdb->update( 'wp_employee', 
	array(
        'name'	 		=> $name,
        'email' 		=> $email,
		'profile_image' => $profile_image,
		'age' 			=> $age,
		'gender' 		=> $gender,
		'company_name' 	=> $company_name,
    ));
	$message="data updates";
}
?>

<?php if(isset($message)) echo $message; ?>
<?php
	global $wpdb;
	$id	=	$_GET['id'];
	
	$data = $wpdb->get_row("select * from wp_employee where wp_employee.id=$id");

?>
<form action="" method="post" >
<table class="form-table">
      <tbody>
        <tr class="form-field form-required">
          <th scope="row"><label for="name">Name </label></th>
          <td><input name="name" type="text" id="name" value="<?=$data->name;?>" aria-required="true" autocapitalize="none" autocorrect="off" maxlength="60"></td>
        </tr>
        <tr class="form-field form-required">
          <th scope="row"><label for="email">Email </label></th>
          <td><input name="email" type="email" id="email" value="<?=$data->email;?>"></td>
        </tr>
        <tr class="form-field">
          <th scope="row"><label for="profile_image">Profile Image</label></th>
          <td><input name="profile_image" type="text" id="profile_image" value="<?=$data->profile_image;?>"></td>
        </tr>
        <tr class="form-field">
          <th scope="row"><label for="age">Age</label></th>
          <td><input name="age" type="text" id="age" value="<?=$data->age;?>"></td>
        </tr>
        <tr class="form-field">
          <th scope="row"><label for="gender">Gender</label></th>
          <td><input name="gender" type="text" id="gender" class="code" value="<?=$data->gender;?>"></td>
        </tr>
        <tr class="form-field">
          <th scope="row"><label for="gender">Company Name</label></th>
          <td><input name="company_name" type="text" id="company_name" class="code" value="<?=$data->company_name;?>"></td>
        </tr>
      </tbody>
    </table>
    <input type="submit" name="submit" value="submit" />
</form>
