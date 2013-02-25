<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("telephone_codes_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="telephone_codes.php" method="post" name="formSearchTelephoneCodes">
<div class="center">
	<h1 class="newsHead">Search Telephone codes &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Telephone code</label></li>
		<li><input type="text" name="name" value="<?php echo $telephoneCode;?>"/></li>
		<li><label>Internet IP</label></li>
		<li><input type="text" name="ip" value="<?php echo $internetIP;?>" /></li>
		<li><label>Country</label></li>
		<li><select name="country">
			<option value="-1">Select Country</option>
			<?php while($telephone=$db->sql_fetchrow($telephoneCountryList)){?>
					<option value="<?php echo $telephone['country'];?>" <?php if($telephoneCountry==$telephone['country']) echo "selected";?>><?php echo $telephone['country'];?></option>
					<?php } ?>
		</select></li>
		<li><label>Sort By</label></li>
		<li><select name="telephoneCategory">
			<option value="telephoneId" <?php if($telephoneSort=='telephoneId') echo "selected";?>>None</option>
			<option value="country"  <?php if($telephoneSort=='country') echo "selected";?>>Country</option>
			<option value="telephoneCode"  <?php if($telephoneSort=='telephoneCode') echo "selected";?>>Telephone Code</option>
			<option value="internetIP"  <?php if($telephoneSort=='internetIP') echo "selected";?> >Internet IP</option>
			</select>
		</li>
		<li><input type="submit" value="Search" name="btnTelephoneSearch"/></li>
	</ul>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<?php if($telephoneSort=='country') {?>
		<tr>
			<th>Country</th>
			<th>Telephone Code</th>
			<th>Internet IP</th>
		</tr>
		<?php if($db->sql_numrows($telephoneSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($telephoneSearchResults)){ ?>
		<tr>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['telephoneCode'];?></td>
			<td><?php echo $search['internetIP'];?></td>
		</tr> 
		<?php }} else if($telephoneSort=='internetIP') {?>
		<tr>
			<th>Internet IP</th>
			<th>Telephone Code</th>
			<th>Country</th>
		</tr>
		<?php if($db->sql_numrows($telephoneSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($telephoneSearchResults)){ ?>
		<tr>
			<td><?php echo $search['internetIP'];?></td>
			<td><?php echo $search['telephoneCode'];?></td>
			<td><?php echo $search['country'];?></td>
		</tr>
		<?php }} else { ?>
		<tr>
			<th>Telephone Code</th>
			<th>Internet IP</th>
			<th>Country</th>
		</tr>
		<?php if($db->sql_numrows($telephoneSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($telephoneSearchResults)){ ?>
		<tr>
			<td><?php echo $search['telephoneCode'];?></td>
			<td><?php echo $search['internetIP'];?></td>
			<td><?php echo $search['country'];?></td>
		</tr> 
		<?php } }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>