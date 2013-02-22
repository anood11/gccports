$(document).ready(function() {
	
});

function airportSearch(){
	var name=$('#airportName').val();
	var country=$('#airportCountry').val();
	var iata=$('#airportIATA').val();
	var icao=$('#airportICAO').val();
	if(name=="") alert('Airport Name can not be left blank');
	else if(country=="-1") alert('Select one Country');
	else if(iata=="") alert('IATA Code can not be left blank');
	else if(icao=="") alert('ICAO Code can not be left blank');
	else {
		var queryString="?airportSearch=1&name="+name+"&iata="+iata+"&icao="+icao+"&countryAb="+country;
		window.location.href=baseURLsite+'search/airport_search.php'+queryString;
	}
}
function airlineSearch(){
	var name=$('#airlineName').val();
	var country=$('#airlineCountry').val();
	var iata=$('#airlineIATA').val();
	var icao=$('#airlineICAO').val();
	var awb=$("#awbPrefix").val();
	if(name=="") alert('Airline Name can not be left blank');
	else if(country=="-1") alert('Select one Country');
	else if(iata=="") alert('IATA Code can not be left blank');
	else if(icao=="") alert('ICAO Code can not be left blank');
	else if(awb=="") alert('AWB Prefix can not be left blank');
	else {
		var queryString="?airlineSearch=1&name="+name+"&iata="+iata+"&icao="+icao+"&country="+country+"&awb="+awb;
		window.location.href=baseURLsite+'search/airline_search.php'+queryString;
	}
}