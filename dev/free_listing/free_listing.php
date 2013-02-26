<?php
include("../includes/lib/globals.php");
include("../includes/lib/db_associations.php");
include("../includes/manage_sidebar.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="list_associations.php" method="post" name="formSearchAirport">
<div class="center">
	<h1 class="newsHead">Free Listing &raquo;</h1>
	<table class="searchResult">
	<tr>
		<td colspan="4"><strong style="font-weight:bold;">Please fill out the below form.</strong></td>
	</tr>
	<tr>
		<td>Company Name</td>
		<td><input type="text" /></td>
		<td>Address</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td>Telephone</td>
		<td><input type="text" /></td>
		<td>Fax</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td>Email ID</td>
		<td><input type="text" /></td>
		<td>Website</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td>Head of the organization</td>
		<td><input type="text" /></td>
		<td>Designation</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td>Telephone</td>
		<td><input type="text" /></td>
		<td>Mobile</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td>Email ID</td>
		<td><input type="text" /></td>
		<td>No. of Employees</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4"><strong style="font-weight:bold;">BRANCHES / OFFICES IN OTHER LOCATIONS IN UAE</strong></td>
	</tr>
	<tr>
		<td colspan="4"><table width="100%">
				<tr>
					<th>Branches</th>
					<th>Address</th>
					<th>Telephone</th>
					<th>Fax</th>
					<th>Email</th>
					<th>Website</th>
				</tr>
				<tr>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
				</tr>
			</table></td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4"><strong style="font-weight:bold;">Select Categories</strong></td>
	</tr>
	<tr>
		<td colspan="4"><table width="100%">
				<tr>
					<td><input type="checkbox" />
						Ship Owners / Operators </td>
					<td><input type="checkbox" />
						Liners, Shipping Agents & NVOCC </td>
					<td><input type="checkbox" />
						Freight Forwarding & Clearing Agents</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Airlines (Cargo)</td>
					<td><input type="checkbox" />
						Air Cargo Agents</td>
					<td><input type="checkbox" />
						Air Craft Chartering & Leasing</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Shipbuilders & Repairers</td>
					<td><input type="checkbox" />
						Engine Builders</td>
					<td><input type="checkbox" />
						Ship Charters</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Ship Brokers</td>
					<td><input type="checkbox" />
						Bunkers</td>
					<td><input type="checkbox" />
						Ship Chandler</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Stevedores</td>
					<td><input type="checkbox" />
						Warehousing & Storage </td>
					<td><input type="checkbox" />
						Marine Container Conversions & Hire</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Maritime Organisations </td>
					<td><input type="checkbox" />
						Container Trucking</td>
					<td><input type="checkbox" />
						Equipment Owners, Manufacturers, Repairers, Leasing & Handling</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Courier Services</td>
					<td><input type="checkbox" />
						Lashing & Securing</td>
					<td><input type="checkbox" />
						Logistics & Distribution</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Packing & Removals</td>
					<td><input type="checkbox" />
						Pest Control & Fumigation Services</td>
					<td><input type="checkbox" />
						Project Cargo Handling</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Supply Chain Management </td>
					<td><input type="checkbox" />
						Consultants & Surveyors </td>
					<td><input type="checkbox" />
						Ship Managers</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Maritime Schools</td>
					<td><input type="checkbox" />
						Marine Insurance</td>
					<td><input type="checkbox" />
						Maritime Lawyers</td>
				</tr>
				<tr>
					<td><input type="checkbox" />
						Classification Societies</td>
					<td><input type="checkbox" />
						Towage & Salvage</td>
					<td><input type="checkbox" />
						Offshore/Onshore Marine Equipment</td>
				</tr>
			</table></td>
	</tr>
	<tr>
		<td colspan="4"><input type="submit" value="Submit &amp; Get Listed" /></td>
	</tr>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>