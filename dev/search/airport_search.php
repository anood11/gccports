<?php
include("../includes/lib/globals.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>

<div class="center">
	<h1 class="newsHead">Search Airports &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Airport Name</label></li>
		<li><input type="text" /></li>
		<li><label>IATA Code</label></li>
		<li><input type="text" /></li>
		<li><label>ICAO</label></li>
		<li><input type="text" /></li>
		<li><label>Country</label></li>
		<li><select><option>Select Country</option></select></li>
		<li><label>Sort By</label></li>
		<li><select><option>Select Category</option></select></li>
		<li><input type="submit" value="Modify" /></li>
	</ul>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<tr>
			<th>Airport Name</th>
			<th>Airport Code</th>
			<th>City Name</th>
			<th>Country</th>
			<th>Country Code</th>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
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
