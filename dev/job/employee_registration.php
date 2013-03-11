<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<div class="center">
	
	<h1 class="newsHead">Registration form &raquo;</h1>
	
	<table class="searchDetails">
		
		<tr>
			<th>Name :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Email :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Password :</th>
			<td><input type="password" /></td>
		</tr>
		<tr>
			<th>Confirm Password :</th>
			<td><input type="password" /></td>
		</tr>
		<tr>
			<th>Phone No. :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Designation :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Experience :</th>
			<td>
				<select>
					<option>Select Experience</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Current Company :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Current Salary :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Country :</th>
			<td><select>
					<option>Select Country</option>
				</select></td>
		</tr>
		
		<tr>
			<th>Upload CV :</th>
			<td><input type="file" /></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><input type="submit" /></td>
		</tr>
	
		
	</table>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
