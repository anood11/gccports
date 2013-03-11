<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("track_and_trace_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>

<div class="center">

	<div class="centerBanner">
		<img src="<?php echo $httpPathSite;?>resources/images/ad1.gif" alt="" />
	</div>

	<h1 class="newsHead">Track and Trace &raquo; Add your website below, absolutely free! <?php echo $category;?></h1>
	<form name="frmTrackTrace" action="track_trace.php" method="post">
	<input type="hidden" name="category" value="<?php echo $category;?>"/>
	<ul class="modifySearch"> 
	<li style="color:red;"><?php echo $displayMessage;?></li>
	<li>Category :
			<select name="newCategory" style="width:130px">
				<option value="-1">Select Category</option>
				<?php while($track=$db->sql_fetchrow($categoryList )){?>
				<option value="<?php echo $track['category'];?>" <?php if($newCategory==$track['category']) echo 'selected';?>><?php echo $track['category'];?></option>
				<?php } ?>
			</select>
		</li>
		<li>Company Name :
			<input type="text" name="newCompany" value="<?php echo $newCompany;?>"/>
		</li>
		<li>URL :
			<input type="text" name="newURL" value="<?php echo $newWebsite;?>"/>
		</li>
		<li><input type="submit" name="btnSubmit" value="Add"/></li>
	</ul>
	</form>
	<h1 class="newsHead marginTop">Search Results &raquo;</h1>
	<table class="searchResult">
		<tr>
			<th>Company Name</th>
		</tr>
		<?php if($db->sql_numrows($trackTraceSearchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } else{ while($search=$db->sql_fetchrow($trackTraceSearchResults)){ ?>
		<tr>
			<td><a href="javascript:void(0);" name="<?php echo $search['url'];?>" class="trackAndTraceLink" ><?php echo  $search['companyName'];?></a></td>
		</tr>
		<?php }}?>
	</table>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
