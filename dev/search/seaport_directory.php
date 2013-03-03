<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("seaport_directory_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="seaport_directory.php" method="post" name="formSearchSeaport">
<div class="center">
	<h1 class="newsHead">Search Seaport directory &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Name</label></li>
		<li><input type="text" name="name" value="<?php echo $seaportName;?>"/></li>
		<li><label>Address</label></li>
		<li><input type="text" name="address" value="<?php echo $seaportAddress;?>"/></li>
		<li><label>Location</label></li>
		<li><input type="text" name="location" value="<?php echo $seaportLocation;?>" /></li>
		<li><label>Country</label></li>
		<li><select name="country">
			<option value="-1">Select Country</option>
			<?php while($seaport=$db->sql_fetchrow($seaportDirectoryCountryList)){?>
					<option value="<?php echo $seaport['country'];?>" <?php if($seaportCountry==$seaport['country']) echo "selected";?>><?php echo $seaport['country'];?></option>
					<?php } ?>
		</select></li>
		<li><label>Sort By</label></li>
		<li><select name="seaportCategory">
			<option value="seaportDirectoryId" <?php if($seaportSort=='seaportDirectoryId') echo "selected";?>>None</option>
			<option value="name"  <?php if($seaportSort=='name') echo "selected";?>>Name</option>
			<option value="address"  <?php if($seaportSort=='address') echo "selected";?>>Address</option>
			<option value="location"  <?php if($seaportSort=='location') echo "selected";?> >Location</option>
			<option value="country"  <?php if($seaportSort=='country') echo "selected";?>>Country</option>
			</select>
		</li>
		<li><input type="submit" value="Modify" name="btnAirPortSearch"/></li>
	</ul>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<?php if($seaportSort=='address') {?>
		<tr>
			<th>Address</th>
			<th>Name</th>
			<th>Location</th>
			<th>Country</th>
			<th>Phone</th>
			<th>Fax</th>
			<th>Email</th>
		</tr>
		<?php if($db->sql_numrows($seaportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($seaportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['address'];?></td>
			<td><a href="<?php echo 'http://'.$search['website'];?>" target="_blank"><?php echo $search['name'];?></a></td>
			<td><?php echo $search['location'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['email'];?></td>
		</tr> 
		
		<?php }} else if($seaportSort=='location') {?>
		<tr>
			<th>Location</th>
			<th>Address</th>
			<th>Name</th>
			<th>Country</th>
			<th>Phone</th>
			<th>Fax</th>
			<th>Email</th>
		</tr>
		<?php if($db->sql_numrows($seaportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($seaportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['location'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><a href="<?php echo 'http://'.$search['website'];?>" target="_blank"><?php echo $search['name'];?></a></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['email'];?></td>
		</tr>
		<?php }} else if($seaportSort=='country') {?>
		<tr>
			<th>Country</th>
			<th>Address</th>
			<th>Name</th>
			<th>Location</th>
			<th>Phone</th>
			<th>Fax</th>
			<th>Email</th>
		</tr>
		<?php if($db->sql_numrows($seaportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($seaportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><a href="<?php echo 'http://'.$search['website'];?>" target="_blank"><?php echo $search['name'];?></a></td>
			<td><?php echo $search['location'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['email'];?></td>
		</tr> 
		<?php }} else { ?>
		<tr>
			<th>Name</th>
			<th>Country</th>
			<th>Address</th>
			<th>Location</th>
			<th>Phone</th>
			<th>Fax</th>
			<th>Email</th>
		</tr>
		<?php if($db->sql_numrows($seaportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($seaportSearchResults)){ ?>
		<tr>
			<td><a href="<?php echo 'http://'.$search['website'];?>" target="_blank"><?php echo $search['name'];?></a></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><?php echo $search['location'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['email'];?></td>
		</tr> 
		<?php } }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>