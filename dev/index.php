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
				
				<h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $main['newsID'];?>"><?php if(strlen($main['newsHeading'])>72){ echo substr($main['newsHeading'],0,120).'...';} else{ echo $main['newsHeading']; }?></a></h1>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $main['newsImage'];?>.jpg" alt="" />
				<p>
					<strong><?php $date=explode('-',(date("d-M-Y", strtotime($main['newsDate']))));
					echo $date[1].' '.$date[0].', '.$date[2];?>: </strong>
					<?php echo substr($main['newsMatter'],0,500).'...';?>
				</p>
				</span></td>
			<?php while($right=$db->sql_fetchrow($rightSmallNews)){?>
			<td class="small"><h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $right['newsID'];?>"><?php if(strlen($right['newsHeading'])>72){ echo substr($right['newsHeading'],0,50).'...';}else{echo $right['newsHeading'];}?></a></h1>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $right['newsImage'];?>.jpg" alt="" />
				<p>
					<strong><?php $date=explode('-',(date("d-M-Y", strtotime($right['newsDate']))));
					echo $date[1].' '.$date[0].', '.$date[2];?>: </strong>
					<?php echo substr($right['newsMatter'],0,90).'...';?> 
				</p>
				</span></td>
			<?php } ?>
		</tr>
	</table>
	<table class="newsSection">
		<tr>
			<?php } while($bottom=$db->sql_fetchrow($bottonSmallNews1)){?>
			<td class="small"><h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $bottom['newsID'];?>"><?php if(strlen($bottom['newsHeading'])>72){echo substr($bottom['newsHeading'],0,50).'...';}else{echo $bottom['newsHeading'];}?></a></h1>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $bottom['newsImage'];?>.jpg" alt="" />
				<p>
					<strong><?php $date=explode('-',(date("d-M-Y", strtotime($bottom['newsDate']))));
					echo $date[1].' '.$date[0].', '.$date[2];?>: </strong>
					<?php echo substr($bottom['newsMatter'],0,80).'...';?>
				</p>
				</span></td>
			<?php } ?>
		</tr>
		<tr>
			<?php  while($bottom1=$db->sql_fetchrow($bottonSmallNews2)){?>
			<td class="small"><h1><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $bottom1['newsID'];?>"><?php if(strlen($bottom1['newsHeading'])>72){echo substr($bottom1['newsHeading'],0,50).'...';}else{echo $bottom1['newsHeading'];}?></a></h1>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $bottom1['newsImage'];?>.jpg" alt="" />
				<p>
					<strong><?php $date=explode('-',(date("d-M-Y", strtotime($bottom1['newsDate']))));
					echo $date[1].' '.$date[0].', '.$date[2];?>: </strong>
					<?php echo substr($bottom1['newsMatter'],0,80).'...';?>
				</p>
				<!--<h6><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $bottom1['newsID'];?>">read more &raquo;</a></h6> -->
				</span></td>
			<?php } ?>
		</tr>
	</table>
	<table class="newsSection">
		<tr>
			<td class="large"><?php while($headLine=$db->sql_fetchrow($headLineNews)){?>
				<h6><a href="<?php echo $httpPathSite;?>news/news_fullstory.php?newsId=<?php echo $headLine['newsID'];?>"><?php echo $headLine['newsHeading'];?></a></h6>
				<?php } ?></td>
			<td class="small imageHolder"><a href="<?php echo $httpPathSite;?>free_listing/free_listing.php"><img src="<?php echo $httpPathSite;?>resources/images/freeListing.png" alt="" /></a></td>
		</tr>
	</table>
</div>
<?php 
include("includes/right_submenu.php");

?>


<div class="wrapper">
	<div style="overflow:auto; width:95%; margin:0 auto;">
		<ul class="categorySection">
			<li>
				<h1 class="newsHead marginTop">Container</h1>
			</li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> </li>
		</ul>
		<ul class="categorySection">
			<li>
				<h1 class="newsHead marginTop">Ship Operation</h1>
			</li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> </li>
		</ul>
		<ul class="categorySection">
			<li>
				<h1 class="newsHead marginTop">Ports / Terminals</h1>
			</li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> </li>
		</ul>
		<ul class="categorySection">
			<li>
				<h1 class="newsHead marginTop">Aviation</h1>
			</li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> </li>
		</ul>
	</div>
	<div style="overflow:auto; width:95%; margin:0 auto;">
		<ul class="categorySection">
			<li>
				<h1 class="newsHead marginTop">Freight &amp; Logistics</h1>
			</li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> </li>
		</ul>
		<ul class="categorySection">
			<li>
				<h1 class="newsHead marginTop">Bulk / Tanker</h1>
			</li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> </li>
		</ul>
		<ul class="categorySection">
			<li>
				<h1 class="newsHead marginTop">Sea Saftey</h1>
			</li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> </li>
		</ul>
		<ul class="categorySection">
			<li>
				<h1 class="newsHead marginTop">Oil &amp; Gas</h1>
			</li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> <a href="#">"K" Line and Noble form Joint Venture <strong>[ Feb 19th, 2013 ]</strong></a> </li>
		</ul>
	</div>
</div>

<div class="topStrip blue"></div>

<?php
include("includes/footer.php");
?>
