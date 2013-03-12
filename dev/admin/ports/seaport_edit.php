<?php 
include("../includes/globals.php");
include("../../includes/lib/db_ports.php");  
include("../../includes/lib/db_sidebar.php");    
include("seaport_edit_action.php");
include("../includes/header.php");?>
<div class="left">&nbsp; </div>
<div class="center">
		<ul class="newsSection">
			<li class="large">
			<form name="formLogin" action="seaport_edit.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>"/>
		    <ul class="adminCentre">
				<li class="adminCentreHead">Seaport</li>
				<li class="displayMesg"><?php echo $displayMessage;?></li>
				<li class="adminFields">Seaport name</li>
				<li class="adminInput"><input type="text" name="name" value="<?php echo $seaportName;?>"></li>
				<li class="adminFields">Country</li>
				<li class="adminInput">
					<select name="country">
						<?php while($country=$db->sql_fetchrow($countryList)){?>
						<option value="<?php echo $country['countryName'];?>" <?php if($country['countryName']==$seaportCountry) echo 'selected';?>><?php echo $country['countryName'];?></option>
						<?php }?>
					</select>
				</li>
				<li class="adminFields">Code</li>
				<li class="adminInput"><input type="text" name="code" value="<?php echo $code;?>"></li>
				<li class="adminFields">Longitude</li>
				<li class="adminInput"><input type="text" name="longitude" value="<?php echo $longitude;?>"></li>
				<li class="adminFields">Latitude</li>
				<li class="adminInput"><input type="text" name="latitude" value="<?php echo $latitude;?>"></li>
				<li class="adminInput"><input type="submit" name="btnUpdate" value="SAVE" class="button"></li>
			</ul>
			</form>
			</li>
		</ul>
	</div>
<div class="right">&nbsp; </div>
<?php include("../includes/footer.php");?>