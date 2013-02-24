<?php
include("../includes/globals.php");
include("../../includes/lib/db_users.php");
include("login_action.php");
include("../includes/header.php");
?>
<div class="left">&nbsp; </div>
<div class="center">
<h1 class="newsHead">Login here</h1>
		<form name="formLogin" action="login.php" method="post">
		<ul class="newsSection">
			<li class="large displayMessage">
			<?php echo $displayMessage;?>
			</li>
			<li class="large">
			<label>User name</label>
			<input type="text" name="user_name" value="<?php echo $userName;?>">
			</li>
			<li class="large">
			<label>Password</label>
			<input type="password" name="password" value="<?php echo $password;?>">
			</li>
			<li class="large">
			<label>&nbsp;</label>
			<input type="submit" name="btnLogin" value="Login" class="button">
			</li>
		</ul>
		</form>
	</div>
<div class="right">&nbsp; </div>
<?php
include("../includes/footer.php");
?>