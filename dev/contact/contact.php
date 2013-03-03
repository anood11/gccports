<?php
include("../includes/lib/globals.php");
include("../includes/lib/db_news.php");
include("../includes/manage_sidebar.php");
include("contact_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>

<div class="center">
<h1 class="newsHead">Contact Us &raquo;</h1>
<form name="frmContact" action="contact.php" method="post">
<div class="displayMessage"><?php echo $displayMessage;?></div>
<table class="newsSection">
<tr>
	<td colspan="2">Fields marked with * are mandatory</td>
</tr>
<tr>
	<td>Name *</td>
	<td><input type="text" name="name" value="<?php echo $name;?>"/></td>
</tr>
<tr>
	<td>Company Name</td>
	<td><input type="text" name="company" value="<?php echo $company;?>"/></td>
</tr>
<tr>
	<td>Designation</td>
	<td><input type="text" name="designation" value="<?php echo $designation;?>"/></td>
</tr>
<tr>
	<td>Email *</td>
	<td><input type="text" name="email" value="<?php echo $email;?>"/></td>
</tr>
<tr>
	<td>telephone *</td>
	<td><input type="text" name="phone" value="<?php echo $phone;?>"/></td>
</tr>
<tr>
	<td>Message *</td>
	<td><textarea name="message"/><?php echo $message;?></textarea></td>
</tr>
<tr>
	<td colspan="2"><input type="submit" name="btnSubmit" value="Submit"/></td>
</tr>
</table>
</form>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
