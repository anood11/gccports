<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("airport_directory_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="airport_directory.php" method="post" name="formSearchAirport">
<div class="center">
	<h1 class="newsHead">Search Airport Directory &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Name</label></li>
		<li><input type="text" name="name" value="<?php echo $airportName;?>"/></li>
		<li><label>Address</label></li>
		<li><input type="text" name="address" value="<?php echo $airportAddress;?>"/></li>
		<li><label>Phone</label></li>
		<li><input type="text" name="phone" value="<?php echo $airportPhone;?>" /></li>
		<li  style="width: 80px"><label>Country</label></li>
		<li><select name="country">
			<option value="-1">Select Country</option>
			<?php while($airport=$db->sql_fetchrow($airportDirectoryCountryList)){?>
					<option value="<?php echo $airport['country'];?>" <?php if($airportCountry==$airport['country']) echo "selected";?>><?php echo $airport['country'];?></option>
					<?php } ?>
		</select></li>
		<li><label>Sort By</label></li>
		<li><select name="airportCategory">
			<option value="airportDirectoryId" <?php if($airportSort=='airportDirectoryId') echo "selected";?>>None</option>
			<option value="name"  <?php if($airportSort=='name') echo "selected";?>>Name</option>
			<option value="country"  <?php if($airportSort=='country') echo "selected";?>>Country</option>
			<option value="address"  <?php if($airportSort=='address') echo "selected";?>>Address</option>
			<option value="phone"  <?php if($airportSort=='phone') echo "selected";?> >Phone</option>
			<option value="email"  <?php if($airportSort=='email') echo "selected";?>>Email</option>
			<option value="fax"  <?php if($airportSort=='phone') echo "selected";?> >Fax</option>
			<option value="website"  <?php if($airportSort=='email') echo "selected";?>>Website</option>
			</select>
		</li>
		<li><input type="submit" value="Modify" name="btnAirPortSearch"/></li>
	</ul>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<?php if($airportSort=='country') {?>
		<tr>
			<th>Country</th>
			<th>Name</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Fax</th>
			<th>Email</th>
			<th>Website</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['name'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['email'];?></td>
			<td><?php echo $search['website'];?></td>
		</tr> 
		
		<?php }} else if($airportSort=='address') {?>
		<tr>
			<th>Address</th>
			<th>Country</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Fax</th>
			<th>Email</th>
			<th>Website</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['address'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['name'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['email'];?></td>
			<td><?php echo $search['website'];?></td>
		</tr>
		<?php }} else if($airportSort=='phone') {?>
		<tr>
			<th>Phone</th>
			<th>Address</th>
			<th>Country</th>
			<th>Name</th>
			<th>Fax</th>
			<th>Email</th>
			<th>Website</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['name'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['email'];?></td>
			<td><?php echo $search['website'];?></td>
		</tr> 
		
		<?php }}  else if($airportSort=='fax') {?>
		<tr>
			<th>Fax</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Country</th>
			<th>Name</th>
			<th>Email</th>
			<th>Website</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['name'];?></td>
			<td><?php echo $search['email'];?></td>
			<td><?php echo $search['website'];?></td>
		</tr>
		<?php }}  else if($airportSort=='email') {?>
		<tr>
			<th>Email</th>
			<th>Fax</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Country</th>
			<th>Name</th>
			<th>Website</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['email'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['name'];?></td>
			<td><?php echo $search['website'];?></td>
		</tr>
		<?php }}  else if($airportSort=='website') {?>
		<tr>
			<th>Website</th>
			<th>Fax</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Country</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['website'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['name'];?></td>
			<td><?php echo $search['email'];?></td>
		</tr>
		<?php }} else { ?>
		
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Website</th>
			<th>Fax</th>
			<th>Phone</th>
			<th>Country</th>
			<th>Email</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['name'];?></td>
			<td><?php echo $search['address'];?></td>
			<td><?php echo $search['website'];?></td>
			<td><?php echo $search['fax'];?></td>
			<td><?php echo $search['phone'];?></td>
			<td><?php echo $search['country'];?></td>
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