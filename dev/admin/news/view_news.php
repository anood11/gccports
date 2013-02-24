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
			<li class="large displayMessage"><?php echo $displayMessage;?></li>
			<li><a href="<?php echo $httpPathAdmin;?>news/add_news.php">Add news</a></li>
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
					while($news=$db->sql_fetchrow($newsList)) {
					?>
					<tr>
						<td><?php echo $news['newsID'];?></td>
						<td><?php echo $news['newsDate'];?></td>
						<td><a href=""><?php echo $news['newsHeading'];?></a></td>
						<td><img width="100px" height="100px" src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $news['newsImage'];?>.jpg" alt="" /></td>
						<td><a href="<?php echo $httpPathAdmin;?>news/edit_news.php?newsId=<?php echo $news['newsID'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/edit.png" alt="Edit News" /></a></td>
						<td><a href="<?php echo $httpPathAdmin;?>news/view_news.php?delId=<?php echo $news['newsID'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/close.png" alt="Delete News" onclick="return confirm('Do you want to delete this news?');" /></a></td>
					</tr>
					<?php } ?>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<select id="newsPage">
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