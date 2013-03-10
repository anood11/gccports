<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/lib/db_associations.php");
include("association_details_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="seaport_directory.php" method="post" name="formSearchSeaport">
<div class="center">
	<h1 class="newsHead">Association Details&raquo;</h1>
	<form action="association_details.php" method="post" name="frmSeaportDetails">
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
			<td>Category</td>
			<td><?php echo $category;?></td>
		</tr>
		<tr>
			<td>Telephone and Fax</td>
			<td><?php echo $phone;?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $email;?></td>
		</tr>
		<tr>
			<td>Website</td>
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