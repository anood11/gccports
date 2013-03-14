<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GCC Ports</title>
<link href="<?php echo $httpPathSite;?>resources/styles/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $httpPathSite;?>resources/styles/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $httpPathSite;?>resources/styles/currency.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
	<link href="<?php echo $httpPathSite;?>resources/styles/IE7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script src="<?php echo $httpPathSite;?>resources/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo $httpPathSite;?>resources/scripts/basic_script.js" type="text/javascript"></script>
<script src="<?php echo $httpPathSite;?>resources/scripts/functions.js" type="text/javascript"></script>
<script src="<?php echo $httpPathSite;?>resources/scripts/time_zone.js" type="text/javascript"></script>
<script type="text/javascript">
var baseURLsite='<?php echo $httpPathSite;?>';
var baseURLadmin='<?php echo $httpPathAdmin;?>';
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("ul.wide li a").click(function(){
		var useful_link = 'useful_links/' + $(this).attr("id") + '.html';
		$("div.centerRightContainer").html("<iframe src='<?php echo $httpPathSite;?>" + useful_link + "' class='usefulLinks'></iframe>");
	});
	$("a.trackAndTraceLink").click(function(){
		var trackAndTraceLink =  $(this).attr("name");
		$("div.centerRightContainer").html("<iframe src='" + trackAndTraceLink + "' class='usefulLinks'></iframe>");
	});
	$("a.sailingSchedule").click(function(){
		var sailingScheduleLink =  $(this).attr("name");
		$("div.centerRightContainer").html("<iframe src='" + sailingScheduleLink + "' class='usefulLinks'></iframe>");
	});
});
</script>
</head>

<body>
<!-- TOP BLUE STRIP -->
<div class="topStrip blue"></div>

<!-- HEADER STARTS -->
<div class="header"> <a href="<?php echo $httpPathSite;?>"><img src="<?php echo $httpPathSite;?>resources/images/logo.png" class="logo" alt="" /></a>
	
	
	<!-- SOCIAL MEDIA STARTS -->
	<div class="social">
		<p>Find us on:</p>
		<a href="#"><img src="<?php echo $httpPathSite;?>resources/images/facebook.png" alt="" /></a>
		<a href="#"><img src="<?php echo $httpPathSite;?>resources/images/twitter.png" alt="" /></a>
		<a href="#"><img src="<?php echo $httpPathSite;?>resources/images/linkedin.png" alt="" /></a>
		<a href="#"><img src="<?php echo $httpPathSite;?>resources/images/rss.png" alt="" /></a>
		
	</div>
	<!-- SOCIAL MEDIA ENDS -->	
	
	<div class="topAd"> 
		<img src="<?php echo $httpPathSite;?>resources/images/ad1.gif" alt="" />
		<img src="<?php echo $httpPathSite;?>resources/images/ad2.jpg" class="secondBanner" alt="" /> 
	</div>
