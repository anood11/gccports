$(document).ready(function() {
	
});

function airportSearch(){
	var name=$('#airportName').val();
	var country=$('#airportCountry').val();
	var city=$('#airportCity').val();
	var code=$('#airportCode').val();
	if((name=="")&&(country=="-1")&&(city=="")&&(code=="")) alert('Please enter atleast one search key');
	else {
		var queryString="?airportSearch=1&name="+name+"&city="+city+"&code="+code+"&countryAb="+country;
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
	if((name=="")&&(country=="-1")&&(code==""))alert('Please enter atleast one search key');
	else {
		var queryString="?seaportSearch=1&name="+name+"&country="+country+"&code="+code;
		window.location.href=baseURLsite+'search/seaport_search.php'+queryString;
	}
}