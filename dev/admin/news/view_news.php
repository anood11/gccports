<?php
include("../includes/globals.php");
include("../../includes/lib/db_news.php");
include("view_news_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">View News</h1>
<form action="view_news.php" name="viewNews" method="post">
		<input type="hidden" name="pageNumber" value="<?php echo $page;?>">
		<ul class="newsSection">
		<li><a href="<?php echo $http_path_admin;?>news/add_news.php">Add news</a></li>
			<li class="large">
				<table>
					<tr>
						<th>Serial No.</th>
						<th>Date</th>
						<th>Heading</th>
						<th>Image</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php 
					while($news=$db->sql_fetchrow($news_list)) {
					?>
					<tr>
						<td><?php echo $news['id'];?></td>
						<td><?php echo $news['date'];?></td>
						<td><a href=""><?php echo $news['heading'];?></a></td>
						<td><img src="<?php echo $http_path_admin;?>resources/uploads/<?php echo $news['image'];?>" alt="" /></td>
						<td><a href="<?php echo $http_path_admin;?>news/edit_news.php?delId=<?php echo $news['id'];?>"><img src="<?php echo $http_path_admin;?>resources/images/edit.png" alt="Edit News" /></a></td>
						<td><a href="<?php echo $http_path_admin;?>news/view_news.php?delId=<?php echo $news['id'];?>"><img src="<?php echo $http_path_admin;?>resources/images/close.png" alt="Delete News" /></a></td>
					</tr>
					<?php } ?>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<select id="newsPage">
								<?php for($j=1;$j<=$page_count;$j++) {?>
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