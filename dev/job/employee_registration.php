<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/lib/db_users.php");
include("employee_registration_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<div class="center">
	
	<h1 class="newsHead">Registration form &raquo;</h1>
	<form action="employee_registration.php" method="post">
	<table class="searchDetails">
		<tr>
			<td colspan="2"><?php echo $displayMessage;?></td>
		</tr>
		<tr>
			<th>Name :*</th>
			<td><input type="text" name="name" value="<?php echo $name;?>"/></td>
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
			<th>Mobile No. :*</th>
			<td><input type="text" name="mobile" value="<?php echo $mobile;?>"/></td>
		</tr>
		<tr>
			<th>Telephone No. :</th>
			<td><input type="text" name="phone" value="<?php echo $phone;?>"/></td>
		</tr>
		<tr>
			<th>Country :</th>
			<td><select name="country">
					<option value="-1">Select Country</option>
					<?php while($country=$db->sql_fetchrow($countryList)){?>
					<option value="<?php echo $country['countryId'];?>" <?php if($countryId==$country['countryId']) echo 'selected';?>><?php echo $country['countryName'];?></option>
					<?php }?>
				</select></td>
		</tr>
		<tr>
			<th>Total Experience :*</th>
			<td><input type="text" name="experience" value="<?php echo $experienceId;?>"/></td>
		</tr>
		<tr>
			<th>Key Skills :</th>
			<td><textarea name="skills"><?php echo $skills;?></textarea></td>
		</tr>
		<tr>
			<th>Current Industry :</th>
			<td><select name="industry">
					<option value="-1">Select Industry</option>
					<?php while($industry=$db->sql_fetchrow($industryList)){?>
					<option value="<?php echo $industry['industryId'];?>" <?php if($industryId==$industry['industryId']) echo 'selected';?>><?php echo $industry['name'];?></option>
					<?php }?>
				</select></td>
		</tr>
		<tr>
			<th>Qualification :*</th>
			<td><select name="qualification">
					<option value="-1">Select Qualification</option>
					<?php while($qualification=$db->sql_fetchrow($qualificationList)){?>
					<option value="<?php echo $qualification['qualificationId'];?>" <?php if($qualificationId==$qualification['qualificationId']) echo 'selected';?>><?php echo $qualification['qualification'];?></option>
					<?php }?>
				</select></td>
		</tr>
		<tr>
			<th>Upload CV :</th>
			<td><input type="file" name="cv" value=""/></td>
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
