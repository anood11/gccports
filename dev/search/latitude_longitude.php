<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("latitude_longitude_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="latitude_longitude.php" method="post" name="formSearchSeaport">
<div class="center">

	<div class="centerBanner">
		<img src="<?php echo $httpPathSite;?>resources/images/ad1.gif" alt="" />
	</div>

	<h1 class="newsHead">Latitude & Longitude &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Seaport Name</label></li>
		<li><input type="text" name="name" value=""/></li>
		<li><label>Seaport Code</label></li>
		<li><input type="text" name="code" value="" /></li>
		<li><label>Country</label></li>
		<li><select name="country">
			<option value="-1">Select Country</option>
			<?php while($seaport=$db->sql_fetchrow($seaportCountryList1)){?>
					<option value="<?php echo $seaport['country'];?>"><?php echo $seaport['country'];?></option>
					<?php } ?>
		</select></li>
		<!--<li><label>Sort By</label></li>
		<li><select name="seaportCategory">
			<option value="seaportId" <?php if($seaportSort=='seaportId') echo "selected";?>>None</option>
			<option value="seaportName"  <?php if($seaportSort=='seaportName') echo "selected";?>>Seaport Name</option>
			<option value="country"  <?php if($seaportSort=='country') echo "selected";?>>Country</option>
			<option value="code"  <?php if($seaportSort=='code') echo "selected";?> >Seaport Code</option>
			</select>
		</li>-->
		<li><input type="submit" value="Modify" name="btnSeaportSearch"/></li>
	</ul>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<?php if($seaportSort=='country') {?>
		<tr>
			<th>Country</th>
			<th>Seaport Name</th>
			<th>Seaport Code</th>
			<th>Latitude</th>
			<th>Longitude</th>
		</tr>
		<?php if($db->sql_numrows($seaportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php }else{ while($search=$db->sql_fetchrow($seaportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['seaportName'];?></td>
			<td><?php echo $search['code'];?></td>
			<td><?php echo $search['latitude'];?></td>
			<td><?php echo $search['longitude'];?></td>
		</tr> 
		
		<?php }}} else if($seaportSort=='code') {?>
		<tr>
			<th>Seaport Code</th>
			<th>Seaport Name</th>
			<th>Country</th>
			<th>Latitude</th>
			<th>Longitude</th>
		</tr>
		<?php if($db->sql_numrows($seaportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php }else{ while($search=$db->sql_fetchrow($seaportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['code'];?></td>
			<td><?php echo $search['seaportName'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['latitude'];?></td>
			<td><?php echo $search['longitude'];?></td>
		</tr> 
		
		<?php }}} else { ?>
		<tr>
			<th>Seaport Name</th>
			<th>Seaport Code</th>
			<th>Country</th>
			<th>Latitude</th>
			<th>Longitude</th>
		</tr>
		<?php if($db->sql_numrows($seaportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($seaportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['seaportName'];?></td>
			<td><?php echo $search['code'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['latitude'];?></td>
			<td><?php echo $search['longitude'];?></td>
		</tr> 
		<?php } }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>