<?php
include("../includes/globals.php");
include("../../includes/lib/db_news.php");
include("../../includes/lib/db_sidebar.php");
include("subscriptions_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">View Subscribers</h1>
<form action="subscriptions.php" name="viewNews" method="post">
		<input type="hidden" name="pageNumber" value="<?php echo $page;?>">
		<ul class="newsSection">
			<li class="large displayMessage"><?php echo $displayMessage;?></li>
			<li class="large">
				<table>
					<tr>
						<th>Name</th>
						<th>Company</th>
						<th>Country</th>
						<th>Email</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php 
					while($subscribers=$db->sql_fetchrow($subscribersList)) {
					?>
					<tr>
						<td><?php echo $subscribers['name'];?></td>
						<td><?php echo $subscribers['company'];?></td>
						<td><?php echo $subscribers['countryName'];?></td>
						<td><?php echo $subscribers['email'];?></td>
						<td><a href="<?php echo $httpPathAdmin;?>news/subscriptions.php?delId=<?php echo $subscribers['subscriptionId'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/close.png" alt="Delete" title="Delete" onclick="return confirm('Do you want to delete this user?');" /></a></td>
					</tr>
					<?php } ?>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<select id="newsPage" style="width: 50px">
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