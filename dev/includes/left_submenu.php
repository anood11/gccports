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
			<li><label>Airport Name</label></li>
			
			<li><input type="text" id="airportName" value="<?php echo $airportName;?>"/></li>
			<li><label>Country</label></li>
			<li><select id="airportCountry">
					<option value="-1">Select Country</option>
					<?php while($airport=$db->sql_fetchrow($airportCountryList)){?>
					<option value="<?php echo $airport['country'];?>" <?php if($airportCountry==$airport['country']) echo "selected";?>><?php echo $airport['country'];?></option>
					<?php } ?>
				</select>
			</li>
			<li><label>Country Abbreviation</label></li>
			<li><select id="airportAbbreviation">
					<option value="-1">Select Abbreviation</option>
					<?php while($abbreviation=$db->sql_fetchrow($airportCountryAbbreviations)){?>
					<option value="<?php echo $abbreviation['countryAbbreviation'];?>" <?php if($airportCountryAbbreviation==$abbreviation['countryAbbreviation']) echo "selected";?>><?php echo $abbreviation['countryAbbreviation'];?></option>
					<?php } ?>
				</select>
			</li>
			<li><label>City Name</label></li>
			<li><input type="text" id="airportCity" value="<?php echo $airportCity;?>" /></li>
			<li><label>Airport Code</label></li>
			<li><input type="text" id="airportCode" value="<?php echo $airportCode;?>"/></li>
			<li><input type="submit" value="Search" id="airportSearch" onclick="airportSearch();"/></li>
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
			<li><label>Seaport Name</label></li>
			<li><input type="text" name="seaportName" value="<?php echo $seaportName;?>" id="seaportName"/></li>
			<li><label>Country</label></li>
			<li><select id="seaportCountry">
					<option value="-1">Select Country</option>
					<?php while($seaport=$db->sql_fetchrow($seaportCountryList)){?>
					<option value="<?php echo $seaport['country'];?>" <?php if($seaportCountry==$seaport['country']) echo "selected";?>><?php echo $seaport['country'];?></option>
					<?php } ?>
				</select></li>
			<li><label>Port Code</label></li>
			<li><input type="text" name="seaportCode" id="seaportCode" value="<?php echo $seaportCode;?>"/></li>
			<li><input type="button" value="Search" onclick="seaportSearch();"/></li>
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
			<li><input type="button" name="btnSearchTC" value="Search" onclick="telephoneCodes();"/></li>
		</ul>
	</div>
	
	</div>