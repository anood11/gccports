<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("airline_search_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="airline_search.php" method="post" name="formSearchairline">
<div class="center">
	<h1 class="newsHead">Search airlines &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Airline Name</label></li>
		<li><input type="text" name="name" value="<?php echo $airlineName;?>"/></li>
		<li><label>IATA Code</label></li>
		<li><input type="text" name="iata" value="<?php echo $airlineIATA;?>"/></li>
		<li><label>ICAO</label></li>
		<li><input type="text" name="icao" value="<?php echo $airlineICAO;?>" /></li>
		<li><label>AWB Prefix</label></li>
		<li><input type="text" name="awb" value="<?php echo $awbPrefix;?>" /></li>
		<li><label>Country</label></li>
		<li><select name="country">
			<option>Select Country</option>
			<?php while($airline=$db->sql_fetchrow($airlineCountryList1)){?>
					<option value="<?php echo $airline['country'];?>" <?php if($airlineCountry==$airline['country']) echo "selected";?>><?php echo $airline['country'];?></option>
					<?php } ?>
		</select></li>
		<li><label>Sort By</label></li>
		<li><select name="airlineCategory">
			<option value="airlineId" <?php if($airlineSort=='airlineId') echo "selected";?>>None</option>
			<option value="airlineName"  <?php if($airlineSort=='airlineName') echo "selected";?>>Airline Name</option>
			<option value="iata"  <?php if($airlineSort=='iata') echo "selected";?>>IATA Code</option>
			<option value="icao"  <?php if($airlineSort=='icao') echo "selected";?> >ICAO Code</option>
			<option value="awbPrefix"  <?php if($airlineSort=='awbPrefix') echo "selected";?>>AWB Prefix</option>
			<option value="country"  <?php if($airlineSort=='country') echo "selected";?>>Country</option>
			</select>
		</li>
		<li><input type="submit" value="Modify" name="btnairlineSearch"/></li>
	</ul>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<?php if($airlineSort=='iata'){?>
		<tr>
			<th>IATA Code</th>
			<th>Airline Name</th>
			<th>ICAO Code</th>
			<th>AWB Prefix</th>
			<th>Country</th>
		</tr>
		<?php if($db->sql_numrows($airlineSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airlineSearchResults)){ ?>
		<tr>
			<td><?php echo $search['iata'];?></td>
			<td><?php echo $search['airlineName'];?></td>
			<td><?php echo $search['icao'];?></td>
			<td><?php echo $search['awbPrefix'];?></td>
			<td><?php echo $search['country'];?></td>
		</tr> 
		
		<?php }} else if($airlineSort=='icao'){?>
		<tr>
			<th>ICAO Code</th>
			<th>Airline Name</th>
			<th>IATA Code</th>
			<th>AWB Prefix</th>
			<th>Country</th>
		</tr>
		<?php if($db->sql_numrows($airlineSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airlineSearchResults)){ ?>
		<tr>
			<td><?php echo $search['icao'];?></td>
			<td><?php echo $search['airlineName'];?></td>
			<td><?php echo $search['iata'];?></td>
			<td><?php echo $search['awbPrefix'];?></td>
			<td><?php echo $search['country'];?></td>
		</tr>
		<?php }} else if($airlineSort=='awbPrefix'){?>
			<tr>
			<th>AWB Prefix</th>
			<th>Airline Name</th>
			<th>IATA Code</th>
			<th>ICAO Code</th>
			<th>Country</th>
		</tr>
		<?php if($db->sql_numrows($airlineSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airlineSearchResults)){ ?>
		<tr>
			<td><?php echo $search['awbPrefix'];?></td>
			<td><?php echo $search['airlineName'];?></td>
			<td><?php echo $search['iata'];?></td>
			<td><?php echo $search['icao'];?></td>
			<td><?php echo $search['country'];?></td>
		</tr> 
	
		<?php }} else if($airlineSort=='country'){?>
		<tr>
			<th>Country</th>
			<th>Airline Name</th>
			<th>IATA Code</th>
			<th>ICAO Code</th>
			<th>AWB Prefix</th>
			
		</tr>
		<?php if($db->sql_numrows($airlineSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airlineSearchResults)){ ?>
		<tr>
			<td><?php echo $search['country'];?></td>
			<td><?php echo $search['airlineName'];?></td>
			<td><?php echo $search['iata'];?></td>
			<td><?php echo $search['icao'];?></td>
			<td><?php echo $search['awbPrefix'];?></td>
		</tr> 
	
		<?php }} else{ ?>
		<tr>
			<th>Airline Name</th>
			<th>IATA Code</th>
			<th>ICAO Code</th>
			<th>AWB Prefix</th>
			<th>Country</th>
		</tr>
		<?php if($db->sql_numrows($airlineSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airlineSearchResults)){ ?>
		<tr>
			<td><?php echo $search['airlineName'];?></td>
			<td><?php echo $search['iata'];?></td>
			<td><?php echo $search['icao'];?></td>
			<td><?php echo $search['awbPrefix'];?></td>
			<td><?php echo $search['country'];?></td>
		</tr> 
		
		<?php }} ?>
		
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
