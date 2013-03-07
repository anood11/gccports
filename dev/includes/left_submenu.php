<div class="wrapper">
	<div class="left"> 
		<!-- LEFTSIDE NAVIGATION ENDS
		<ul class="leftNav">
			<li><a href="">HOME</a></li>
			<li><a href="">DIRECTORY</a></li>
			<li><a href="">PORTS</a></li>
			<li><a href="">ASSOCIATIONS</a></li>
			<li><a href="">USEFUL LINKS</a></li>
			<li><a href="">JOBS</a></li>
			<li><a href="">CONTACT US</a></li>
		</ul>
	 LEFTSIDE NAVIGATION ENDS --> 
	<div class="sideInner left">
		<h1 class="newsHead">Airport Search</h1>
		<ul>
			<li><label>Sort by</label></li>
			<li>
			<select id="airportCategorys">
				<option value="airportID">None</option>
				<option value="airportName">Airport Name</option>
				<option value="airportCode">Airport Code</option>
				<option value="cityName">City Name</option>
				<option value="country">Country</option>
				<option value="countryAbbreviation">Country Abbreviation</option>
			</select>
			</li>
			<li><input type="submit" value="Airport Search" id="airportSearch" onclick="airportSearch();"/></li>
		</ul>
	</div>
	<div class="sideInner left">
		<img src="<?php echo $httpPathSite;?>resources/images/sailing-schedules.gif" width="100%" alt="" />
	</div>
	
	<div class="sideInner left">
		<h1 class="newsHead">Track &amp; Trace</h1>
		<ul>
			<li><label>Select Category</label></li>
			<li><select id="tCategory">
			<option value="-1">--Select--</option>
			<?php while($track=$db->sql_fetchrow($categoryLists)){?>
				<option value="<?php echo $track['category'];?>"><?php echo $track['category'];?></option>
			<?php } ?>
			</select></li>
			<li><input type="button" name="btnTrackTrace" value="Track &amp; Trace" onClick="trackTrace();"/>	
			</li>
		</ul>
	</div>
	
	<div class="sideInner left">
		<h1 class="newsHead">Seaport Search</h1>
		<ul>
			<li><label>Sort by</label></li>
			<li>
				<select id="seaportCategorys">
					<option value="seaportId">None</option>
					<option value="seaportName">Seaport Name</option>
					<option value="country">Country</option>
					<option value="code">Seaport Code</option>
			</select>
			</li>
			<li><input type="button" value="Seaport Search" onclick="seaportSearch();"/></li>
		</ul>
	</div>
	
	<div class="sideInner left"><a href="<?php echo $httpPathSite;?>search/telephone_codes.php"><img src="<?php echo $httpPathSite;?>resources/images/telephoneCodes.jpg" width="100%" alt="" /></a>
		<ul>
			<li><label>Telephone Code</label></li>
			<li><input type="text" value="" id="telephoneCodez"/></li>
			<li><label>Country</label></li>
			<li><select id="telephoneCountrys">
				<option value="">--Select Country--</option>
				<?php while($telephone=$db->sql_fetchrow($telephoneCountryList)){?>
				<option value="<?php echo $telephone['country'];?>"><?php echo $telephone['country'];?></option>
				<?php } ?>
		</select></li>
			<li><label>Internet IP</label></li>
			<li><input type="text" value="" id="internetIPs"/></li>
			<li>
			<input type="button" name="btnSearchTC" value="Search" onclick="telephoneCodes();"/>
			<input type="button" value="New" onclick="clearTelephoneCode();"/>
			</li>
		</ul>
	</div>
	
	</div>