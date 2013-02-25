<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("track_and_trace_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>

<div class="center">
	<h1 class="newsHead">Track and Trace &raquo; <?php echo $category;?></h1>
	<form method="post" name="frmTrackTrace" action="track_and_trace.php">
	<ul class="modifySearch">
		<li><label>Sort By</label></li>
		<li>
			<select name="category">
			<option value="-1">--Select--</option>
			<?php while($track=$db->sql_fetchrow($categoryList)){?>
				<option value="<?php echo $track['category'];?>" <?php if($track['category']==$category)echo 'selected';?>><?php echo $track['category'];?></option>
			<?php } ?>
			</select>
		</li>
		<li><input type="submit" name="btnSearch" value="Search"/></li>
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
			<td><a href="<?php echo $search['url'];?>" target="_blank" ><?php echo  $search['companyName'];?></a></td>
		</tr>
		<?php }}?>
	</table>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
