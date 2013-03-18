<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/lib/db_users.php");
include("login_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<div class="center">	
	<h1 class="newsHead">Employee Login &raquo;</h1>
	<form action="login.php" method="post" name="frmLogin">
	<table class="searchDetails">
		
		<tr>
			<td colspan="2">
				<img src="<?php echo $httpPathSite;?>resources/images/job_head.jpg" alt="" width="100%" />
			</td>
		</tr>
		<tr>
			<td colspan="2" class="displayMessage"><?php echo $displayMessage;?></td>
		</tr>
		<tr>
			<th>Email :</th>
			<td><input type="text" name="email" value="<?php echo $email;?>"/></td>
		</tr>
		<tr>
			<th>Password :</th>
			<td><input type="password" name="password" value="<?php echo $password;?>"/></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><input type="submit" value="Login" name="btnLogin"/></td>
		</tr>
		<tr>
			<td colspan="2">Not a member yet?&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><a class="registerButton" href="<?php echo $httpPathSite;?>job/employee_registration.php">Register Employee</a><a class="registerButton" href="<?php echo $httpPathSite;?>job/employer_registration.php">Register Employer</a></td>
		</tr>
	</table>
	</form>
</div>
<?php 
include("../includes/job_right_submenu.php");
include("../includes/footer.php");
?>
