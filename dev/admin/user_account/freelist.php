<?php
include("../includes/globals.php");
include("../../includes/lib/db_users.php");
include("../../includes/lib/db_sidebar.php");
include("freelist_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">Freelist</h1>
<form action="freelist.php" name="frmFreelist" method="post">
		<input type="hidden" name="pageNumber" value="<?php echo $page;?>">
		<ul class="newsSection">
			<li class="large displayMessage"><?php echo $displayMessage;?></li>
			<li class="large">
				<table>
					<tr>
						<th>Company name</th>
						<th>Address</th>
						<th>Status</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php 
					while($list=$db->sql_fetchrow($freeList)) {
					?>
					<tr>
						<td><?php echo $list['companyName'];?></td>
						<td><?php echo $list['address'];?></td>
						<td><a href=""><?php if($list['status']==0) echo 'Inactive'; else echo 'Active';?></a></td>
						<td><a href="<?php echo $httpPathAdmin;?>user_account/freelist_edit.php?editId=<?php echo $list['freelistId'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/edit.png" alt="Edit" /></a></td>
						<td><a href="<?php echo $httpPathAdmin;?>user_account/freelist.php?delId=<?php echo $list['freelistId'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/close.png" alt="Delete News" onclick="return confirm('Do you want to delete this Freelist?');" /></a></td>
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
					</tr>
				</table>
			</li>
		</ul>
	 </form>
	</div>
<div class="right">&nbsp; </div>
<?php
include("../includes/footer.php");
?>