<?php
include("../includes/lib/globals.php");
include("../includes/lib/db_users.php");
include("../includes/manage_sidebar.php");
include("free_listing_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="free_listing.php" method="post" name="formFreeListing">
<div class="center">
	<h1 class="newsHead">Free Listing &raquo;</h1>
	<table class="searchResult">
	<tr>
		<td colspan="4"><strong style="font-weight:bold;">Please fill out the below form.</strong></td>
	</tr>
	<tr>
		<td>Company Name</td>
		<td><input type="text" name="company" value="<?php echo $company;?>"/></td>
		<td>Address</td>
		<td><input type="text" name="address" value="<?php echo $address;?>"/></td>
	</tr>
	<tr>
		<td>Telephone</td>
		<td><input type="text" name="telephone" value="<?php echo $telephone; ?>"/></td>
		<td>Fax</td>
		<td><input type="text" name="fax" value="<?php echo $fax;?>"/></td>
	</tr>
	<tr>
		<td>Email ID</td>
		<td><input type="text" name="email" value="<?php echo $email;?>"/></td>
		<td>Website</td>
		<td><input type="text" name="website" value="<?php echo $website;?>"/></td>
	</tr>
	<tr>
		<td>Head of the organization</td>
		<td><input type="text" name="organizationHead" value="<?php echo $organizationHead;?>" /></td>
		<td>Designation</td>
		<td><input type="text" name="designation" value="<?php echo $designation;?>"/></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="text" name="mobile" value="<?php echo $mobile;?>"/></td>
			<td>No. of Employees</td>
		<td><input type="text" name="employeeCount" value="<?php echo $employeeCount;?>"/></td>
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
					<td><input type="text" name="branch1" value="<?php echo $branch1;?>"/></td>
					<td><input type="text" name="bAddress1" value="<?php echo $bAddress1;?>"/></td>
					<td><input type="text" name="bPhone1" value="<?php echo $bPhone1;?>"/></td>
					<td><input type="text" name="bFax1" value="<?php echo $bFax1;?>"/></td>
					<td><input type="text" name="bEmail1" value="<?php echo $bEmail1;?>"/></td>
					<td><input type="text" name="bWebsite1" value="<?php echo $bWebsite1;?>"/></td>
				</tr>
				<tr>
					<td><input type="text" name="branch2" value="<?php echo $branch2;?>"/></td>
					<td><input type="text" name="bAddress2" value="<?php echo $bAddress2;?>" /></td>
					<td><input type="text" name="bPhone2" value="<?php echo $bPhone2;?>"/></td>
					<td><input type="text" name="bFax2" value="<?php echo $bFax2;?>"/></td>
					<td><input type="text" name="bEmail2" value="<?php echo $bEmail2;?>"/></td>
					<td><input type="text" name="bWebsite2" value="<?php echo $bWebsite2;?>"/></td>
				</tr>
				<tr>
					<td><input type="text" name="branch3" value="<?php echo $branch3;?>"/></td>
					<td><input type="text" name="bAddress3" value="<?php echo $bAddress3;?>"/></td>
					<td><input type="text" name="bPhone3" value="<?php echo $bPhone3;?>"/></td>
					<td><input type="text" name="bFax3" value="<?php echo $bFax3;?>"/></td>
					<td><input type="text" name="bEmail3" value="<?php echo $bEmail3;?>"/></td>
					<td><input type="text" name="bWebsite3" value="<?php echo $bWebsite3;?>"/></td>
				</tr>
				<tr>
					<td><input type="text" name="branch4" value="<?php echo $branch4;?>"/></td>
					<td><input type="text" name="bAddress4" value="<?php echo $bAddress4;?>"/></td>
					<td><input type="text" name="bPhone4" value="<?php echo $bPhone4;?>"/></td>
					<td><input type="text" name="bFax4" value="<?php echo $bFax4;?>"/></td>
					<td><input type="text" name="bEmail4" value="<?php echo $bEmail4;?>"/></td>
					<td><input type="text" name="bWebsite4" value="<?php echo $bWebsite4;?>"/></td>
				</tr>
				<tr>
					<td><input type="text" name="branch5" value="<?php echo $branch5;?>"/></td>
					<td><input type="text" name="bAddress5" value="<?php echo $bAddress5;?>"/></td>
					<td><input type="text" name="bPhone5" value="<?php echo $bPhone5;?>"/></td>
					<td><input type="text" name="bFax5" value="<?php echo $bFax5;?>"/></td>
					<td><input type="text" name="bEmail5" value="<?php echo $bEmail5;?>"/></td>
					<td><input type="text" name="bWebsite5" value="<?php echo $bWebsite5;?>"/></td>
				</tr>
				<tr>
					<td><input type="text" name="branch6" value="<?php echo $branch6;?>"/></td>
					<td><input type="text" name="bAddress6" value="<?php echo $bAddress6;?>"/></td>
					<td><input type="text" name="bPhone6" value="<?php echo $bPhone6;?>"/></td>
					<td><input type="text" name="bFax6" value="<?php echo $bFax6;?>"/></td>
					<td><input type="text" name="bEmail6" value="<?php echo $bEmail6;?>"/></td>
					<td><input type="text" name="bWebsite6" value="<?php echo $bWebsite6;?>"/></td>
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
					<td><input type="checkbox" name="chkShipOwners" <?php if($chkShipOwners==1) echo "checked";?>/>
						Ship Owners / Operators </td>
					<td><input type="checkbox" name="chkShippingAgnts" <?php if($chkShippingAgnts==1) echo "checked";?>/>
						Liners, Shipping Agents & NVOCC </td>
					<td><input type="checkbox" name="chkFreight" <?php if($chkFreight==1) echo "checked";?>/>
						Freight Forwarding & Clearing Agents</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkAirlines" <?php if($chkAirlines==1) echo "checked";?>/>
						Airlines (Cargo)</td>
					<td><input type="checkbox" name="chkAirCargo" <?php if($chkAirCargo==1) echo "checked";?>/>
						Air Cargo Agents</td>
					<td><input type="checkbox" name="chkAirCraft" <?php if($chkAirCraft==1) echo "checked";?>/>
						Air Craft Chartering & Leasing</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkShipbuilders" <?php if($chkShipbuilders==1) echo "checked";?>/>
						Shipbuilders & Repairers</td>
					<td><input type="checkbox" name="chkEnginBuilders" <?php if($chkEnginBuilders==1) echo "checked";?>/>
						Engine Builders</td>
					<td><input type="checkbox" name="chkShipCharters" <?php if($chkShipCharters==1) echo "checked";?>/>
						Ship Charters</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkShipBrokers" <?php if($chkShipBrokers==1) echo "checked";?>/>
						Ship Brokers</td>
					<td><input type="checkbox" name="chkBunkers" <?php if($chkBunkers==1) echo "checked";?>/>
						Bunkers</td>
					<td><input type="checkbox" name="chkShipChandler" <?php if($chkShipChandler==1) echo "checked";?>/>
						Ship Chandler</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkStevedores" <?php if($chkStevedores==1) echo "checked";?>/>
						Stevedores</td>
					<td><input type="checkbox" name="chkWarehousing" <?php if($chkWarehousing==1) echo "checked";?>/>
						Warehousing & Storage </td>
					<td><input type="checkbox" name="chkMarineContainer" <?php if($chkMarineContainer==1) echo "checked";?>/>
						Marine Container Conversions & Hire</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkMaritime" <?php if($chkMaritime==1) echo "checked";?>/>
						Maritime Organisations </td>
					<td><input type="checkbox" name="chkContainerTrucking" <?php if($chkContainerTrucking==1) echo "checked";?>/>
						Container Trucking</td>
					<td><input type="checkbox" name="chkEquipmentOwners" <?php if($chkEquipmentOwners==1) echo "checked";?>/>
						Equipment Owners, Manufacturers, Repairers, Leasing & Handling</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkCourier" <?php if($chkCourier==1) echo "checked";?>/>
						Courier Services</td>
					<td><input type="checkbox" name="chkLashing" <?php if($chkLashing==1) echo "checked";?>/>
						Lashing & Securing</td>
					<td><input type="checkbox" name="chkLogistics" <?php if($chkLogistics==1) echo "checked";?>/>
						Logistics & Distribution</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkPacking" <?php if($chkPacking==1) echo "checked";?>/>
						Packing & Removals</td>
					<td><input type="checkbox" name="chkPestControl" <?php if($chkPestControl==1) echo "checked";?>/>
						Pest Control & Fumigation Services</td>
					<td><input type="checkbox" name="chkProjectCargo" <?php if($chkProjectCargo==1) echo "checked";?>/>
						Project Cargo Handling</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkSupplyChain" <?php if($chkSupplyChain==1) echo "checked";?>/>
						Supply Chain Management </td>
					<td><input type="checkbox" name="chkConsultants" <?php if($chkConsultants==1) echo "checked";?>/>
						Consultants & Surveyors </td>
					<td><input type="checkbox" name="chkShipManagers" <?php if($chkShipManagers==1) echo "checked";?>/>
						Ship Managers</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkMaritimeSchool" <?php if($chkMaritimeSchool==1) echo "checked";?>/>
						Maritime Schools</td>
					<td><input type="checkbox" name="chkMarineInsurance" <?php if($chkMarineInsurance==1) echo "checked";?>/>
						Marine Insurance</td>
					<td><input type="checkbox" name="chkMaritimeLawyers" <?php if($chkMaritimeLawyers==1) echo "checked";?>/>
						Maritime Lawyers</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chkClassification" <?php if($chkClassification==1) echo "checked";?>/>
						Classification Societies</td>
					<td><input type="checkbox" name="chkTowage" <?php if($chkTowage==1) echo "checked";?>/>
						Towage & Salvage</td>
					<td><input type="checkbox" name="chkOffshore" <?php if($chkOffshore==1) echo "checked";?>/>
						Offshore/Onshore Marine Equipment</td>
				</tr>
			</table></td>
	</tr>
	<tr>
		<td colspan="4"><input type="submit" value="Submit &amp; Get Listed" name="btnSubmit"/></td>
	</tr>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>