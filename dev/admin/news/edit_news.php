<?php
include("../includes/globals.php");
include("../../includes/lib/resize-class.php ");
include("../../includes/lib/db_users.php");
include("edit_news_action");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">Add News</h1>
<form name="frmEditNews" action="edit_news.php" method="post">
		<ul class="newsSection">
			<li class="large">
				<label>Heading</label>
				<input type="text" name="newsHead" value=""/>
			</li>
			<li class="large">
				<label>Matter</label>
				<textarea cols="5" rows="5" name="newsMatter"></textarea>
			</li>
			<li class="large">
				<label>Date</label>
				<input type="text" id="datepicker" name="newsDate" value=""/>
			</li>
			<li class="large">
				<label>Activate</label>
				<input type="radio" value="yes" name="activateRadio" value="1" /><span>Yes</span>
				<input type="radio" value="No" name="activateRadio" value="0"/><span>No</span>
			</li>
			<li class="large">
				<label>Image []</label>
				<input name="newsImage" type="file">
			</li>
			<li class="large">
				<label>&nbsp;</label>
				<input type="submit" name="btnAddNews" value="Add News" class="button">
			</li>
		</ul>
		</form>
	</div>
<div class="right">&nbsp; </div>
<?php
include("../includes/footer.php");
?>