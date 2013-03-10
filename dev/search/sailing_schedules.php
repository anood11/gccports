<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("sailing_schedules_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>

<div class="center">
	<h1 class="newsHead">Sailing Schedules &raquo; </h1>
	<form name="frmTrackTrace" action="sailing_schedules.php" method="post">
	<ul class="modifySearch">
		<li><label>Company Name</label></li>
		<li><input type="text" name="name" id="name" value="<?php echo $name;?>"/></li>
		<li><input type="submit" value="Search" name="btnSailingScheduleSearch"/></li>
	</ul>
	</form>
	<a id="a" class="lettersSS" href="javascript:void(0);"> A </a><a id="b" class="lettersSS" href='javascript:void(0);'> B </a>
	<a id="c" class="lettersSS" href='javascript:void(0);'> C </a><a id="d" class="lettersSS" href='javascript:void(0);'> D </a>
	<a id="e" class="lettersSS" href='javascript:void(0);'> E </a><a id="f" class="lettersSS" href='javascript:void(0);'> F </a>
	<a id="g" class="lettersSS" href='javascript:void(0);'> G </a><a id="h" class="lettersSS" href='javascript:void(0);'> H </a>
	<a id="i" class="lettersSS" href='javascript:void(0);'> I </a><a id="j" class="lettersSS" href='javascript:void(0);'> J </a>
	<a id="k" class="lettersSS" href='javascript:void(0);'> K </a><a id="l" class="lettersSS" href='javascript:void(0);'> L </a>
	<a id="m" class="lettersSS" href='javascript:void(0);'> M </a><a id="n" class="lettersSS" href='javascript:void(0);'> N </a>
	<a id="o" class="lettersSS" href='javascript:void(0);'> O </a><a id="p" class="lettersSS" href='javascript:void(0);'> P </a>
	<a id="q" class="lettersSS" href='javascript:void(0);'> Q </a><a id="r" class="lettersSS" href='javascript:void(0);'> R </a>
	<a id="s" class="lettersSS" href='javascript:void(0);'> S </a><a id="t" class="lettersSS" href='javascript:void(0);'> T </a>
	<a id="u" class="lettersSS" href='javascript:void(0);'> U </a><a id="v" class="lettersSS" href='javascript:void(0);'> V </a>
	<a id="w" class="lettersSS" href='javascript:void(0);'> W </a><a id="x" class="lettersSS" href='javascript:void(0);'> X </a>
	<a id="y" class="lettersSS" href='javascript:void(0);'> Y </a><a id="z" class="lettersSS" href='javascript:void(0);'> Z </a>
	
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<tr>
			<th>Company Name</th>
		</tr>
		<?php if($db->sql_numrows($sailingScheduleSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } else{ while($search=$db->sql_fetchrow($sailingScheduleSearchResults)){ ?>
		<tr>
			<td><a href="<?php echo 'http://'.$search['ssURL'];?>" target="_blank"><?php echo  $search['companyName'];?></a></td>
		</tr>
		<?php }}?>
	</table>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
