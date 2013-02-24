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
	<input type="hidden" name="category" value="<?php echo $category;?>"/>
	<ul class="modifySearch">
		<li><label>Sort By</label></li>
		<li><select name='associationSort'>
				<option value="associationId">None</option>
				<option value="companyName" <?php if($associationSort=='companyName') echo "selected";?>>Company Name</option>
				<option value="country" <?php if($associationSort=='country') echo "selected";?>>Country</option>
			</select>
		</li>
		<li><input type="submit" value="Modify" name="btnAssociationSearch"/></li>
	</ul>
	</form>
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
	<?php if($associationSort=='country'){?>
	<tr>
		<th>Country</th>
		<th>Company Name</th>		
	</tr>
	<?php while($association=$db->sql_fetchrow($associationList)){?>
		<tr>
		<td><?php echo $association['country'];?></td>
		<td><a href="http://<?php echo $association['website'];?>" target="_blank"><?php echo $association['companyName'];?></a></td>
		</tr>
	<?php } }else {?>
		<tr>
		<th>Company Name</th>
		<th>Country</th>		
	</tr>
	<?php while($association=$db->sql_fetchrow($associationList)){?>
		<tr>
		<td><a href="http://<?php echo $association['website'];?>" target="_blank"><?php echo $association['companyName'];?></a></td>
		<td><?php echo $association['country'];?></td>
		</tr>
	<?php } }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>