<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/lib/db_users.php");
include("employer_registration_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<div class="center">
	
	<h1 class="newsHead">Registration form &raquo;</h1>
	<form action="employer_registration.php" method="post" enctype="multipart/form-data">
	<table class="searchDetails">
		<tr>
			<td colspan="2"><?php echo $displayMessage;?></td>
		</tr>
		<tr>
			<th>Email :*</th>
			<td><input type="text" name="email" value="<?php echo $email;?>"/></td>
		</tr>
		<tr>
			<th>Password :*</th>
			<td><input type="password" name="password" value="<?php echo $password;?>"/></td>
		</tr>
		<tr>
			<th>Confirm Password :*</th>
			<td><input type="password" name="confirmPassword" value="<?php echo $confirmPassword;?>"/></td>
		</tr>
		<tr>
			<th>Company name :*</th>
			<td><input type="text" name="company" value="<?php echo $company;?>"/></td>
		</tr>
		<tr>
			<th>Industry Type :*</th>
			<td><select name="industry">
					<option value="-1">Select Industry</option>
					<?php while($industry=$db->sql_fetchrow($industryList)){?>
					<option value="<?php echo $industry['industryId'];?>" <?php if($industryId==$industry['industryId']) echo 'selected';?>><?php echo $industry['name'];?></option>
					<?php }?>
				</select></td>
		</tr>
		<tr>
			<th>Address :*</th>
			<td><input type="text" name="address" value="<?php echo $address;?>"/></td>
		</tr>
		<tr>
			<th>Country :*</th>
			<td><select name="country">
					<option value="-1">Select Country</option>
					<?php while($country=$db->sql_fetchrow($countryList)){?>
					<option value="<?php echo $country['countryId'];?>" <?php if($countryId==$country['countryId']) echo 'selected';?>><?php echo $country['countryName'];?></option>
					<?php }?>
				</select></td>
		</tr>
		<tr>
			<th>Contact Number :*</th>
			<td><input type="text" name="phone" value="<?php echo $phone;?>" /></td>
		</tr>
		<tr>
			<th>Contact Person :*</th>
			<td><input type="text" name="contactPerson" value="<?php echo $contactPerson;?>"/></td>
		</tr>
		<tr>
			<th><a href="<?php echo $httpPathSite;?>job/login.php"><input type="button" value="Back to Login" /></a></th>
			<td><input type="submit" value="Register" name="btnRegister"/></td>
		</tr>
	</table>
	</form>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
