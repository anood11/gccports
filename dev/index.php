<?php
include("includes/lib/globals.php");
include("includes/lib/db_news.php");
include("index_action.php");
include("includes/header.php");
include("includes/ads.php");
include("includes/left_submenu.php");
?>

<div class="center">
	<h1 class="newsHead">Latest News &raquo;</h1>
	<table class="newsSection">
		<tr>
			<td class="large"><?php while($main=$db->sql_fetchrow($mainNews)){?>
				<div class="large">
					<h1><a href=""><?php echo $main['newsHeading'];?></a></h1>
					<h5><?php echo $main['newsDate'];?></h5>
					<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $main['newsImage'];?>.jpg" alt="" />
					<p><?php echo substr($main['newsMatter'],0,1000);?></p>
					<h6><a href="">read more &raquo;</a></h6>
					</span> </div>
				<?php while($right=$db->sql_fetchrow($rightSmallNews)){?>
				<div class="small">
					<h1><a href=""><?php echo $right['newsHeading'];?></a></h1>
					<h5><?php echo $right['newsDate'];?></h5>
					<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $right['newsImage'];?>.jpg" alt="" />
					<p><?php echo substr($right['newsMatter'],0,180);?> </p>
					<h6><a href="">read more &raquo;</a></h6>
					</span> </div>
				<?php } ?>
				<div class="large">
					<?php while($headLine=$db->sql_fetchrow($headLineNews)){?>
					<h1><a href=""><?php echo $headLine['newsHeading'];?></a></h1>
					<?php } ?>
				</div></td>
			<?php } while($bottom=$db->sql_fetchrow($bottonSmallNews)){?>
			<td class="small"><h1><a href=""><?php echo $bottom['newsHeading'];?></a></h1>
				<h5><?php echo $bottom['newsDate'];?></h5>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $bottom['newsImage'];?>.jpg" alt="" />
				<p><?php echo substr($bottom['newsMatter'],0,100);?></p>
				<h6><a href="">read more &raquo;</a></h6>
				</span></td>
			<?php } ?>
			<td class="small imageHolder"><img src="<?php echo $httpPathSite;?>resources/images/freeListing.png" alt="" /></td>
		</tr>
	</table>
	
	<div style="overflow:auto;">
	<ul class="categorySection">
		<li>
			<h1 class="newsHead marginTop">Container</h1>
		</li>
		<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
		<li> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> </li>
	</ul>
	<ul class="categorySection">
		<li>
			<h1 class="newsHead marginTop">Ship Operation</h1>
		</li>
		<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
		<li> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> </li>
	</ul>
	<ul class="categorySection">
		<li>
			<h1 class="newsHead marginTop">Port and Terminals</h1>
		</li>
		<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
		<li> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> </li>
	</ul>
	<ul class="categorySection">
		<li>
			<h1 class="newsHead marginTop">Aviation</h1>
		</li>
		<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
		<li> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> </li>
	</ul>
	</div>
	<div style="overflow:auto;">
	<ul class="categorySection">
		<li>
			<h1 class="newsHead marginTop">Freight &amp; Logistics</h1>
		</li>
		<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
		<li> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> </li>
	</ul>
	<ul class="categorySection">
		<li>
			<h1 class="newsHead marginTop">Bulk / Tanker</h1>
		</li>
		<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
		<li> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> </li>
	</ul>
	<ul class="categorySection">
		<li>
			<h1 class="newsHead marginTop">Sea Saftey</h1>
		</li>
		<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
		<li> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> </li>
	</ul>
	<ul class="categorySection">
		<li>
			<h1 class="newsHead marginTop">Oil &amp; Gas</h1>
		</li>
		<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
		<li> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> <a href="#">"K" Line and Noble form Joint Venture</a> </li>
	</ul>
	</div>
</div>
<?php 
include("includes/right_submenu.php");
include("includes/footer.php");
?>
