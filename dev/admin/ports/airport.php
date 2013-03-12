<?php
include("../includes/globals.php");
include("../../includes/lib/db_ports.php");
include("../../includes/lib/db_sidebar.php");
include("airport_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">View Airports</h1>
<form action="airport.php" name="viewAirport" method="post">
		<input type="hidden" name="pageNumber" value="<?php echo $page;?>">
		<ul class="newsSection">
			<li class="large displayMessage"><?php echo $displayMessage;?></li>
			<li><a href="<?php echo $httpPathAdmin;?>ports/airport_edit.php?id=0">Add Airport</a></li>
			<li class="large">
				<table>
					<tr>
						<th>Airport name</th>
						<th>Country</th>
						<th>Airport Code</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php 
					while($list=$db->sql_fetchrow($airportList)) {
					?>
					<tr>
						<td><?php echo $list['airportName'];?></td>
						<td><?php echo $list['country'];?></td>
						<td><a href=""><?php echo $list['airportCode'];?></a></td>
						<td><a href="<?php echo $httpPathAdmin;?>ports/airport_edit.php?id=<?php echo $list['airportID'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/edit.png" alt="Edit" /></a></td>
						<td><a href="<?php echo $httpPathAdmin;?>ports/airport.php?delId=<?php echo $list['airportID'];?>"><img src="<?php echo $httpPathAdmin;?>resources/images/close.png" alt="Delete Seaport" onclick="return confirm('Do you want to delete this Airport?');" /></a></td>
					</tr>
					<?php } ?>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<select id="airportPage" style="width: 50px;">
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