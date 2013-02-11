<?php
include("../includes/globals.php");
include("../../includes/lib/db_users.php");
include("login_action.php");
include("../includes/header.php");
?>
<div class="center">
		<ul class="newsSection">
			<li class="large">
			<form name="formLogin" action="login.php" method="post">
		    <ul class="adminCentre">
				<li class="adminCentreHead">Login here</li>
				<li class="displayMesg"><?php echo $display_message;?></li>
				<li class="adminFields">User name</li>
				<li class="adminInput"><input type="text" name="user_name" value="<?php echo $user_name;?>"></li>
				<li class="adminFields">Password</li>
				<li class="adminInput"><input type="password" name="password" value="<?php echo $password;?>"></li>
				<li class="adminInput"><input type="submit" name="btnLogin" value="Login" class="button"></li>
			</ul>
			</form>
			</li>
		</ul>
	</div>
<?php
include("../includes/footer.php");
?>