</div>
<ul class="topNav">
	<li><a href="<?php echo $httpPathSite;?>">HOME</a></li>
	<li><a href="">GCC DIRECTORY</a>
		<ul>
			<li><a href="<?php echo $httpPathSite;?>free_listing/view_freelist.php">Freelist</a></li>
		</ul>
	</li>
	<li><a href="">PORTS</a>
		<ul>
			<li><a href="<?php echo $httpPathSite;?>search/seaport_search.php?name=a">Seaport Search</a></li>
			<li><a href="<?php echo $httpPathSite;?>search/airport_search.php?name=a">Airport Search</a></li>
			<li><a href="<?php echo $httpPathSite;?>search/airport_search.php?name=a">Airport Search</a></li>
			<li><a href="<?php echo $httpPathSite;?>search/seaport_directory.php?name=a">Seaport Directory</a></li>
			<li><a href="<?php echo $httpPathSite;?>search/airport_directory.php?name=a">Airport Directory</a></li>
			<li><a href="<?php echo $httpPathSite;?>">Seaport in GCC Countries</a></li>
			<li><a href="<?php echo $httpPathSite;?>">Airport in GCC Countries</a></li>
			<li><a href="<?php echo $httpPathSite;?>search/latitude_longitude.php?name=a">Longitude &amp; Latitude</a></li>
		</ul>
	</li>
	<li><a href="">ASSOCIATIONS</a>
		<ul>
			<li><a href="<?php echo $httpPathSite;?>associations/list_associations.php?category=Associations in GCC Countries&name=a">Associations in GCC Countries</a></li>
			<li><a href="<?php echo $httpPathSite;?>associations/list_associations.php?category=international Associations&name=a">International Associations</a></li>
			<li><a href="<?php echo $httpPathSite;?>associations/list_associations.php?category=Official Bodies&name=a">Official Bodies</a></li>
		</ul>
	</li>
	<li><a href="">USEFUL LINKS</a>
		<ul class="wide">
			<li><a href="javascript:void(0);" id="container_specification">Container Specification</a></li>
			<li><a href="javascript:void(0);" id="unit_converter">Unit Converter</a></li>
			<li><a href="javascript:void(0);" id="world_currency_details">World Currency Details</a></li>
			<li><a href="javascript:void(0);" id="shipping_glossary">Shipping Glossary</a></li>
			<li><a href="javascript:void(0);" id="shipping_abbreviations">Shipping Abbreviations</a></li>
			<li><a href="javascript:void(0);" id="vessel_size_groups">Vessel Size Groups (DWT)</a></li>
			<li><a href="javascript:void(0);" id="maritime_signal_flags">Maritime Signal Flags</a></li>
			<li><a href="javascript:void(0);" id="dangerous_goods">Dangerous Goods</a></li>
			<li><a href="javascript:void(0);" id="linear_operator_abbreviations">Linear Operators Abbrev.</a></li>
			<li><a href="javascript:void(0);" id="ship_structure">Ship Structure</a></li>
			<li><a href="javascript:void(0);" id="general_types_of_ships">General Types of Ships</a></li>
			<li><a href="javascript:void(0);" id="ship_engine_type_and_speed">Ship Engine Type &amp; Speed</a></li>
			<li><a href="javascript:void(0);" id="service_and_vessel_routes">Service and Vessel Routes</a></li>
			<li><a href="javascript:void(0);" id="flags_of_registry">Flags of Registry</a></li>
			<li><a href="javascript:void(0);" id="hs_code_reference">HS Code Reference</a></li>
			<li><a href="javascript:void(0);" id="ship_documents">Ship Documents</a></li>
			<li><a href="javascript:void(0);" id="bic_codes">BIC Codes</a></li>
			<li><a href="javascript:void(0);" id="ship_motions_in_heavy_seaway">Ship Motions in Heavy Seaway</a></li>
			<li><a href="javascript:void(0);" id="ship_tonnage">Ship Tonnage</a></li>
			<li><a href="javascript:void(0);" id="ship_loadline">Ship Load Line</a></li>
			<li><a href="javascript:void(0);" id="ship_nationality_and_flag">Ship Nationality &amp; Flag</a></li>
			<li><a href="javascript:void(0);" id="ship_classification">Ship Classification</a></li>
			<li><a href="javascript:void(0);" id="unit_load_data">Unit Load Data</a></li>
			<li><a href="javascript:void(0);" id="hull_shapes">Hull Shapes</a></li>
			<li><a href="javascript:void(0);" id="ships_float">Ships Float</a></li>
			<li><a href="javascript:void(0);" id="wheather_symbols">Whether Symbols</a></li>
			<li><a href="javascript:void(0);" id="types_of_pressure">Types of Pressure</a></li>
			<li><a href="javascript:void(0);" id="types_of_barges">Types Barges</a></li>
			<li><a href="javascript:void(0);" id="types_of_charter">Types of Charter</a></li>
			<li><a href="javascript:void(0);" id="types_of_fumigants">Types of Fumigants</a></li>
			<li><a href="javascript:void(0);" id="types_of_sampling">Types of Sampling</a></li>
			<li><a href="javascript:void(0);" id="table_of_packaging">Table of Packaging</a></li>
			<li><a href="javascript:void(0);" id="types_of_tug_boats">Types of Tug Boats</a></li>
			<li><a href="javascript:void(0);" id="container_parts">Container Parts</a></li>
			<li><a href="javascript:void(0);" id="international_paper_sizes">International Paper Sizes</a></li>
		</ul>
		
	</li>
	<li><a href="javascript:void(0);">JOBS</a>
		<ul>
			<li><a href="<?php echo $httpPathSite;?>job/job.php">Search jobs</a></li>
			<li><a href="<?php echo $httpPathSite;?>job/employer_job_add.php">Add a new requirement</a></li>
		</ul>
	</li>
	<li><a href="<?php echo $httpPathSite;?>job/login.php">LOGIN</a></li>
	<li><a href="<?php echo $httpPathSite;?>contact/contact.php">CONTACT US</a></li>
	<li class="topSearch">
		<select name="">
			<option>Select Category</option>
			<option>Container</option>
			<option>Ship Operation</option>
			<option>Port and Terminals</option>
			<option>Aviation</option>
			<option>Freight &amp; Logistics</option>
			<option>Bulk / Tanker</option>
			<option>Sea Saftey</option>
			<option>Oil &amp; Gas</option>
		</select>
	</li>
</ul>
<!-- HEADER ENDS --> 
