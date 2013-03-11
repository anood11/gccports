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
	
	<div class="centerBanner">
		<img src="<?php echo $httpPathSite;?>resources/images/ad1.gif" alt="" />
	</div>
	
	<h1 class="newsHead">Search airlines &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Airline Name</label></li>
		<li><input type="text" name="name" id="name" value="<?php echo $airlineName;?>"/></li>
		<li><label>IATA Code</label></li>
		<li><input type="text" name="iata" id="iata" value="<?php echo $airlineIATA;?>"/></li>
		<li><label>ICAO</label></li>
		<li><input type="text" name="icao" id="icao" value="<?php echo $airlineICAO;?>" /></li>
		<li><label>AWB Prefix</label></li>
		<li><input type="text" name="awb" id="awb" value="<?php echo $awbPrefix;?>" /></li>
		<li><label>Country</label></li>
		<li><select name="country" id="country">
			<option value="-1">Select Country</option>
			<?php while($airline=$db->sql_fetchrow($airlineCountryList1)){?>
					<option value="<?php echo $airline['country'];?>" <?php if($airlineCountry==$airline['country']) echo "selected";?>><?php echo $airline['country'];?></option>
					<?php } ?>
		</select></li>
		<li><label>Sort By</label></li>
		<li><select name="airlineCategory" id="airlineCategory">
			<option value="airlineId" <?php if($airlineSort=='airlineId') echo "selected";?>>None</option>
			<option value="airlineName"  <?php if($airlineSort=='airlineName') echo "selected";?>>Airline Name</option>
			<option value="iata"  <?php if($airlineSort=='iata') echo "selected";?>>IATA Code</option>
			<option value="icao"  <?php if($airlineSort=='icao') echo "selected";?> >ICAO Code</option>
			<option value="awbPrefix"  <?php if($airlineSort=='awbPrefix') echo "selected";?>>AWB Prefix</option>
			<option value="country"  <?php if($airlineSort=='country') echo "selected";?>>Country</option>
			</select>
		</li>
		<li><input type="submit" value="Modify" name="btnairlineSearch"/></li>
	</ul><br/>
	<a id="a" class="lettersAL" href="javascript:void(0);"> A </a><a id="b" class="lettersAL" href='javascript:void(0);'> B </a>
	<a id="c" class="lettersAL" href='javascript:void(0);'> C </a><a id="d" class="lettersAL" href='javascript:void(0);'> D </a>
	<a id="e" class="lettersAL" href='javascript:void(0);'> E </a><a id="f" class="lettersAL" href='javascript:void(0);'> F </a>
	<a id="g" class="lettersAL" href='javascript:void(0);'> G </a><a id="h" class="lettersAL" href='javascript:void(0);'> H </a>
	<a id="i" class="lettersAL" href='javascript:void(0);'> I </a><a id="j" class="lettersAL" href='javascript:void(0);'> J </a>
	<a id="k" class="lettersAL" href='javascript:void(0);'> K </a><a id="l" class="lettersAL" href='javascript:void(0);'> L </a>
	<a id="m" class="lettersAL" href='javascript:void(0);'> M </a><a id="n" class="lettersAL" href='javascript:void(0);'> N </a>
	<a id="o" class="lettersAL" href='javascript:void(0);'> O </a><a id="p" class="lettersAL" href='javascript:void(0);'> P </a>
	<a id="q" class="lettersAL" href='javascript:void(0);'> Q </a><a id="r" class="lettersAL" href='javascript:void(0);'> R </a>
	<a id="s" class="lettersAL" href='javascript:void(0);'> S </a><a id="t" class="lettersAL" href='javascript:void(0);'> T </a>
	<a id="u" class="lettersAL" href='javascript:void(0);'> U </a><a id="v" class="lettersAL" href='javascript:void(0);'> V </a>
	<a id="w" class="lettersAL" href='javascript:void(0);'> W </a><a id="x" class="lettersAL" href='javascript:void(0);'> X </a>
	<a id="y" class="lettersAL" href='javascript:void(0);'> Y </a><a id="z" class="lettersAL" href='javascript:void(0);'> Z </a>
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
