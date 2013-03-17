<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/lib/db_users.php");
include("jobdetails_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="jobdetails.php" method="post" name="formJobDetails">
<div class="center">

	<div class="centerBanner">
		<img src="<?php echo $httpPathSite;?>resources/images/ad1.gif" alt="" />
	</div>

	<h1 class="newsHead">Job Details&raquo;</h1>
	<table class="searchResult">
		<tr>
			<td>Company</td>
			<td><?php echo $company; ?></td>
		</tr>
		<tr>
			<td>Requirement</td>
			<td><?php echo $requirement; ?></td>
		</tr>
		<tr>
			<td>Experience in Year</td>
			<td><?php echo $experience; ?></td>
		</tr>
		<tr>
			<td>Salary range</td>
			<td><?php echo $salary; ?></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><?php echo $country; ?></td>
		</tr>
		<tr>
			<td>Profile</td>
			<td><?php echo $profile; ?></td>
		</tr>
		<tr>
			<td>Industry</td>
			<td><?php echo $industry; ?></td>
		</tr>
		<tr>
			<td>Designation</td>
			<td><?php echo $designation; ?></td>
		</tr>
		<tr>
			<td>Job code</td>
			<td><?php echo $code; ?></td>
		</tr>
		<tr>
			<td>Posted date</td>
			<td><?php echo $date; ?></td>
		</tr>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>