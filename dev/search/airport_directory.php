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
		<li  style="width: 80px"><label>Country</label></li>
		<li><select name="country">
			<option value="-1">Select Country</option>
			<?php while($airport=$db->sql_fetchrow($airportDirectoryCountryList)){?>
					<option value="<?php echo $airport['country'];?>" <?php if($airportCountry==$airport['country']) echo "selected";?>><?php echo $airport['country'];?></option>
					<?php } ?>
		</select></li>
		<li><input type="submit" value="Modify" name="btnAirPortSearch"/></li>
	</ul>
	<a id="a" class="lettersAD" href="javascript:void(0);"> A </a><a id="b" class="lettersAD" href='javascript:void(0);'> B </a>
	<a id="c" class="lettersAD" href='javascript:void(0);'> C </a><a id="d" class="lettersAD" href='javascript:void(0);'> D </a>
	<a id="e" class="lettersAD" href='javascript:void(0);'> E </a><a id="f" class="lettersAD" href='javascript:void(0);'> F </a>
	<a id="g" class="lettersAD" href='javascript:void(0);'> G </a><a id="h" class="lettersAD" href='javascript:void(0);'> H </a>
	<a id="i" class="lettersAD" href='javascript:void(0);'> I </a><a id="j" class="lettersAD" href='javascript:void(0);'> J </a>
	<a id="k" class="lettersAD" href='javascript:void(0);'> K </a><a id="l" class="lettersAD" href='javascript:void(0);'> L </a>
	<a id="m" class="lettersAD" href='javascript:void(0);'> M </a><a id="n" class="lettersAD" href='javascript:void(0);'> N </a>
	<a id="o" class="lettersAD" href='javascript:void(0);'> O </a><a id="p" class="lettersAD" href='javascript:void(0);'> P </a>
	<a id="q" class="lettersAD" href='javascript:void(0);'> Q </a><a id="r" class="lettersAD" href='javascript:void(0);'> R </a>
	<a id="s" class="lettersAD" href='javascript:void(0);'> S </a><a id="t" class="lettersAD" href='javascript:void(0);'> T </a>
	<a id="u" class="lettersAD" href='javascript:void(0);'> U </a><a id="v" class="lettersAD" href='javascript:void(0);'> V </a>
	<a id="w" class="lettersAD" href='javascript:void(0);'> W </a><a id="x" class="lettersAD" href='javascript:void(0);'> X </a>
	<a id="y" class="lettersAD" href='javascript:void(0);'> Y </a><a id="z" class="lettersAD" href='javascript:void(0);'> Z </a>
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
	<tr>
			<th>Country</th>
	</tr>
	<?php if($db->sql_numrows($airportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($airportSearchResults)){ ?>
		<tr>
			<td><a href="<?php echo $httpPathSite;?>details/airport_details.php?id=<?php echo $search['airportDirectoryId'];?>" target="_blank"><?php echo $search['name'];?></a></td>
		</tr>
		<?php } ?> 
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>