<?php
include("../includes/globals.php");
include("../../includes/lib/resize-class.php ");
include("../../includes/lib/db_news.php");
include("edit_news_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">Add News</h1>
<form name="frmEditNews" action="edit_news.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="newsId" value="<?php echo $newsId;?>">
		<ul class="newsSection">
			<li class="large">
				<label>Heading</label>
				<input type="text" name="newsHead" value="<?php echo $newsHead;?>"/>
			</li>
			<li class="large">
				<label>Matter</label>
				<textarea cols="5" rows="5" name="newsMatter"><?php echo $newsMatter;?></textarea>
			</li>
			<li class="large">
				<label>Date</label>
				<input type="text" id="datepicker" name="newsDate" value="<?php echo $newsDate;?>"/>
			</li>
			<li class="large">
				<label>Activate</label>
				<input type="radio" name="activateNews" value="1" <?php if($newsActive==1) echo "checked";?>/><span>Yes</span>
				<input type="radio"  name="activateNews" value="0" <?php if($newsActive==0) echo "checked";?>/><span>No</span>
			</li>
			<li class="large">
				<label>Category</label>
				<select name="newsCategory">
					<option value="-1">--Select--</option>
					<?php while($category=$db->sql_fetchrow($categoryList)) {?>
					<option value="<?php echo $category['categoryId'];?>" <?php if($newsCategory=$category['categoryId']) echo 'selected';?>><?php echo $category['newsCategory'];?></option>
					<?php } ?>
				</select>
			</li>
			<li class="large">
				<label>Image []</label>
				<input name="newsImage" type="file" value="<?php echo $newsImage;?>">
			</li>
			<li class="large">
				<label>&nbsp;</label>
				<input type="submit" name="btnSaveNews" value="Add News" class="button">
			</li>
		</ul>
		</form>
	</div>
<div class="right">&nbsp; </div>
<?php
include("../includes/footer.php");
?>