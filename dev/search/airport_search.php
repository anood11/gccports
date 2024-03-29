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

	<div class="centerBanner">
		<img src="<?php echo $httpPathSite;?>resources/images/ad1.gif" alt="" />
	</div>

	<h1 class="newsHead">Search Airports &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Airport Name</label></li>
		<li><input type="text" name="name" id="name" value=""/></li>
		<li><label>City Name</label></li>
		<li><input type="text" name="city" id="city" value=""/></li>
		<li><label>Airport Code</label></li>
		<li><input type="text" name="code" id="code" value="" /></li>
		<li><label>Country</label></li>
		<li><select name="country" id="country">
			<option value="-1">Select Country</option>
			<?php while($airport=$db->sql_fetchrow($airportCountryList1)){?>
					<option value="<?php echo $airport['country'];?>"><?php echo $airport['country'];?></option>
					<?php } ?>
		</select></li>
		<li><label>Country Abbreviation</label></li>
		<li><select name="abbrv" id="abbrv">
			<option value="-1">Select Abbreviation</option>
			<?php while($abbrv=$db->sql_fetchrow($airportCountryAbbreviations1)){?>
					<option value="<?php echo $abbrv['countryAbbreviation'];?>"><?php echo $abbrv['countryAbbreviation'];?></option>
			<?php } ?>
		</select></li>
		<!--<li><label>Sort By</label></li>
		<li><select name="airportCategory" id="airportCategory">
			<option value="airportID" <?php if($airportSort=='airportID') echo "selected";?>>None</option>
			<option value="airportName"  <?php if($airportSort=='airportName') echo "selected";?>>Airport Name</option>
			<option value="airportCode"  <?php if($airportSort=='airportCode') echo "selected";?>>Airport Code</option>
			<option value="cityName"  <?php if($airportSort=='cityName') echo "selected";?> >City Name</option>
			<option value="country"  <?php if($airportSort=='country') echo "selected";?>>Country</option>
			<option value="countryAbbreviation"  <?php if($airportSort=='countryAbbreviation') echo "selected";?>>Country Abbreviation</option>
			</select>
		</li>-->
		<li><input type="submit" value="Modify" name="btnAirPortSearch"/></li>
	</ul><br/>
	<a id="a" class="lettersAP" href="javascript:void(0);"> A </a><a id="b" class="lettersAP" href='javascript:void(0);'> B </a>
	<a id="c" class="lettersAP" href='javascript:void(0);'> C </a><a id="d" class="lettersAP" href='javascript:void(0);'> D </a>
	<a id="e" class="lettersAP" href='javascript:void(0);'> E </a><a id="f" class="lettersAP" href='javascript:void(0);'> F </a>
	<a id="g" class="lettersAP" href='javascript:void(0);'> G </a><a id="h" class="lettersAP" href='javascript:void(0);'> H </a>
	<a id="i" class="lettersAP" href='javascript:void(0);'> I </a><a id="j" class="lettersAP" href='javascript:void(0);'> J </a>
	<a id="k" class="lettersAP" href='javascript:void(0);'> K </a><a id="l" class="lettersAP" href='javascript:void(0);'> L </a>
	<a id="m" class="lettersAP" href='javascript:void(0);'> M </a><a id="n" class="lettersAP" href='javascript:void(0);'> N </a>
	<a id="o" class="lettersAP" href='javascript:void(0);'> O </a><a id="p" class="lettersAP" href='javascript:void(0);'> P </a>
	<a id="q" class="lettersAP" href='javascript:void(0);'> Q </a><a id="r" class="lettersAP" href='javascript:void(0);'> R </a>
	<a id="s" class="lettersAP" href='javascript:void(0);'> S </a><a id="t" class="lettersAP" href='javascript:void(0);'> T </a>
	<a id="u" class="lettersAP" href='javascript:void(0);'> U </a><a id="v" class="lettersAP" href='javascript:void(0);'> V </a>
	<a id="w" class="lettersAP" href='javascript:void(0);'> W </a><a id="x" class="lettersAP" href='javascript:void(0);'> X </a>
	<a id="y" class="lettersAP" href='javascript:void(0);'> Y </a><a id="z" class="lettersAP" href='javascript:void(0);'> Z </a>
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