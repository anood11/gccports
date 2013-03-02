<?php
include("../includes/globals.php");
include("../../includes/lib/db_users.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">Add News</h1>
		<ul class="newsSection">
			<li class="large">
				<label>Heading</label>
				<input type="text" />
			</li>
			<li class="large">
				<label>Matter</label>
				<textarea cols="5" rows="5"></textarea>
			</li>
			<li class="large">
				<label>Date</label>
				<input type="text" id="datepicker" readonly="readonly" />
			</li>
			<li class="large">
				<label>Activate</label>
				<input type="radio" value="yes" name="activateRadio" /><span>Yes</span>
				<input type="radio" value="No" name="activateRadio" /><span>No</span>
			</li>
			<li class="large">
				<label>Image []</label>
				<input name="" type="file">
			</li>
			<li class="large">
				<label>&nbsp;</label>
				<input type="submit" name="btnAddNews" value="Add News" class="button">
			</li>
		</ul>
	</div>
<div class="right">&nbsp; </div>
<?php
include("../includes/footer.php");
?>