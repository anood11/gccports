<?php
include("../includes/lib/globals.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>

<div class="center">
	<h1 class="newsHead">Track and Trace &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Sort By</label></li>
		<li>
			<select>
				<option>Select Category</option>
				<option>Seaports & Terminals</option>
				<option>Airlines</option>
				<option>Shipping Lines</option>
				<option>Road Freight</option>
				<option>Freight Forwarders  & NVOCC</option>
				<option>Couriers</option>
				<option>Rail Freight</option>
			</select>
		</li>
		<li><input type="submit" value="Search" /></li>
	</ul>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<tr>
			<th>Airline Name</th>
			<th>Country</th>
			<th>Website</th>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			
		</tr>
	</table>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
