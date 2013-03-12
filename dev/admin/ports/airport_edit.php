<?php 
include("../includes/globals.php");
include("../../includes/lib/db_ports.php");  
include("../../includes/lib/db_sidebar.php");    
include("airport_edit_action.php");
include("../includes/header.php");?>
<div class="left">&nbsp; </div>
<div class="center">
		<ul class="newsSection">
			<li class="large">
			<form name="formLogin" action="airport_edit.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>"/>
		    <ul class="adminCentre">
				<li class="adminCentreHead">Airport</li>
				<li class="displayMesg"><?php echo $displayMessage;?></li>
				<li class="adminFields">Airport name</li>
				<li class="adminInput"><input type="text" name="name" value="<?php echo $name;?>"></li>
				<li class="adminFields">Airport Code</li>
				<li class="adminInput"><input type="text" name="code" value="<?php echo $code;?>"></li>
				<li class="adminFields">Country</li>
				<li class="adminInput"><?php echo $country;?>
					<select name="countryz">
						<?php while($country=$db->sql_fetchrow($countryList)){?>
						<option value="<?php echo $country['countryName'];?>" <?php if(trim($country['countryName'])==$country) echo 'selected';?>><?php echo $country['countryName'];?></option>
						<?php }?>
					</select>
				</li>
				<li class="adminFields">Country Abbreviation</li>
				<li class="adminInput">
					<select name="countryab">
						<?php while($countryab=$db->sql_fetchrow($countryListAb)){?>
						<option value="<?php echo $countryab['countryCode'];?>" <?php if($countryab['countryCode']==$countryab) echo 'selected';?>><?php echo $countryab['countryCode'];?></option>
						<?php }?>
					</select>
				</li>
				<li class="adminFields">City</li>
				<li class="adminInput"><input type="text" name="city" value="<?php echo $city;?>"></li>
				<li class="adminInput"><input type="submit" name="btnUpdate" value="SAVE" class="button"></li>
			</ul>
			</form>
			</li>
		</ul>
	</div>
<div class="right">&nbsp; </div>
<?php include("../includes/footer.php");?>