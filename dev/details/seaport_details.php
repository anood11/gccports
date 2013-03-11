<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("seaport_details_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="seaport_details.php" method="post" name="formSearchSeaport">
<div class="center">
	<h1 class="newsHead">Seaport directory Details&raquo;</h1>
	<form action="seaport_details.php" method="post" name="frmSeaportDetails">
	<input name="id" type="hidden" value="<?php ?>"/>
	<table class="searchDetails">
		<tr>
			<th>Name</th>
			<td><?php echo $company;?></td>
		</tr>
		<tr>
			<th>Address</th>
			<td><?php echo $address;?></td>
		</tr>
		<tr>
			<th>Country</th>
			<td><?php echo $country;?></td>
		</tr>
		<tr>
			<th>Location</th>
			<td><?php echo $location;?></td>
		</tr>
		<tr>
			<th>Phone</th>
			<td><?php echo $phone;?></td>
		</tr>
		<tr>
			<th>Fax</th>
			<td><?php echo $fax;?></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><?php echo $email;?></td>
		</tr>
		<tr>
			<th>Website</th>
			<td><?php echo $website;?></td>
		</tr>
	</table>
	</form>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>