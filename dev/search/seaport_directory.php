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
		<li><label>Country</label></li>
		<li><select name="country">
			<option value="-1">Select Country</option>
			<?php while($seaport=$db->sql_fetchrow($seaportDirectoryCountryList)){?>
					<option value="<?php echo $seaport['country'];?>" <?php if($seaportCountry==$seaport['country']) echo "selected";?>><?php echo $seaport['country'];?></option>
					<?php } ?>
		</select></li>
		<li><input type="submit" value="Modify" name="btnAirPortSearch"/></li>
	</ul>
	<a id="a" class="lettersSD" href="javascript:void(0);"> A </a><a id="b" class="lettersSD" href='javascript:void(0);'> B </a>
	<a id="c" class="lettersSD" href='javascript:void(0);'> C </a><a id="d" class="lettersSD" href='javascript:void(0);'> D </a>
	<a id="e" class="lettersSD" href='javascript:void(0);'> E </a><a id="f" class="lettersSD" href='javascript:void(0);'> F </a>
	<a id="g" class="lettersSD" href='javascript:void(0);'> G </a><a id="h" class="lettersSD" href='javascript:void(0);'> H </a>
	<a id="i" class="lettersSD" href='javascript:void(0);'> I </a><a id="j" class="lettersSD" href='javascript:void(0);'> J </a>
	<a id="k" class="lettersSD" href='javascript:void(0);'> K </a><a id="l" class="lettersSD" href='javascript:void(0);'> L </a>
	<a id="m" class="lettersSD" href='javascript:void(0);'> M </a><a id="n" class="lettersSD" href='javascript:void(0);'> N </a>
	<a id="o" class="lettersSD" href='javascript:void(0);'> O </a><a id="p" class="lettersSD" href='javascript:void(0);'> P </a>
	<a id="q" class="lettersSD" href='javascript:void(0);'> Q </a><a id="r" class="lettersSD" href='javascript:void(0);'> R </a>
	<a id="s" class="lettersSD" href='javascript:void(0);'> S </a><a id="t" class="lettersSD" href='javascript:void(0);'> T </a>
	<a id="u" class="lettersSD" href='javascript:void(0);'> U </a><a id="v" class="lettersSD" href='javascript:void(0);'> V </a>
	<a id="w" class="lettersSD" href='javascript:void(0);'> W </a><a id="x" class="lettersSD" href='javascript:void(0);'> X </a>
	<a id="y" class="lettersSD" href='javascript:void(0);'> Y </a><a id="z" class="lettersSD" href='javascript:void(0);'> Z </a>
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<tr>
			<th>Name</th>
		</tr>
		<?php if($db->sql_numrows($seaportSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($seaportSearchResults)){ ?>
		<tr>
			<td><a href="<?php echo $httpPathSite;?>details/seaport_details.php?id=<?php echo $search['seaportDirectoryId'];?>" target="_blank"><?php echo $search['name'];?></a></td>
		</tr> 
		<?php }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>