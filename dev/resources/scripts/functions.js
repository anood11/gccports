$(document).ready(function() {
	
});

function airportSearch(){
	var name=$('#airportName').val();
	var country=$('#airportCountry').val();
	var city=$('#airportCity').val();
	var code=$('#airportCode').val();
	var abbr=$("#airportAbbreviation").val();
	if((name=="")&&(country=="-1")&&(abbr=="-1")&&(city=="")&&(code=="")) alert('Please enter atleast one search key');
	else {
		var queryString="?airportSearch=1&name="+name+"&city="+city+"&code="+code+"&country="+country+"&abbrv="+abbr;
		window.location.href=baseURLsite+'search/airport_search.php'+queryString;
	}
}
function airlineSearch(){
	var name=$('#airlineName').val();
	var country=$('#airlineCountry').val();
	var iata=$('#airlineIATA').val();
	var icao=$('#airlineICAO').val();
	var awb=$("#awbPrefix").val();
	if((name=="")&&(country=="-1")&&(iata=="")&&(icao=="")&&(awb==""))alert('Please enter atleast one search key');
	else {
		var queryString="?airlineSearch=1&name="+name+"&iata="+iata+"&icao="+icao+"&country="+country+"&awb="+awb;
		window.location.href=baseURLsite+'search/airline_search.php'+queryString;
	}
}
function seaportSearch(){
	var name=$('#seaportName').val();
	var country=$('#seaportCountry').val();
	var code=$('#seaportCode').val();
	/*var longi=$('#seaportLongitude').val();
	var lati=$('#seaportLatitude').val(); &&(longi=="")&&(lati=="")
	*/if((name=="")&&(country=="-1")&&(code==""))alert('Please enter atleast one search key');
	else {
		var queryString="?seaportSearch=1&name="+name+"&country="+country+"&code="+code+"&searchType=seaport";
		window.location.href=baseURLsite+'search/seaport_search.php'+queryString;
	}
}
function subscribeNews(){
	var name=$("#subscribeName").val();
	var company=$("#subscribeCompany").val();
	var country=$("#subscribeCountry").val();
	var email=$("#subscribeEmail").val();
	if(name==""){
		alert("Please enter your name");
	}else if(company==""){
		alert("Please enter your Company name");
	}else if(country=="-1"){
		alert("Please select your Country");
	}else if(email==""){
		alert("Please enter your Email ID");
	}else if(!isMailId(email)){
		alert("Please enter valid Mail ID");
	}else{	
			$.post(baseURLsite+"news/subscribe_news.php?subscribeNews=1&name="+name+"&company="+company+"&country="+country+"&email="+email,
			function(data) {
				$("#subscrbeRes").empty();
				$("#subscrbeRes").append(data);
			});
	}	
}
function isMailId($email) {
	  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	  if( !emailReg.test( $email ) ) {
	    return false;
	  } else {
	    return true;
	  }
	}
