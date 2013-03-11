<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("seaport_search_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="seaport_search.php" method="post" name="formSearchSeaport">
<div class="center">

	<div class="centerBanner">
		<img src="<?php echo $httpPathSite;?>resources/images/ad1.gif" alt="" />
	</div>

	<h1 class="newsHead">Search Results &raquo;</h1>
	<ul class="modifySearch">
		<li><label>Seaport Name</label></li>
		<li><input type="text" name="name" id="name" value=""/></li>
		<li><label>Seaport Code</label></li>
		<li><input type="text" name="code" id="code" value="" /></li>
		<li><label>Country</label></li>
		<li><select name="country" id="country">
			<option value="-1">Select Country</option>
			<?php while($seaport=$db->sql_fetchrow($seaportCountryList1)){?>
					<option value="<?php echo $seaport['country'];?>"><?php echo $seaport['country'];?></option>
					<?php } ?>
		</select></li>
		<!--<li><label>Sort By</label></li>
		<li><select name="seaportCategory" id="seaportCategory">
			<option value="seaportId" <?php if($seaportSort=='seaportId') echo "selected";?>>None</option>
			<option value="seaportName"  <?php if($seaportSort=='seaportName') echo "selected";?>>Seaport Name</option>
			<option value="country"  <?php if($seaportSort=='country') echo "selected";?>>Country</option>
			<option value="code"  <?php if($seaportSort=='code') echo "selected";?> >Seaport Code</option>
			</select>
		</li>-->
		<li><input type="submit" value="Modify" name="btnSeaportSearch"/></li>
	</ul><br/>
	<a id="a" class="lettersSP" href="javascript:void(0);"> A </a><a id="b" class="lettersSP" href='javascript:void(0);'> B </a>
	<a id="c" class="lettersSP" href='javascript:void(0);'> C </a><a id="d" class="lettersSP" href='javascript:void(0);'> D </a>
	<a id="e" class="lettersSP" href='javascript:void(0);'> E </a><a id="f" class="lettersSP" href='javascript:void(0);'> F </a>
	<a id="g" class="lettersSP" href='javascript:void(0);'> G </a><a id="h" class="lettersSP" href='javascript:void(0);'> H </a>
	<a id="i" class="lettersSP" href='javascript:void(0);'> I </a><a id="j" class="lettersSP" href='javascript:void(0);'> J </a>
	<a id="k" class="lettersSP" href='javascript:void(0);'> K </a><a id="l" class="lettersSP" href='javascript:void(0);'> L </a>
	<a id="m" class="lettersSP" href='javascript:void(0);'> M </a><a id="n" class="lettersSP" href='javascript:void(0);'> N </a>
	<a id="o" class="lettersSP" href='javascript:void(0);'> O </a><a id="p" class="lettersSP" href='javascript:void(0);'> P </a>
	<a id="q" class="lettersSP" href='javascript:void(0);'> Q </a><a id="r" class="lettersSP" href='javascript:void(0);'> R </a>
	<a id="s" class="lettersSP" href='javascript:void(0);'> S </a><a id="t" class="lettersSP" href='javascript:void(0);'> T </a>
	<a id="u" class="lettersSP" href='javascript:void(0);'> U </a><a id="v" class="lettersSP" href='javascript:void(0);'> V </a>
	<a id="w" class="lettersSP" href='javascript:void(0);'> W </a><a id="x" class="lettersSP" href='javascript:void(0);'> X </a>
	<a id="y" class="lettersSP" href='javascript:void(0);'> Y </a><a id="z" class="lettersSP" href='javascript:void(0);'> Z </a>
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<?php if($seaportSort=='country') {?>
		<tr>
			<th>Country</th>
			<th>Seaport Name</th>
			<th>Seaport Code</th>
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
		</tr> 
		<?php }}} else if($seaportSort=='code') {?>
		<tr>
			<th>Seaport Code</th>
			<th>Seaport Name</th>
			<th>Country</th>
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
		</tr> 
		<?php }}} else { ?>
		<tr>
			<th>Seaport Name</th>
			<th>Seaport Code</th>
			<th>Country</th>
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
		</tr> 
		<?php } }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>