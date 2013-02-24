	<div class="right"> 
	<div class="sideInner right">
		<img src="<?php echo $httpPathSite;?>resources/images/track-and-trace.png" width="100%" alt="" />
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
				<option value="1">India</option>
				</select>
			</li>
			<li><label>Email</label></li>
			<li><input type="text" id="subscribeEmail" value=""/></li>
			<li><input type="button" name="btnSubscribe" value="Subscribe" onclick="subscribeNews();"/></li>
		</ul>
	</div>
	<div class="sideInner right">
		<h1 class="newsHead">Airline Search</h1>
		<ul>
			<li><label>Airline Name</label></li>
			<li><input type="text" id="airlineName" value="<?php echo $airlineName; ?>"/></li>
			<li><label>Country</label></li>
			<li>
				<select id="airlineCountry">
					<option value="-1">Select Country</option>
					<?php while($airline=$db->sql_fetchrow($airlineCountryList)){?>
					<option value="<?php echo $airline['country'];?>" <?php if($airlineCountry==$airline['country']) echo "selected";?>><?php echo $airline['country'];?></option>
					<?php } ?>
				</select>
			</li>
			<li><label>IATA Code</label></li>
			<li><input type="text"id="airlineIATA" value="<?php echo $airlineIATA;?>"/></li>
			<li><label>ICAO</label></li>
			<li><input type="text" id="airlineICAO" value="<?php echo $airlineICAO;?>"/></li>
			<li><label>AWB Prefix</label></li>
			<li><input type="text" id="awbPrefix" value="<?php echo $awbPrefix;?>"/></li>
			<li><input type="button" value="Airline Search" name="airlineSearch" onclick="airlineSearch();"/></li>
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