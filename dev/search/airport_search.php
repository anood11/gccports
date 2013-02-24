<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("airport_search_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="airport_search.php" method="post" name="formSearchAirport">
<div class="center">
	<h1 class="newsHead">Search Airports &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Airport Name</label></li>
		<li><input type="text" name="name" value="<?php echo $airportName;?>"/></li>
		<li><label>City Name</label></li>
		<li><input type="text" name="city" value="<?php echo $airportCity;?>"/></li>
		<li><label>Airport Code</label></li>
		<li><input type="text" name="code" value="<?php echo $airportCode;?>" /></li>
		<li><label>Country</label></li>
		<li><select name="country">
			<option value="-1">Select Country</option>
			<?php while($airport=$db->sql_fetchrow($airportCountryList1)){?>
					<option value="<?php echo $airport['country'];?>" <?php if($airportCountry==$airport['country']) echo "selected";?>><?php echo $airport['country'];?></option>
					<?php } ?>
		</select></li>
		<li><label>Country Abbreviation</label></li>
		<li><select name="abbrv">
			<option value="-1">Select Abbreviation</option>
			<?php while($abbrv=$db->sql_fetchrow($airportCountryAbbreviations1)){?>
					<option value="<?php echo $abbrv['countryAbbreviation'];?>" <?php if($airportCountryAbbreviation==$abbrv['countryAbbreviation']) echo "selected";?>><?php echo $abbrv['countryAbbreviation'];?></option>
					<?php } ?>
		</select></li>
		<li><label>Sort By</label></li>
		<li><select name="airportCategory">
			<option value="airportID" <?php if($airportSort=='airportID') echo "selected";?>>None</option>
			<option value="airportName"  <?php if($airportSort=='airportName') echo "selected";?>>Airport Name</option>
			<option value="airportCode"  <?php if($airportSort=='airportCode') echo "selected";?>>Airport Code</option>
			<option value="cityName"  <?php if($airportSort=='cityName') echo "selected";?> >City Name</option>
			<option value="country"  <?php if($airportSort=='country') echo "selected";?>>Country</option>
			<option value="countryAbbreviation"  <?php if($airportSort=='countryAbbreviation') echo "selected";?>>Country Abbreviation</option>
			</select>
		</li>
		<li><input type="submit" value="Modify" name="btnAirPortSearch"/></li>
	</ul>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<?php if($airportSort=='airportCode') {?>
		<tr>
			<th>Airport Code</th>
			<th>Airport Name</th>
			<th>City Name</th>
			<th>Country</th>
			<th>Country Code</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['airportCode'];?></td>
			<td><?php echo $search['airportName'];?></td>
			<td><?php echo $search['cityName'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['countryAbbreviation'];?></td>
		</tr> 
		
		<?php }} else if($airportSort=='cityName') {?>
		<tr>
			<th>City Name</th>
			<th>Airport Name</th>
			<th>Airport Code</th>
			<th>Country</th>
			<th>Country Code</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['cityName'];?></td>
			<td><?php echo $search['airportName'];?></td>
			<td><?php echo $search['airportCode'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['countryAbbreviation'];?></td>
		</tr>
		<?php }} else if($airportSort=='country') {?>
		<tr>
			<th>Country</th>
			<th>Airport Name</th>
			<th>Airport Code</th>
			<th>City Name</th>
			<th>Country Code</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['airportName'];?></td>
			<td><?php echo $search['airportCode'];?></td>
			<td><?php echo $search['cityName'];?></td>
			<td><?php echo $search['countryAbbreviation'];?></td>
		</tr> 
		
		<?php }}  else if($airportSort=='countryAbbreviation') {?>
		<tr>
			<th>Country Code</th>
			<th>Airport Name</th>
			<th>Airport Code</th>
			<th>City Name</th>
			<th>Country</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['countryAbbreviation'];?></td>
			<td><?php echo $search['airportName'];?></td>
			<td><?php echo $search['airportCode'];?></td>
			<td><?php echo $search['cityName'];?></td>
			<td><?php echo $search['country'];?></td>
		</tr>
		<?php }} else { ?>
		
		<tr>
			<th>Airport Name</th>
			<th>Airport Code</th>
			<th>City Name</th>
			<th>Country</th>
			<th>Country Code</th>
		</tr>
		<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><?php echo $search['airportName'];?></td>
			<td><?php echo $search['airportCode'];?></td>
			<td><?php echo $search['cityName'];?></td>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['countryAbbreviation'];?></td>
		</tr> 
		<?php } }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>