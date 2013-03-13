<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<div class="center">
	
	<h1 class="newsHead">Registration form &raquo;</h1>
	<form action="employer_registration.php" method="post" enctype="multipart/form-data">
	<table class="searchDetails">
		<tr>
			<th>Email :</th>
			<td><input type="text" name="name" value=""/></td>
		</tr>
		<tr>
			<th>Password :</th>
			<td><input type="password" name="password" value=""/></td>
		</tr>
		<tr>
			<th>Confirm Password :</th>
			<td><input type="password" name="confirmPassword" value=""/></td>
		</tr>
		<tr>
			<th>Company name :</th>
			<td><input type="text" name="company" value=""/></td>
		</tr>
		<tr>
			<th>Industry Type :</th>
			<td><select name="industry">
					<option value="-1">Select Industry</option>
				</select></td>
		</tr>
		<tr>
			<th>Address :</th>
			<td><input type="text" name="address" value=""/></td>
		</tr>
		<tr>
			<th>Country :</th>
			<td><select name="country">
					<option value="-1">Select Country</option>
				</select></td>
		</tr>
		<tr>
			<th>Contact Number :</th>
			<td><input type="text" name="number" value="" /></td>
		</tr>
		<tr>
			<th>Contact Person :</th>
			<td><input type="text" name="contactPerson" value=""/></td>
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
