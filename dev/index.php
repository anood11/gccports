<?php
include("includes/lib/globals.php");
include("includes/lib/db_news.php");
include("includes/manage_sidebar.php");
include("index_action.php");
include("includes/header.php");
include("includes/ads.php");
include("includes/left_submenu.php");
?>

<div class="center">
	<h1 class="newsHead">Latest News &raquo;</h1>
	<table class="newsSection">
		<tr>
			<td class="large" rowspan="2"><?php while($main=$db->sql_fetchrow($mainNews)){?>
				<h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $main['newsID'];?>"><?php echo $main['newsHeading'];?></a></h1>
				<h5><?php echo date("d-m-Y", strtotime($main['newsDate']));?></h5>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $main['newsImage'];?>.jpg" alt="" />
				<p><?php echo substr($main['newsMatter'],0,500);?></p>
				<h6><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $main['newsID'];?>">read more &raquo;</a></h6>
				</span></td>
			<?php while($right=$db->sql_fetchrow($rightSmallNews)){?>
			<td class="small"><h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $right['newsID'];?>"><?php echo $right['newsHeading'];?></a></h1>
				<h5><?php echo date("d-m-Y", strtotime($right['newsDate']));?></h5>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $right['newsImage'];?>.jpg" alt="" />
				<p><?php echo substr($right['newsMatter'],0,80);?> </p>
				<h6><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $right['newsID'];?>">read more &raquo;</a></h6>
				</span></td>
			<?php } ?>
		</tr>
	</table>
	<table class="newsSection">
		<tr>
			<?php } while($bottom=$db->sql_fetchrow($bottonSmallNews1)){?>
			<td class="small"><h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $bottom['newsID'];?>"><?php echo $bottom['newsHeading'];?></a></h1>
				<h5><?php echo date("d-m-Y", strtotime($bottom['newsDate']));?></h5>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $bottom['newsImage'];?>.jpg" alt="" />
				<p><?php echo substr($bottom['newsMatter'],0,80);?></p>
				<h6><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $bottom['newsID'];?>">read more &raquo;</a></h6>
				</span></td>
			<?php } ?>
		</tr>
		<tr>
			<?php  while($bottom1=$db->sql_fetchrow($bottonSmallNews2)){?>
			<td class="small"><h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $bottom1['newsID'];?>"><?php echo $bottom1['newsHeading'];?></a></h1>
				<h5><?php echo date("d-m-Y", strtotime($bottom1['newsDate']));?></h5>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $bottom1['newsImage'];?>.jpg" alt="" />
				<p><?php echo substr($bottom1['newsMatter'],0,100);?></p>
				<h6><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $bottom1['newsID'];?>">read more &raquo;</a></h6>
				</span></td>
			<?php } ?>
		</tr>
	</table>
	<table class="newsSection">
		<tr>
			<td class="large"><?php while($headLine=$db->sql_fetchrow($headLineNews)){?>
				<h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $headLine['newsID'];?>"><?php echo $headLine['newsHeading'];?></a></h1>
				<?php } ?></td>
			<td class="small imageHolder"><a href="<?php echo $httpPathSite;?>free_listing/free_listing.php"><img src="<?php echo $httpPathSite;?>resources/images/freeListing.png" alt="" /></a></td>
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
