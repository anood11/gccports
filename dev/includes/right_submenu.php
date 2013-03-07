	<div class="right"> 
	<div class="sideInner right">
		<h1 class="newsHead">Airline Search</h1>
		<ul>
			<li><label>Sort by</label></li>
			<li>
				<select name="airlineCategory" id="airlineCategorys">
					<option value="airlineId">None</option>
					<option value="airlineName">Airline Name</option>
					<option value="iata">IATA Code</option>
					<option value="icao">ICAO Code</option>
					<option value="awbPrefix">AWB Prefix</option>
					<option value="country">Country</option>
				</select>
			</li>
			<li><input type="button" value="Airline Search" name="airlineSearch" onclick="airlineSearch();"/></li>
		</ul>
	</div>
	
	<div class="sideInner right">
	<a href="<?php echo $httpPathSite;?>job/job.php"><img src="<?php echo $httpPathSite;?>resources/images/job.jpg" width="100%" alt=""/></a>
	</div>
	
	<div class="sideInner right">
		<h1 class="newsHead">Subscribe News</h1>
		<ul>
			<li class="displayMessage" id="subscrbeRes">	</li>	
			<li><label>Name</label></li>
			<li><input type="text" name="subscribeName" id="subscribeName" value=""/></li>
			<li><label>Company</label></li>
			<li><input type="text" name="subscribeCompany" id="subscribeCompany" value="" /></li>
			<li><label>Country</label></li>
			<li><select name="subscribeCountry" id="subscribeCountry">
				<option value="-1">Select Country</option> 
				<?php while($country=$db->sql_fetchrow($countryList)){?>
				<option value="<?php echo $country['countryId'];?>"><?php echo $country['countryName'];?></option>
				<?php } ?>
				</select>
			</li>
			<li><label>Email</label></li>
			<li><input type="text" id="subscribeEmail" value=""/></li>
			<li><input type="button" name="btnSubscribe" value="Subscribe" onclick="subscribeNews();"/></li>
		</ul>
	</div>
	
	<div class="sideInner right"> 
		<!--Begin Currency Converter Code--> 
		
		<!--<ul>
			<li>
			<a href="http://www.gocurrency.com/" id="gocurrency" style="text-decoration: initial; visibility: hidden; display: none;">.</a>
		 <script src="http://www.gocurrency.com/v2/gocurrcalc_t.php?id=53"> </script><script src="http://gocurrency.com/v2/rcalculator.php"></script><link rel="stylesheet" href="http://gocurrency.com/v2/s.php?nazvanie=&amp;id=53" type="text/css">
		 </li>
		</ul>-->
		
		<script src="resources/scripts/exchange_rates_api.asp" type="text/javascript"></script>
		<noscript>
		<br/>
		<span style="color: red;">Please enable your javascript.</span>
		</noscript>
		
		 <!--End Currency Converter Code--> 
	</div>
	
	</div>
</div>
<div class="topStrip blue"></div>