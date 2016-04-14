<?php
if(isset($_POST['submit']))
{
	global $wpdb;
	$name 	=$_POST['name'];
	$email	=$_POST['email'];
	$profile_image =	$_POST['profile_image'];
	$age =	$_POST['age'];
	$gender =	$_POST['gender'];
	$company_name =	$_POST['company_name'];
	$wpdb->insert( 'wp_employee', 
	array(
        'name'	 		=> $name,
        'email' 		=> $email,
		'profile_image' => $profile_image,
		'age' 			=> $age,
		'gender' 		=> $gender,
		'company_name' 	=> $company_name,
    ));

	$message="Data Inserted Successfully";
}
?>

<div class="data" style="margin-bottom:25px;">
  <?php if(isset($message)) echo $message; ?>
  <form action="" method="post" >
    <table class="form-table">
      <tbody>
        <tr class="form-field form-required">
          <th scope="row"><label for="name">Name </label></th>
          <td><input name="name" type="text" id="name" value="" aria-required="true" autocapitalize="none" autocorrect="off" maxlength="60"></td>
        </tr>
        <tr class="form-field form-required">
          <th scope="row"><label for="email">Email <span class="description">(required)</span></label></th>
          <td><input name="email" type="email" id="email" value=""></td>
        </tr>
        <tr class="form-field">
          <th scope="row"><label for="profile_image">Profile Image</label></th>
          <td><input name="profile_image" type="text" id="profile_image" value=""></td>
        </tr>
        <tr class="form-field">
          <th scope="row"><label for="age">Age</label></th>
          <td><input name="age" type="text" id="age" value=""></td>
        </tr>
        <tr class="form-field">
          <th scope="row"><label for="gender">Gender</label></th>
          <td><input name="gender" type="text" id="gender" class="code" value=""></td>
        </tr>
        <tr class="form-field">
          <th scope="row"><label for="gender">Company Name</label></th>
          <td><input name="company_name" type="text" id="company_name" class="code" value=""></td>
        </tr>
      </tbody>
    </table>
    <input type="submit" name="submit" value="submit" />
  </form>
</div>
