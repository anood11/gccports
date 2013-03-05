<?php 
include("../includes/globals.php");
include("../../includes/lib/db_users.php");  
include("../../includes/lib/db_sidebar.php");    
include("admin_action.php");
include("../includes/header.php");?>
<div class="left">&nbsp; </div>
<div class="center">
		<ul class="newsSection">
			<li class="large">
			<form name="formLogin" action="admin.php" method="post">
		    <ul class="adminCentre">
				<li class="adminCentreHead">Change settings</li>
				<li class="displayMesg"><?php echo $displayMessage;?></li>
				<li class="adminFields">User name</li>
				<li class="adminInput"><input type="text" name="user_name" value="<?php echo $userName;?>"></li>
				<li class="adminFields">Email ID</li>
				<li class="adminInput"><input type="text" name="email_id" value="<?php echo $emailId;?>"></li>
				<li class="adminFields">Password</li>
				<li class="adminInput"><input type="password" name="password" value="<?php echo $password;?>"></li>
				<li class="adminFields">Confirm Password</li>
				<li class="adminInput"><input type="password" name="confirm_password" value="<?php echo $confirmPassword;?>"></li>
				<li class="adminInput"><input type="submit" name="btnUpdate" value="SAVE" class="button"></li>
			</ul>
			</form>
			</li>
		</ul>
	</div>
<div class="right">&nbsp; </div>
<?php include("../includes/footer.php");?>