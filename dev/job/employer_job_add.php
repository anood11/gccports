<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<div class="center">
	
	<h1 class="newsHead">Add a job here &raquo;</h1>
	
	<table class="searchDetails">
		
		<tr>
			<th>Company :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Email :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Phone :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Job requirement :</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>Experience needed :</th>
			<td><select>
					<option>Select Experience</option>
				</select></td>
		</tr>
		<tr>
			<th>Salary range :</th>
			<td><input type="text" /></td>
		</tr>
			<tr>
			<th>Country :</th>
			<td><select>
					<option>Select Country</option>
				</select></td>
		</tr>
		<tr>
			<th>Company profile [in 50 words] :</th>
			<td>
				<textarea rows="" cols=""></textarea>
			</td>
		</tr>
		
	
		
	
		<tr>
			<th>&nbsp;</th>
			<td><input type="submit" value="Add Job" /></td>
		</tr>
	
		
	</table>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
