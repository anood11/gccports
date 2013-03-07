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
	<form name="frmTrackTrace" action="track_trace.php" method="post">
	<input type="hidden" name="category" value="<?php echo $category;?>"/>
	<table class="searchResult"> 
	<tr><td colspan="4" style="color:red;"><?php echo $displayMessage;?></td></tr>
	<tr>
		<td>Category :
			<select name="newCategory" style="width:130px">
				<option value="-1">--Select--</option>
				<?php while($track=$db->sql_fetchrow($categoryList )){?>
				<option value="<?php echo $track['category'];?>" <?php if($newCategory==$track['category']) echo 'selected';?>><?php echo $track['category'];?></option>
				<?php } ?>
			</select>
		</td>
		<td>Company Name :
			<input type="text" name="newCompany" value="<?php echo $newCompany;?>"/>
		</td>
		<td>URL :
			<input type="text" name="newURL" value="<?php echo $newWebsite;?>"/>
		</td>
		<td><input type="submit" name="btnSubmit" value="Add"/></td>
	</tr>
	</table>
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
