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
		<ul class="newsSection">
			<?php while($main=$db->sql_fetchrow($mainNews)){?>
			<li class="large">
				<h1><a href=""><?php echo $main['newsHeading'];?></a></h1>
				<span> <img src="<?php echo $httpPathSite;?>resources/news_images/<?php echo $main['newsImage'];?>.jpg" alt="" />
				<p><?php echo substr($main['newsMatter'],0,250);?></p>
				<h6><a href="">read more &raquo;</a></h6>
				</span> </li>
				<?php } while($bottom=$db->sql_fetchrow($bottonSmallNews)){?>
			<li class="small">
				<h1><a href=""><?php echo $bottom['newsHeading'];?></a></h1>
				<span> <img src="resources/news_images/<?php echo $bottom['newsImage'];?>.jpg" alt="" />
				<p><?php echo substr($bottom['newsMatter'],0,200);?></p>
				<h6><a href="">read more &raquo;</a></h6>
				</span> </li>
			<?php } ?>
		 </ul>
		<ul class="newsSection">
			<?php while($right=$db->sql_fetchrow($rightSmallNews)){?>
			<li>
				<h1><a href=""><?php echo $right['newsHeading'];?></a></h1>
				<span> <img src="resources/news_images/<?php echo $right['newsImage'];?>.jpg" alt="" />
				<p><?php echo substr($right['newsMatter'],0,100);?> </p>
				<h6><a href="">read more &raquo;</a></h6>
				</span> 
			</li>
			<?php } ?>
		</ul>
		<ul class="categorySection">
			<li><h1 class="newsHead marginTop">Container</h1></li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
			</li>
		</ul> 
		<ul class="categorySection">
			<li><h1 class="newsHead marginTop">Ship Operation</h1></li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
			</li>
		</ul> 
		<ul class="categorySection">
			<li><h1 class="newsHead marginTop">Port and Terminals</h1></li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
			</li>
		</ul> 
		<ul class="categorySection">
			<li><h1 class="newsHead marginTop">Aviation</h1></li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
			</li>
		</ul> 
		<ul class="categorySection">
			<li><h1 class="newsHead marginTop">Freight &amp; Logistics</h1></li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
			</li>
		</ul> 
		<ul class="categorySection">
			<li><h1 class="newsHead marginTop">Bulk / Tanker</h1></li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
			</li>
		</ul> 
		<ul class="categorySection">
			<li><h1 class="newsHead marginTop">Sea Saftey</h1></li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
			</li>
		</ul> 
		<ul class="categorySection">
			<li><h1 class="newsHead marginTop">Oil &amp; Gas</h1></li>
			<li><img src="resources/images/noImage.png" alt="" width="100%" /></li>
			<li>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
				<a href="#">"K" Line and Noble form Joint Venture</a>
			</li>
		</ul> 
	</div>
<?php 
include("includes/right_submenu.php");
include("includes/footer.php");
?>