<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GCC Ports</title>
<link href="<?php echo $httpPathAdmin;?>resources/styles/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $httpPathAdmin;?>resources/styles/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $httpPathAdmin;?>resources/styles/currency.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
	<link href="resources/styles/IE7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script src="<?php echo $httpPathAdmin;?>resources/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo $httpPathAdmin;?>resources/scripts/jquery.ui.rcarousel.js" type="text/javascript"></script>
<script src="<?php echo $httpPathAdmin;?>resources/scripts/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo $httpPathAdmin;?>resources/scripts/paging.js" type="text/javascript"></script>
<script type="text/javascript">
var baseURLsite='<?php echo $httpPathSite;?>';
var baseURLadmin='<?php echo $httpPathAdmin;?>';
</script>
<script src="<?php echo $httpPathAdmin;?>resources/scripts/basic_script.js" type="text/javascript"></script>
</head>
<body>
<!-- TOP BLUE STRIP -->
<div class="topStrip blue"></div>

<!-- HEADER STARTS -->
<div class="header"> <img src="<?php echo $httpPathAdmin;?>resources/images/logo.png" class="logo" alt="" />
	
</div>
<?php if($loginUser!=0){ ?>
<ul class="topNav">
	<li><a href="<?php echo $httpPathAdmin;?>user_account/admin.php">Admin</a></li>
	<li><a href="<?php echo $httpPathAdmin;?>news/view_news.php">Manage News</a></li>
	<li><a href="<?php echo $httpPathAdmin;?>user_account/login.php?signout=1">Sign out</a></li>
</ul>
<?php } ?>
<!-- HEADER ENDS --> 
