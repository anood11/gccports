<?php
include("../includes/lib/globals.php");
include("../includes/lib/db_associations.php");
include("../includes/manage_sidebar.php");
include("list_associations_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="list_associations.php" method="post" name="formSearchAirport">
<div class="center">
	<h1 class="newsHead">Associations &raquo; <?php echo $categoryHead;?></h1>
	<form name="frmAssociation" action="list_associations.php" method="post">
	<input type="hidden" name="category" id="category" value="<?php echo $category;?>"/>
	<a id="a" class="lettersLA" href="javascript:void(0);"> A </a><a id="b" class="lettersLA" href='javascript:void(0);'> B </a>
	<a id="c" class="lettersLA" href='javascript:void(0);'> C </a><a id="d" class="lettersLA" href='javascript:void(0);'> D </a>
	<a id="e" class="lettersLA" href='javascript:void(0);'> E </a><a id="f" class="lettersLA" href='javascript:void(0);'> F </a>
	<a id="g" class="lettersLA" href='javascript:void(0);'> G </a><a id="h" class="lettersLA" href='javascript:void(0);'> H </a>
	<a id="i" class="lettersLA" href='javascript:void(0);'> I </a><a id="j" class="lettersLA" href='javascript:void(0);'> J </a>
	<a id="k" class="lettersLA" href='javascript:void(0);'> K </a><a id="l" class="lettersLA" href='javascript:void(0);'> L </a>
	<a id="m" class="lettersLA" href='javascript:void(0);'> M </a><a id="n" class="lettersLA" href='javascript:void(0);'> N </a>
	<a id="o" class="lettersLA" href='javascript:void(0);'> O </a><a id="p" class="lettersLA" href='javascript:void(0);'> P </a>
	<a id="q" class="lettersLA" href='javascript:void(0);'> Q </a><a id="r" class="lettersLA" href='javascript:void(0);'> R </a>
	<a id="s" class="lettersLA" href='javascript:void(0);'> S </a><a id="t" class="lettersLA" href='javascript:void(0);'> T </a>
	<a id="u" class="lettersLA" href='javascript:void(0);'> U </a><a id="v" class="lettersLA" href='javascript:void(0);'> V </a>
	<a id="w" class="lettersLA" href='javascript:void(0);'> W </a><a id="x" class="lettersLA" href='javascript:void(0);'> X </a>
	<a id="y" class="lettersLA" href='javascript:void(0);'> Y </a><a id="z" class="lettersLA" href='javascript:void(0);'> Z </a>
	</form>
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
	<tr>
		<th>Company Name</th>
	</tr>
	<?php if($db->sql_numrows($associationList)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 
	<?php } while($association=$db->sql_fetchrow($associationList)){?>
		<tr>
		<td><a href="<?php echo $httpPathSite;?>details/association_details.php?id=<?php echo $association['associationId'];?>" target="_blank"><?php echo $association['companyName'];?></a></td>
		</tr>
	<?php }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>