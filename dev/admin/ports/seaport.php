<?php
include("../includes/globals.php");
include("../../includes/lib/db_ports.php");
include("../../includes/lib/db_sidebar.php");
include("seaport_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">View Seaports</h1>
<form action="seaport.php" name="viewSeaport" method="post">
		<input type="hidden" name="pageNumber" value="<?php echo $page;?>">
		<ul class="newsSection">
			<li class="large displayMessage"><?php echo $displayMessage;?></li>
			<li><a href="<?php echo $httpPathAdmin;?>ports/seaport_edit.php?id=0">Add Seaport</a></li>
			<li class="large">
				<table>
					<tr>
						<th>Seaport name</th>
						<th>Country</th>
						<th>Code</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php 
					while($list=$db->sql_fetchrow($seaportList)) {
					?>
					<tr>
						<td><?php echo $list['seaportName'];?></td>
						<td><?php echo $list['country'];?></td>
						<td><a href=""><?php echo $list['code'];?></a></td>
						<td><a href="<?php echo $httpPathAdmin;?>ports/seaport_edit.php?id=<?php echo $list['seaportId'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/edit.png" alt="Edit" /></a></td>
						<td><a href="<?php echo $httpPathAdmin;?>ports/seaport.php?delId=<?php echo $list['seaportId'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/close.png" alt="Delete Seaport" onclick="return confirm('Do you want to delete this Seaport?');" /></a></td>
					</tr>
					<?php } ?>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<select id="seaportPage" style="width: 50px;">
								<?php for($j=1;$j<=$pageCount;$j++) {?>
								<option value="<?php echo $j;?>" <?php if($page==$j) echo 'selected'; ?>><?php echo $j;?></option>
								<?php } ?>
							</select>
						</td>												
					</tr>
				</table>
			</li>
		</ul>
	 </form>
	</div>
<div class="right">&nbsp; </div>
<?php
include("../includes/footer.php");
?>