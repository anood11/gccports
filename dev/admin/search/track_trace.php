<?php
include("../includes/globals.php");
include("../../includes/lib/db_users.php");
include("../../includes/lib/db_sidebar.php");
include("track_trace_action.php");
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
						<th>Category</th>
						<th>Company Name</th>
						<th>Url</th>
						<th>Status</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php 
					while($list=$db->sql_fetchrow($tracktrace)) {
					?>
					<tr>
						<td><?php echo $list['category'];?></td>
						<td><?php echo $list['companyName'];?></td>
						<td><?php echo $list['url']?></td>
						<td><?php if($list['status']==1) echo 'Active'; else echo 'Inactive'; ?></td>
						<?php if($list['status']==1){?>
						<td><a href="<?php echo $httpPathAdmin;?>search/track_trace.php?deactivateId=<?php echo $list['trackTraceId'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/close.png" alt="Deactvate" /></a></td>
						<?php } else{ ?>
						<td><a href="<?php echo $httpPathAdmin;?>search/track_trace.php?activateId=<?php echo $list['trackTraceId'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/tick.png" alt="Activate"/></a></td>
						<?php } ?>
					</tr>
					<?php } ?>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<select id="trackTrace" style="width: 50px;">
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