<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GCC Ports</title>
  <link href="<?php echo $http_path_admin;?>resources/styles/reset.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $http_path_admin;?>resources/styles/main.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $http_path_admin;?>resources/styles/currency.css" rel="stylesheet" type="text/css" />
  <!--[if IE 7]>
	<link href="resources/styles/IE7.css" rel="stylesheet" type="text/css" />
<![endif]-->

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="<?php echo $http_path_admin;?>resources/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="<?php echo $http_path_admin;?>resources/scripts/basicScript.js" type="text/javascript"></script>
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
  <script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "../resources/images/calendar.png",
      buttonImageOnly: true
    });
  });
  </script>
  </head>

  <body>
<!-- TOP BLUE STRIP -->
<div class="topStrip blue"></div>

<!-- HEADER STARTS -->
<div class="header"> <img src="<?php echo $http_path_admin;?>resources/images/logo.png" class="logo" alt="" /> </div>
<?php if($login_user!=0){ ?>
<ul class="topNav">
	<li><a href="<?php echo $http_path_admin;?>user_account/admin.php">ADMIN</a></li>
	<li><a href="<?php echo $http_path_admin;?>user_account/login.php?signout=1">Sign out</a></li>
</ul>
<?php } ?>
<!-- HEADER ENDS --> 
