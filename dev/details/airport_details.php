<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("airport_details_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="airport_details.php" method="post" name="formSearchSeaport">
<div class="center">
	<h1 class="newsHead">Airport directory Details&raquo;</h1>
	<form action="seaport_details.php" method="post" name="frmSeaportDetails">
	<input name="id" type="hidden" value="<?php ?>"/>
	<table class="searchResult">
		<tr>
			<td>Name</td>
			<td><?php echo $company;?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo $address;?></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><?php echo $country;?></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><?php echo $phone;?></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td><?php echo $fax;?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $email;?></td>
		</tr>
		<tr>
			<td>Website</td>
			<td><a href="<?php echo $website;?>"><?php echo $website;?></a></td>
		</tr>
	</table>
	</form>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>