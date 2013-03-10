$(document).ready(function() {
	$(".lettersAP").click(function(){
	var name=($(this).attr('id'));
	var city=$("#city").val();
	var code=$("#code").val();
	var country=$("#country").val();
	var abbr=$("#abbrv").val();
	var sort=$("#airportCategory").val();
	var queryString="?airportSearch=1&name="+name+"&city="+city+"&country="+country+"&code="+code+"&abbrv="+abbr+"&airportCategory="+sort;
	window.location.href=baseURLsite+'search/airport_search.php'+queryString;
});
$(".lettersAL").click(function(){
	var name=($(this).attr('id'));
	var iata=$("#iata").val();
	var icao=$("#icao").val();
	var awb=$("#awb").val();
	var country=$("#country").val();
	var airlineCategory=$("#airlineCategory").val();
	var queryString="?airlineSearch=1&name="+name+"&iata="+iata+"&country="+country+"&icao="+icao+"&airlineCategory="+airlineCategory+"&awb="+awb;
		window.location.href=baseURLsite+'search/airline_search.php'+queryString;
});
$(".lettersSP").click(function(){
	var name=($(this).attr('id'));
	var country=$('#country').val();
	var code=$('#code').val();
	var sort=$('#seaportCategory').val();
	var queryString="?seaportSearch=1&name="+name+"&country="+country+"&code="+code+"&seaportCategory="+sort+"&searchType=seaport";
	window.location.href=baseURLsite+'search/seaport_search.php'+queryString;
});
$(".lettersSS").click(function(){
	var name=($(this).attr('id'));
	window.location.href=baseURLsite+'search/sailing_schedules.php?name='+name;
});
$(".lettersSD").click(function(){
	var name=($(this).attr('id'));
	window.location.href=baseURLsite+'search/seaport_directory.php?name='+name;
});
$(".lettersAD").click(function(){
	var name=($(this).attr('id'));
	window.location.href=baseURLsite+'search/airport_directory.php?name='+name;
});
$(".lettersLA").click(function(){
	var name=($(this).attr('id'));
	var category=$("#category").val();
	window.location.href=baseURLsite+'associations/list_associations.php?category='+category+'&name='+name;
});
});
function airportSearch(){
	var sort=$('#airportCategorys').val();
	if(sort==""){ alert('Please select one sort option'); }
	else {
		var queryString="?airportSearch=1&airportCategory="+sort+"&name=a";
		window.location.href=baseURLsite+'search/airport_search.php'+queryString;
	}
}
function airlineSearch(){
	var sort=$("#airlineCategorys").val();
	if(sort=="")alert('Please select one sort option');
	else {
		var queryString="?airlineSearch=1&name=a&airlineCategory="+sort;
		window.location.href=baseURLsite+'search/airline_search.php'+queryString;
	}
}
function seaportSearch(){
	var sort=$('#seaportCategorys').val();
	if(sort=="")alert('Please select one sort option');
	else {
		var queryString="?seaportSearch=1&name=a&seaportCategory="+sort;
		window.location.href=baseURLsite+'search/seaport_search.php'+queryString;
	}
}
/*function airportSearch(){
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
	if((name=="")&&(country=="-1")&&(code==""))alert('Please enter atleast one search key');
	else {
		var queryString="?seaportSearch=1&name="+name+"&country="+country+"&code="+code+"&searchType=seaport";
		window.location.href=baseURLsite+'search/seaport_search.php'+queryString;
	}
}*/

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
function trackTrace(){
	var category=$("#tCategory").val();
	window.location.href=baseURLsite+"search/track_trace.php?category="+category;
}
function telephoneCodes(){
	var code=$("#telephoneCodez").val();
	var ip=$("#internetIPs").val();
	var country=$('#telephoneCountrys').val();
	//$("#telephoneCountry").val('Canada ');
	if((code=='')&&(ip=='')&&(country=='')){
		alert('Please fill atleast one field');
	}
	else {
		queryString='code='+code+'&ip='+ip+'&tpCountry='+country;
		$.post(
				baseURLsite+"news/subscribe_news.php?telephoneCodes=1&"+queryString,
				function(data) {
					
					res=data.split('-');
					$("#telephoneCountrys").val(res[0]);
					$("#telephoneCodez").val(res[1]);
					$("#internetIPs").val(res[2]);
					//$("#telephoneCodez").attr('value',res[1]);
					//$("#internetIPs").attr('value',res[2]);
				}
			);
	}
}
function clearTelephoneCode(){
	$("#telephoneCodez").val('');
	$("#internetIPs").val('');
	$("#telephoneCountrys").val('');
}