<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GCC Ports</title>
<link href="<?php echo $httpPathAdmin;?>resources/styles/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $httpPathAdmin;?>resources/styles/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $httpPathAdmin;?>resources/styles/currency.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<!--[if IE 7]>
	<link href="resources/styles/IE7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script src="<?php echo $httpPathAdmin;?>resources/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="<?php echo $httpPathAdmin;?>resources/scripts/jquery.ui.rcarousel.js" type="text/javascript"></script>
<script src="<?php echo $httpPathAdmin;?>resources/scripts/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo $httpPathAdmin;?>resources/scripts/paging.js" type="text/javascript"></script>
<script type="text/javascript">
var baseURLsite='<?php echo $httpPathSite;?>';
var baseURLadmin='<?php echo $httpPathAdmin;?>';
</script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
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
	<li><a href="<?php echo $httpPathAdmin;?>news/subscriptions.php">News Subscribers</a></li>
	<li><a href="<?php echo $httpPathAdmin;?>news/view_news.php">Manage News</a></li>
	<li><a href="#">Ports</a>
		<ul>
			<li><a href="<?php echo $httpPathAdmin;?>ports/seaport.php">Manage Sea Ports</a></li>
			<li><a href="<?php echo $httpPathAdmin;?>ports/airport.php">Manage Air Ports</a></li>
		</ul>
	</li>
	<li><a href="<?php echo $httpPathAdmin;?>search/track_trace.php">Track and trace</a></li>
	<li><a href="<?php echo $httpPathAdmin;?>footer/footer.php">Footer</a></li>
	<li><a href="<?php echo $httpPathAdmin;?>user_account/freelist.php">Freelisting</a></li>
	<li><a href="<?php echo $httpPathAdmin;?>user_account/login.php?signout=1">Sign out</a></li>
</ul>
<?php } ?>
<!-- HEADER ENDS --> 
