<?php
include("../includes/lib/globals.php");
include("../includes/lib/db_news.php");
include("../includes/manage_sidebar.php");
include("../includes/header.php");
include("news_fullstory_action.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form name="frmNews" action="news_fullstory.php" method="post">
<input type="hidden" name="newsIds" value=""/>
<div class="center">
	<h1 class="newsHead">Fullstory &raquo;</h1>
	<table class="newsSection">
		<tr>
			<td class="full">
				<div class="large">
					<h1><a href=""><?php echo $newsHead;?></a></h1>
					<h5><?php echo $newsDate;?></h5>
					<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $newsImg;?>.jpg" alt="" />
					<p><?php echo $newsMatter;?></p>
					</span> </div>
				</td>
</tr>
</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
