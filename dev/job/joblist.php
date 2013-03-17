<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/lib/db_users.php");
include("joblist_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<form action="joblist.php" method="post" name="formJobList">
<div class="center">

	<div class="centerBanner">
		<img src="<?php echo $httpPathSite;?>resources/images/ad1.gif" alt="" />
	</div>

	<h1 class="newsHead">Job Requirement list&raquo;</h1>
	<table class="searchResult">
		<tr>
			<th>Company name</th>
		</tr>
		<?php if($db->sql_numrows($searchResults)<=0){?>
		<tr>
			<td colspan="5">No data found</td>
		</tr> 	
		<?php } while($search=$db->sql_fetchrow($searchResults)){ ?>
		<tr>
			<td><a href="<?php echo $httpPathSite;?>job/jobdetails.php?id=<?php echo $search['jobId'];?>"><?php echo $search['requirement'];?></a></td>
		</tr> 
		<?php }?>
	</table>
</div>
</form>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>