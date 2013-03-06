<?php
include("../includes/lib/globals.php");
include("../includes/lib/db_users.php");
include("../includes/manage_sidebar.php");
include("view_freelist_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<div class="center">
	<h1 class="newsHead">Free Listing &raquo;</h1>
	<table class="searchResult">
	<tr>
		<th>Company Name</th>
		<th>Address</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	<?php while($list=$db->sql_fetchrow($freeList)) { ?>
	<tr>
						<td><?php echo $list['companyName'];?></td>
						<td><?php echo $list['address'];?></td>
						<td><a href=""><?php if($list['status']==0) echo 'Inactive'; else echo 'Active';?></a></td>
						<td><a href="<?php echo $httpPathSite;?>free_listing/freelist_details.php?listId=<?php echo $list['freelistId'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/edit.png" alt="Edit" /></a></td>
	</tr>
	<?php } ?>
	<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<select id="newsPage" style="width: 50px;">
								<?php for($j=1;$j<=$pageCount;$j++) {?>
								<option value="<?php echo $j;?>" <?php if($page==$j) echo 'selected'; ?>><?php echo $j;?></option>
								<?php } ?>
							</select>
						</td>
						<td>&nbsp;</td>												
					</tr>
	</table>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>