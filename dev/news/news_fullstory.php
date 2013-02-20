<?php
include("../includes/lib/globals.php");
include("../includes/lib/db_news.php");
include("../includes/header.php");
include("../index_action.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>

<div class="center">
	<h1 class="newsHead">Fullstory &raquo;</h1>
	<table class="newsSection">
		<tr>
			<td class="full"><?php while($main=$db->sql_fetchrow($mainNews)){?>
				<div class="large">
					<h1><a href=""><?php echo $main['newsHeading'];?></a></h1>
					<h5><?php echo $main['newsDate'];?></h5>
					<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $main['newsImage'];?>.jpg" alt="" />
					<p><?php echo $main['newsMatter'];?></p>
					
					</span> </div>
					<?php } ?>
				</td>
</tr>
</table>

</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
