<?php
include("../includes/globals.php");
include("../../includes/lib/resize-class.php ");
include("../../includes/lib/db_news.php");
include("../../includes/lib/db_sidebar.php");
include("footer_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">Edit Footer</h1>
<form action="footer.php" name="frmFooter" method="post">
<div class="displayMessage"><?php echo $display_message;?></div>
<ul class="newsSection">
			<li class="large">
				<label>Footer Left</label>
				<input type="text" name="footerLeft" value="<?php echo $footerLeft;?>"/>
			</li>
			<li class="large">
				<label>Footer Right</label>
				<input type="text" name="footerRight" value="<?php echo $footerRight;?>"/>
			</li>
			<li class="large">
				<label>&nbsp;</label>
				<input type="submit" name="btnSubmit" value="Update"/>
			</li>
</ul>
</form>
</div>
<?php
include("../includes/footer.php");
?>