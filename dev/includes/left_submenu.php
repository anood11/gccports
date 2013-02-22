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
					<option value="<?php echo $airport['countryAbbreviation'];?>" <?php if($airportCountry==$airport['countryAbbreviation']) echo "selected";?>><?php echo $airport['country'];?></option>
					<?php } ?>
				</select>
			</li>
			<li><label>IATA Code</label></li>
			<li><input type="text" id="airportIATA" value="<?php echo $airportIATA;?>" /></li>
			<li><label>ICAO</label></li>
			<li><input type="text" id="airportICAO" value="<?php echo $airportICAO;?>"/></li>
			<li><input type="submit" value="Airport Search" id="airportSearch" onclick="airportSearch();"/></li>
		</ul>
	</div>
	<div class="sideInner left">
		<img src="<?php echo $httpPathSite;?>resources/images/sailing-schedules.gif" width="100%" alt="" />
	</div>
	<div class="sideInner left">
		<h1 class="newsHead">Seaport Search</h1>
		<ul>
			<li><label>Seaport Name</label></li>
			<li><input type="text" /></li>
			<li><label>Country</label></li>
			<li><select><option>Select Country</option></select></li>
			<li><label>Port Code</label></li>
			<li><input type="text" /></li>
			<li><input type="submit" value="Seaport Search" /></li>
		</ul>
	</div>
	</div>