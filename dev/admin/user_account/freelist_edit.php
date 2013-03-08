<?php
include("../includes/globals.php");
include("../../includes/lib/db_users.php");
include("../../includes/lib/db_sidebar.php");
include("freelist_edit_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">Update Freelist</h1>
<form name="frmFreelist" action="freelist_edit.php" method="post">
<div class="displayMessage"><?php echo $displayMessage;?></div>
<input type="hidden" name="editId" value="<?php echo $listId;?>">
	<table class="searchResult">
	<tr>
		<td>Company Name :</td>
		<td><?php echo $company;?></td>
		<td>Address :</td>
		<td><?php echo $address;?></td>
	</tr>
	<tr>
		<td>Telephone :</td>
		<td><?php echo $telephone;?></td>
		<td>Fax :</td>
		<td><?php echo $fax;?></td>
	</tr>
	<tr>
		<td>Email ID :</td>
		<td><?php echo $email;?></td>
		<td>Website :</td>
		<td><?php echo $website;?></td>
	</tr>
	<tr>
		<td>Head of the organization :</td>
		<td><?php echo $organizationHead;?></td>
		<td>Designation :</td>
		<td><?php echo $designation;?></td>
	</tr>
	<tr>
		<td>Mobile :</td>
		<td><?php echo $mobile;?></td>
		<td>No. of Employees :</td>
		<td><?php echo $employeeCount;?></td>
	</tr>
	<!--<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="btnActivate" value="Activate"></td>
		<td>&nbsp;</td>
	</tr>-->
	</table>
	<table class="freelistBranch">
	  <tr>
		<th colspan="6"><b>Branches</b></th>	
	  </tr>
	  <tr>
		<th>Branch</th>
		<th>Address</th>
		<th>Telephone</th>
		<th>Fax</th>
		<th>Email</th>
		<th>Website</th>
	 </tr>
	 <?php if(($db->sql_numrows($branchList))==0){?>
	 <tr>
	 	<td colspan="6">No branches found</td>
	 </tr>
	 <?php }else{ while($branch=$db->sql_fetchrow($branchList)){?>
	 <tr>
	 	<td><?php echo $branch['branch'];?></td>
		<td><?php echo $branch['address'];?></td>
		<td><?php echo $branch['telephone'];?></td>
		<td><?php echo $branch['fax'];?></td>
		<td><?php echo $branch['email'];?></td>
		<td><?php echo $branch['website'];?></td>
	 </tr>
	 <?php }} ?>
	</table>
	<table class="searchResult">
		<tr>
			<th colspan="4"><b>Selected Categories</b></th>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkShipOwners==1) echo 'checked';?>/>&nbsp; Ship Owners / Operators</td>
			<td><input type="checkbox" <?php if($chkShippingAgnts==1) echo 'checked';?>/>&nbsp;Liners, Shipping Agents & NVOCC</td>
			<td><input type="checkbox" <?php if($chkFreight==1) echo 'checked';?>/>&nbsp;Freight Forwarding & Clearing Agents</td>
			<td><input type="checkbox" <?php if($chkAirlines==1) echo 'checked';?>/>&nbsp;Airlines (Cargo)</td>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkAirCargo==1) echo 'checked';?>/>&nbsp;Air Cargo Agents</td>
			<td><input type="checkbox" <?php if($chkAirCraft==1) echo 'checked';?>/>&nbsp;Air Craft Chartering & Leasing</td>
			<td><input type="checkbox" <?php if($chkShipbuilders==1) echo 'checked';?>/>&nbsp;Shipbuilders & Repairers</td>
			<td><input type="checkbox" <?php if($chkEnginBuilders==1) echo 'checked';?>/>&nbsp;Engine Builders</td>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkShipCharters==1) echo 'checked';?>/>&nbsp;Ship Charters</td>
			<td><input type="checkbox" <?php if($chkShipBrokers==1) echo 'checked';?>/>&nbsp;Ship Brokers</td>
			<td><input type="checkbox" <?php if($chkBunkers==1) echo 'checked';?>/>&nbsp;Bunkers</td>
			<td><input type="checkbox" <?php if($chkShipChandler==1) echo 'checked';?>/>&nbsp;Ship Chandler</td>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkStevedores==1) echo 'checked';?>/>&nbsp;Stevedores</td>
			<td><input type="checkbox"<?php if($chkWarehousing==1) echo 'checked';?>/>&nbsp;Warehousing & Storage</td>
			<td><input type="checkbox" <?php if($chkMarineContainer==1) echo 'checked';?>/>&nbsp;Marine Container Conversions & Hire</td>
			<td><input type="checkbox" <?php if($chkMaritime==1) echo 'checked';?>/>&nbsp;Maritime Organisations</td>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkContainerTrucking==1) echo 'checked';?>/>&nbsp;Container Trucking</td>
			<td><input type="checkbox" <?php if($chkEquipmentOwners==1) echo 'checked';?>/>&nbsp;Equipment Owners, Manufacturers, Repairers, Leasing & Handling</td>
			<td><input type="checkbox" <?php if($chkCourier==1) echo 'checked';?>/>&nbsp;Courier Services</td>
			<td><input type="checkbox" <?php if($chkLashing==1) echo 'checked';?>/>&nbsp;Lashing & Securing</td>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkLogistics==1) echo 'checked';?>/>&nbsp;Logistics & Distribution</td>
			<td><input type="checkbox" <?php if($chkPacking==1) echo 'checked';?>/>&nbsp;Packing & Removals</td>
			<td><input type="checkbox" <?php if($chkPestControl==1) echo 'checked';?>/>&nbsp;Pest Control & Fumigation Services</td>
			<td><input type="checkbox" <?php if($chkProjectCargo==1) echo 'checked';?>/>&nbsp;Project Cargo Handling</td>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkSupplyChain==1) echo 'checked';?>/>&nbsp;Supply Chain Management</td>
			<td><input type="checkbox" <?php if($chkConsultants==1) echo 'checked';?>/>&nbsp;Consultants & Surveyors</td>
			<td><input type="checkbox" <?php if($chkShipManagers==1) echo 'checked';?>/>&nbsp;Ship Managers</td>
			<td><input type="checkbox" <?php if($chkMaritimeSchool==1) echo 'checked';?>/>&nbsp;Maritime Schools</td>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkMarineInsurance==1) echo 'checked';?>/>&nbsp;Marine Insurance</td>
			<td><input type="checkbox" <?php if($chkMaritimeLawyers==1) echo 'checked';?>/>&nbsp;Maritime Lawyers</td>
			<td><input type="checkbox" <?php if($chkClassification==1) echo 'checked';?>/>&nbsp;Classification Societies</td>
			<td><input type="checkbox" <?php if($chkTowage==1) echo 'checked';?>/>&nbsp;Towage & Salvage</td>
		</tr>
		<tr>
			<td><input type="checkbox" <?php if($chkOffshore==1) echo 'checked';?>/>&nbsp;Offshore/Onshore Marine Equipment</td>
		</tr>
		<?php if($status==0){?>
		<tr>
			<td><input type="submit" name="btnActivate" value="Activate"/></td>
		</tr>
		<?php } ?>
	</table>
</form>
</div>
<div class="right">&nbsp; </div>
<?php
include("../includes/footer.php");
?>