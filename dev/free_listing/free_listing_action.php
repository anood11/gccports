<?php
/*********************************************** Initialise/ Declare variables ************************************************/
global $display_message;

$display_message="";
/*********************************************** Control flow starts **********************************************************/

if(isset($_REQUEST['btnSubmit'])){ 
	getValuesFromForm();
	$display_message=validateForm();
	if($display_message==""){
		$userId=addFreelistUserDetails($company,$address,$telephone,$fax,$email,$website,$organizationHead,$designation,$mobile,$employeeCount);
		if($userId!=0){
			addFreeListCategory($chkShipOwners,$chkShippingAgnts,$chkFreight,$chkAirlines,$chkAirCargo,$chkAirCraft,$chkShipbuilders,$chkEnginBuilders,$chkShipCharters,$chkShipBrokers,$chkBunkers,$chkShipChandler,$chkStevedores,$chkWarehousing,$chkMarineContainer,$chkMaritime,$chkContainerTrucking,$chkEquipmentOwners,$chkCourier,$chkLashing,$chkLogistics,$chkPacking,$chkPestControl,$chkProjectCargo,$chkSupplyChain,$chkConsultants,$chkShipManagers,$chkMaritimeSchool,$chkMarineInsurance,$chkMaritimeLawyers,$chkClassification,$chkTowage,$chkOffshore,$userId);
			if($branch1!="")addFreeListBranch($branch1,$bAddress1,$bPhone1,$bFax1,$bEmail1,$bWebsite1,$userId);
			if($branch2!="")addFreeListBranch($branch2,$bAddress2,$bPhone2,$bFax2,$bEmail2,$bWebsite2,$userId);
			if($branch3!="")addFreeListBranch($branch3,$bAddress3,$bPhone3,$bFax3,$bEmail3,$bWebsite3,$userId);
			if($branch4!="")addFreeListBranch($branch4,$bAddress4,$bPhone3,$bFax4,$bEmail4,$bWebsite4,$userId);
			if($branch5!="")addFreeListBranch($branch5,$bAddress5,$bPhone3,$bFax5,$bEmail5,$bWebsite5,$userId);
			if($branch6!="")addFreeListBranch($branch6,$bAddress6,$bPhone3,$bFax6,$bEmail6,$bWebsite6,$userId);
			$display_message="Details are successfully added and waiting for Admin's approval.";
		}else{
			$display_message="Unable to add details. Please try again later.";
		}
	}setValuesToForm();	
}else{
	getValuesFromForm();
	setValuesToForm();
}
/*********************$************************** Control flow ends ************************************************************/
/*********************************************** Page level functions start ***************************************************/
function getValuesFromForm(){
	global $company;
	global $address;
	global $telephone;
	global $fax;
	global $email;
	global $website;
	global $organizationHead;
	global $designation;
	global $mobile;
	global $employeeCount;
	global $branch1;
	global $bAddress1;
	global $bPhone1;
	global $bFax1;
	global $bEmail1;
	global $bWebsite1; 
	global $branch2;
	global $bAddress2;
	global $bPhone2;
	global $bFax2;
	global $bEmail2;
	global $bWebsite2;
	global $branch3;
	global $bAddress3;
	global $bPhone3;
	global $bFax3;
	global $bEmail3;
	global $bWebsite3;
	global $branch4;
	global $bAddress4;
	global $bPhone4;
	global $bFax4;
	global $bEmail4;
	global $bWebsite4;
	global $branch5;
	global $bAddress5;
	global $bPhone5;
	global $bFax5;
	global $bEmail5;
	global $bWebsite5;
	global $branch6;
	global $bAddress6;
	global $bPhone6;
	global $bFax6;
	global $bEmail6;
	global $bWebsite6; 
	global $chkShipOwners;
	global $chkShippingAgnts;
	global $chkFreight;
	global $chkAirlines;
	global $chkAirCargo;
	global $chkAirCraft;
	global $chkShipbuilders;
	global $chkEnginBuilders;
	global $chkShipCharters;
	global $chkShipBrokers;
	global $chkBunkers;
	global $chkShipChandler;
	global $chkStevedores;
	global $chkWarehousing;
	global $chkMarineContainer;
	global $chkMaritime;
	global $chkContainerTrucking;
	global $chkEquipmentOwners;
	global $chkCourier;
	global $chkLashing;
	global $chkLogistics;
	global $chkPacking;
	global $chkPestControl;
	global $chkProjectCargo;
	global $chkSupplyChain;
	global $chkConsultants;
	global $chkShipManagers;
	global $chkMaritimeSchool;
	global $chkMarineInsurance;
	global $chkMaritimeLawyers;
	global $chkClassification;
	global $chkTowage;
	global $chkOffshore;
	
	$company=isset($_REQUEST['company'])?$_REQUEST['company']:"";
	$address=isset($_REQUEST['address'])?$_REQUEST['address']:"";
	$telephone=isset($_REQUEST['telephone'])?$_REQUEST['telephone']:"";
	$fax=isset($_REQUEST['fax'])?$_REQUEST['fax']:"";
	$email=isset($_REQUEST['email'])?$_REQUEST['email']:"";
	$website=isset($_REQUEST['website'])?$_REQUEST['website']:"";
	$organizationHead=isset($_REQUEST['organizationHead'])?$_REQUEST['organizationHead']:"";
	$designation=isset($_REQUEST['designation'])?$_REQUEST['designation']:"";
	$mobile=isset($_REQUEST['mobile'])?$_REQUEST['mobile']:"";
	$employeeCount=isset($_REQUEST['employeeCount'])?$_REQUEST['employeeCount']:"";
	$branch1=isset($_REQUEST['branch1'])?$_REQUEST['branch1']:"";
	$bAddress1=isset($_REQUEST['bAddress1'])?$_REQUEST['bAddress1']:"";
	$bPhone1=isset($_REQUEST['bPhone1'])?$_REQUEST['bPhone1']:"";
	$bFax1=isset($_REQUEST['bFax1'])?$_REQUEST['bFax1']:"";
	$bEmail1=isset($_REQUEST['bEmail1'])?$_REQUEST['bEmail1']:"";
	$bWebsite1=isset($_REQUEST['bWebsite1'])?$_REQUEST['bWebsite1']:""; 
	$branch2=isset($_REQUEST['branch2'])?$_REQUEST['branch2']:"";
	$bAddress2=isset($_REQUEST['bAddress2'])?$_REQUEST['bAddress2']:"";
	$bPhone2=isset($_REQUEST['bPhone2'])?$_REQUEST['bPhone2']:"";
	$bFax2=isset($_REQUEST['bFax2'])?$_REQUEST['bFax2']:"";
	$bEmail2=isset($_REQUEST['bEmail2'])?$_REQUEST['bEmail2']:"";
	$bWebsite2=isset($_REQUEST['bWebsite2'])?$_REQUEST['bWebsite2']:""; 
	$branch3=isset($_REQUEST['branch3'])?$_REQUEST['branch3']:"";
	$bAddress3=isset($_REQUEST['bAddress3'])?$_REQUEST['bAddress3']:"";
	$bPhone3=isset($_REQUEST['bPhone3'])?$_REQUEST['bPhone3']:"";
	$bFax3=isset($_REQUEST['bFax3'])?$_REQUEST['bFax3']:"";
	$bEmail3=isset($_REQUEST['bEmail3'])?$_REQUEST['bEmail3']:"";
	$bWebsite3=isset($_REQUEST['bWebsite3'])?$_REQUEST['bWebsite3']:""; 
	$branch4=isset($_REQUEST['branch4'])?$_REQUEST['branch4']:"";
	$bAddress4=isset($_REQUEST['bAddress4'])?$_REQUEST['bAddress4']:"";
	$bPhone4=isset($_REQUEST['bPhone4'])?$_REQUEST['bPhone4']:"";
	$bFax4=isset($_REQUEST['bFax4'])?$_REQUEST['bFax4']:"";
	$bEmail4=isset($_REQUEST['bEmail4'])?$_REQUEST['bEmail4']:"";
	$bWebsite4=isset($_REQUEST['bWebsite4'])?$_REQUEST['bWebsite4']:""; 
	$branch5=isset($_REQUEST['branch5'])?$_REQUEST['branch5']:"";
	$bAddress5=isset($_REQUEST['bAddress5'])?$_REQUEST['bAddress5']:"";
	$bPhone5=isset($_REQUEST['bPhone5'])?$_REQUEST['bPhone5']:"";
	$bFax5=isset($_REQUEST['bFax5'])?$_REQUEST['bFax5']:"";
	$bEmail5=isset($_REQUEST['bEmail5'])?$_REQUEST['bEmail5']:"";
	$bWebsite5=isset($_REQUEST['bWebsite5'])?$_REQUEST['bWebsite5']:""; 
	$branch6=isset($_REQUEST['branch6'])?$_REQUEST['branch6']:"";
	$bAddress6=isset($_REQUEST['bAddress6'])?$_REQUEST['bAddress6']:"";
	$bPhone6=isset($_REQUEST['bPhone6'])?$_REQUEST['bPhone6']:"";
	$bFax6=isset($_REQUEST['bFax6'])?$_REQUEST['bFax6']:"";
	$bEmail6=isset($_REQUEST['bEmail6'])?$_REQUEST['bEmail6']:"";
	$bWebsite6=isset($_REQUEST['bWebsite6'])?$_REQUEST['bWebsite6']:""; 
	$chkShipOwners=isset($_REQUEST['chkShipOwners'])?1:0;
	$chkShippingAgnts=isset($_REQUEST['chkShippingAgnts'])?1:0;
	$chkFreight=isset($_REQUEST['chkFreight'])?1:0;
	$chkAirlines=isset($_REQUEST['chkAirlines'])?1:0;
	$chkAirCargo=isset($_REQUEST['chkAirCargo'])?1:0;
	$chkAirCraft=isset($_REQUEST['chkAirCraft'])?1:0;
	$chkShipbuilders=isset($_REQUEST['chkShipbuilders'])?1:0;
	$chkEnginBuilders=isset($_REQUEST['chkEnginBuilders'])?1:0;
	$chkShipCharters=isset($_REQUEST['chkShipCharters'])?1:0;
	$chkShipBrokers=isset($_REQUEST['chkShipBrokers'])?1:0;
	$chkBunkers=isset($_REQUEST['chkBunkers'])?1:0;
	$chkShipChandler=isset($_REQUEST['chkShipChandler'])?1:0;
	$chkStevedores=isset($_REQUEST['chkStevedores'])?1:0;
	$chkWarehousing=isset($_REQUEST['chkWarehousing'])?1:0;
	$chkMarineContainer=isset($_REQUEST['chkMarineContainer'])?1:0;
	$chkMaritime=isset($_REQUEST['chkMaritime'])?1:0;
	$chkContainerTrucking=isset($_REQUEST['chkContainerTrucking'])?1:0;
	$chkEquipmentOwners=isset($_REQUEST['chkEquipmentOwners'])?1:0;
	$chkCourier=isset($_REQUEST['chkCourier'])?1:0;
	$chkLashing=isset($_REQUEST['chkLashing'])?1:0;
	$chkLogistics=isset($_REQUEST['chkLogistics'])?1:0;
	$chkPacking=isset($_REQUEST['chkPacking'])?1:0;
	$chkPestControl=isset($_REQUEST['chkPestControl'])?1:0;
	$chkProjectCargo=isset($_REQUEST['chkProjectCargo'])?1:0;
	$chkSupplyChain=isset($_REQUEST['chkSupplyChain'])?1:0;
	$chkConsultants=isset($_REQUEST['chkConsultants'])?1:0;
	$chkShipManagers=isset($_REQUEST['chkShipManagers'])?1:0;
	$chkMaritimeSchool=isset($_REQUEST['chkMaritimeSchool'])?1:0;
	$chkMarineInsurance=isset($_REQUEST['chkMarineInsurance'])?1:0;
	$chkMaritimeLawyers=isset($_REQUEST['chkMaritimeLawyers'])?1:0;
	$chkClassification=isset($_REQUEST['chkClassification'])?1:0;
	$chkTowage=isset($_REQUEST['chkTowage'])?1:0;
	$chkOffshore=isset($_REQUEST['chkOffshore'])?1:0;
}
function validateForm(){
	global $company;
	global $address;
	global $telephone;
	global $fax;
	global $email;
	global $website;
	global $organizationHead;
	global $designation;
	global $mobile;
	global $employeeCount;
	global $branch1;
	global $bAddress1;
	global $bPhone1;
	global $bFax1;
	global $bEmail1;
	global $bWebsite1; 
	global $branch2;
	global $bAddress2;
	global $bPhone2;
	global $bFax2;
	global $bEmail2;
	global $bWebsite2;
	global $branch3;
	global $bAddress3;
	global $bPhone3;
	global $bFax3;
	global $bEmail3;
	global $bWebsite3;
	global $branch4;
	global $bAddress4;
	global $bPhone4;
	global $bFax4;
	global $bEmail4;
	global $bWebsite4;
	global $branch5;
	global $bAddress5;
	global $bPhone5;
	global $bFax5;
	global $bEmail5;
	global $bWebsite5;
	global $branch6;
	global $bAddress6;
	global $bPhone6;
	global $bFax6;
	global $bEmail6;
	global $bWebsite6; 
	global $chkShipOwners;
	global $chkShippingAgnts;
	global $chkFreight;
	global $chkAirlines;
	global $chkAirCargo;
	global $chkAirCraft;
	global $chkShipbuilders;
	global $chkEnginBuilders;
	global $chkShipCharters;
	global $chkShipBrokers;
	global $chkBunkers;
	global $chkShipChandler;
	global $chkStevedores;
	global $chkWarehousing;
	global $chkMarineContainer;
	global $chkMaritime;
	global $chkContainerTrucking;
	global $chkEquipmentOwners;
	global $chkCourier;
	global $chkLashing;
	global $chkLogistics;
	global $chkPacking;
	global $chkPestControl;
	global $chkProjectCargo;
	global $chkSupplyChain;
	global $chkConsultants;
	global $chkShipManagers;
	global $chkMaritimeSchool;
	global $chkMarineInsurance;
	global $chkMaritimeLawyers;
	global $chkClassification;
	global $chkTowage;
	global $chkOffshore;

	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if((!hasPHPCode($company))||($company=="")){
		$err.=$preMsg."Enter Company name.".$postMsg;
	}else if(!hasPHPCode($address)){
		$err.=$preMsg."Enter valid Address.".$postMsg;
	}else if(!hasPHPCode($telephone)){
		$err.=$preMsg."Enter valid Telephone number.".$postMsg;
	}else if((!isNumeric($telephone))&&($telephone!="")){
		$err.=$preMsg."Telephone number must be integer.".$postMsg;
	}else if(!hasPHPCode($fax)){
		$err.=$preMsg."Enter valid Fax.".$postMsg;
	}else if((!hasPHPCode($email))||($email=="")||(!isEmail($email))){
		$err.=$preMsg."Enter valid Email Address.".$postMsg;
	}else if(!hasPHPCode($website)){
		$err.=$preMsg."Select valid Website.".$postMsg;
	}else if(!hasPHPCode($organizationHead)){
		$err.=$preMsg."Select valid Head of Organization.".$postMsg;
	}else if(!hasPHPCode($designation)){
		$err.=$preMsg."Select valid Destination.".$postMsg;
	}else if(!hasPHPCode($mobile)){
		$err.=$preMsg."Enter valid Mobile number.".$postMsg;
	}else if((!isNumeric($mobile))&&($mobile!="")){
		$err.=$preMsg."Mobile number must be Integer.".$postMsg;
	}else if(!hasPHPCode($employeeCount)){
		$err.=$preMsg."Select valid Number of Employees.".$postMsg;
	}else if((!isNumeric($employeeCount))&&($employeeCount!="")){
		$err.=$preMsg."Number of Employees must be an integer value.".$postMsg;
	}else if((!hasPHPCode($branch1))&&($branch1!="")){
		$err.=$preMsg."Select valid data in 1st Branch.".$postMsg;
	}else if((!hasPHPCode($branch2))&&($branch2!="")){
		$err.=$preMsg."Select valid data in 2nd Branch.".$postMsg;
	}else if((!hasPHPCode($branch3))&&($branch3!="")){
		$err.=$preMsg."Select valid data in 3rd Branch.".$postMsg;
	}else if((!hasPHPCode($branch4))&&($branch4!="")){
		$err.=$preMsg."Select valid data in 4th Branch.".$postMsg;
	}else if((!hasPHPCode($branch5))&&($branch5!="")){
		$err.=$preMsg."Select valid data in 5th Branch.".$postMsg;
	}else if((!hasPHPCode($branch6))&&($branch6!="")){
		$err.=$preMsg."Select valid data in 6th Branch.".$postMsg;
	}else if((!hasPHPCode($bAddress1))&&($bAddress1!="")){
		$err.=$preMsg."Select valid address for 1st branch.".$postMsg;
	}else if((!hasPHPCode($bAddress2))&&($bAddress2!="")){
		$err.=$preMsg."Select valid address for 2nd branch.".$postMsg;
	}else if((!hasPHPCode($bAddress3))&&($bAddress3!="")){
		$err.=$preMsg."Select valid address for 3rd branch.".$postMsg;
	}else if((!hasPHPCode($bAddress4))&&($bAddress4!="")){
		$err.=$preMsg."Select valid address for 4th branch.".$postMsg;
	}else if((!hasPHPCode($bAddress5))&&($bAddress5!="")){
		$err.=$preMsg."Select valid address for 5th branch.".$postMsg;
	}else if((!hasPHPCode($bAddress6))&&($bAddress6!="")){
		$err.=$preMsg."Select valid address for 6th branch.".$postMsg;
	}else if((!hasPHPCode($bPhone1))&&($bPhone1!="")){
		$err.=$preMsg."Select valid Phone number for 1st branch.".$postMsg;
	}else if((!hasPHPCode($bPhone2))&&($bPhone2!="")){
		$err.=$preMsg."Select valid Phone number for 2nd branch.".$postMsg;
	}else if((!hasPHPCode($bPhone3))&&($bPhone3!="")){
		$err.=$preMsg."Select valid Phone number for 3rd branch.".$postMsg;
	}else if((!hasPHPCode($bPhone4))&&($bPhone4!="")){
		$err.=$preMsg."Select valid Phone number for 4th branch.".$postMsg;
	}else if((!hasPHPCode($bPhone5))&&($bPhone5!="")){
		$err.=$preMsg."Select valid Phone number for 5th branch.".$postMsg;
	}else if((!hasPHPCode($bPhone6))&&($bPhone6!="")){
		$err.=$preMsg."Select valid Phone number for 6th branch.".$postMsg;
	}else if((!hasPHPCode($bFax1))&&($bFax1!="")){
		$err.=$preMsg."Select valid Fax for 1st branch.".$postMsg;
	}else if((!hasPHPCode($bFax2))&&($bFax2!="")){
		$err.=$preMsg."Select valid Fax for 2nd branch.".$postMsg;
	}else if((!hasPHPCode($bFax3))&&($bFax3!="")){
		$err.=$preMsg."Select valid Fax for 3rd branch.".$postMsg;
	}else if((!hasPHPCode($bFax4))&&($bFax4!="")){
		$err.=$preMsg."Select valid Fax for 4th branch.".$postMsg;
	}else if((!hasPHPCode($bFax5))&&($bFax5!="")){
		$err.=$preMsg."Select valid Fax for 5th branch.".$postMsg;
	}else if((!hasPHPCode($bFax6))&&($bFax6!="")){
		$err.=$preMsg."Select valid Fax for 6th branch.".$postMsg;
	}else if((!hasPHPCode($bEmail1))&&($bEmail1!="")){
		$err.=$preMsg."Select valid Email for 1st branch.".$postMsg;
	}else if((!hasPHPCode($bEmail2))&&($bEmail2!="")){
		$err.=$preMsg."Select valid Email for 2nd branch.".$postMsg;
	}else if((!hasPHPCode($bEmail3))&&($bEmail3!="")){
		$err.=$preMsg."Select valid Email for 3rd branch.".$postMsg;
	}else if((!hasPHPCode($bEmail4))&&($bEmail4!="")){
		$err.=$preMsg."Select valid Email for 4th branch.".$postMsg;
	}else if((!hasPHPCode($bEmail5))&&($bEmail5!="")){
		$err.=$preMsg."Select valid Email for 5th branch.".$postMsg;
	}else if((!hasPHPCode($bEmail6))&&($bEmail6!="")){
		$err.=$preMsg."Select valid Email for 6th branch.".$postMsg;
	}else if((!hasPHPCode($bWebsite1))&&($bWebsite1!="")){
		$err.=$preMsg."Select valid Website for 1st branch.".$postMsg;
	}else if((!hasPHPCode($bWebsite2))&&($bWebsite2!="")){
		$err.=$preMsg."Select valid Website for 2nd branch.".$postMsg;
	}else if((!hasPHPCode($bWebsite3))&&($bWebsite3!="")){
		$err.=$preMsg."Select valid Website for 3rd branch.".$postMsg;
	}else if((!hasPHPCode($bWebsite4))&&($bWebsite4!="")){
		$err.=$preMsg."Select valid Website for 4th branch.".$postMsg;
	}else if((!hasPHPCode($bWebsite5))&&($bWebsite5!="")){
		$err.=$preMsg."Select valid Website for 5th branch.".$postMsg;
	}else if((!hasPHPCode($bWebsite6))&&($bWebsite6!="")){
		$err.=$preMsg."Select valid Website for 6th branch.".$postMsg;
	}else if(!hasPHPCode($chkShipOwners)){
		$err.=$preMsg."Invalid entry for Ship Owners / Operators.".$postMsg;
	}else if(!hasPHPCode($chkShippingAgnts)){
		$err.=$preMsg."Invalid entry for Liners, Shipping Agents & NVOCC.".$postMsg;
	}else if(!hasPHPCode($chkFreight)){
		$err.=$preMsg."Invalid entry for Freight Forwarding & Clearing Agents.".$postMsg;
	}else if(!hasPHPCode($chkAirlines)){
		$err.=$preMsg."Invalid entry for Airlines (Cargo).".$postMsg;
	}else if(!hasPHPCode($chkAirCargo)){
		$err.=$preMsg."Invalid entry for Air Cargo Agents.".$postMsg;
	}else if(!hasPHPCode($chkAirCraft)){
		$err.=$preMsg."Invalid entry for Air Craft Chartering & Leasing.".$postMsg;
	}else if(!hasPHPCode($chkShipbuilders)){
		$err.=$preMsg."Invalid entry for Shipbuilders & Repairers.".$postMsg;
	}else if(!hasPHPCode($chkEnginBuilders)){
		$err.=$preMsg."Invalid entry for Engine Builders.".$postMsg;
	}else if(!hasPHPCode($chkShipCharters)){
		$err.=$preMsg."Invalid entry for Ship Charters.".$postMsg;
	}else if(!hasPHPCode($chkShipBrokers)){
		$err.=$preMsg."Invalid entry for Ship Brokers.".$postMsg;
	}else if(!hasPHPCode($chkBunkers)){
		$err.=$preMsg."Invalid entry for Bunkers.".$postMsg;
	}else if(!hasPHPCode($chkShipChandler)){
		$err.=$preMsg."Invalid entry for Ship Chandler.".$postMsg;
	}else if(!hasPHPCode($chkStevedores)){
		$err.=$preMsg."Invalid entry for Stevedores.".$postMsg;
	}else if(!hasPHPCode($chkWarehousing)){
		$err.=$preMsg."Invalid entry for Warehousing & Storage.".$postMsg;
	}else if(!hasPHPCode($chkMarineContainer)){
		$err.=$preMsg."Invalid entry for Marine Container Conversions & Hire.".$postMsg;
	}else if(!hasPHPCode($chkMaritime)){
		$err.=$preMsg."Invalid entry for Maritime Organisations.".$postMsg;
	}else if(!hasPHPCode($chkContainerTrucking)){
		$err.=$preMsg."Invalid entry for Container Trucking.".$postMsg;
	}else if(!hasPHPCode($chkEquipmentOwners)){
		$err.=$preMsg."Invalid entry for Equipment Owners, Manufacturers, Repairers, Leasing & Handling.".$postMsg;
	}else if(!hasPHPCode($chkCourier)){
		$err.=$preMsg."Invalid entry for Courier Services.".$postMsg;
	}else if(!hasPHPCode($chkLashing)){
		$err.=$preMsg."Invalid entry for Lashing & Securing.".$postMsg;
	}else if(!hasPHPCode($chkLogistics)){
		$err.=$preMsg."Invalid entry for Logistics & Distribution.".$postMsg;
	}else if(!hasPHPCode($chkPacking)){
		$err.=$preMsg."Invalid entry for Packing & Removals.".$postMsg;
	}else if(!hasPHPCode($chkPestControl)){
		$err.=$preMsg."Invalid entry for Pest Control & Fumigation Services.".$postMsg;
	}else if(!hasPHPCode($chkProjectCargo)){
		$err.=$preMsg."Invalid entry for Project Cargo Handling.".$postMsg;
	}else if(!hasPHPCode($chkSupplyChain)){
		$err.=$preMsg."Invalid entry for Supply Chain Management.".$postMsg;
	}else if(!hasPHPCode($chkConsultants)){
		$err.=$preMsg."Invalid entry for Consultants & Surveyors.".$postMsg;
	}else if(!hasPHPCode($chkShipManagers)){
		$err.=$preMsg."Invalid entry for Ship Managers.".$postMsg;
	}else if(!hasPHPCode($chkMaritimeSchool)){
		$err.=$preMsg."Invalid entry for Maritime Schools.".$postMsg;
	}else if(!hasPHPCode($chkMarineInsurance)){
		$err.=$preMsg."Invalid entry for Marine Insuranc.".$postMsg;
	}else if(!hasPHPCode($chkMaritimeLawyers)){
		$err.=$preMsg."Invalid entry for Maritime Lawyers.".$postMsg;
	}else if(!hasPHPCode($chkClassification)){
		$err.=$preMsg."Invalid entry for Classification Societies.".$postMsg;
	}else if(!hasPHPCode($chkTowage)){
		$err.=$preMsg."Invalid entry for Towage & Salvage.".$postMsg;
	}else if(!hasPHPCode($chkOffshore)){
		$err.=$preMsg."Invalid entry for Offshore/Onshore Marine Equipment.".$postMsg;
	}
	return $err;
}
function setValuesToForm(){
global $company;
	global $address;
	global $telephone;
	global $fax;
	global $email;
	global $website;
	global $organizationHead;
	global $designation;
	global $mobile;
	global $employeeCount;
	global $branch1;
	global $bAddress1;
	global $bPhone1;
	global $bFax1;
	global $bEmail1;
	global $bWebsite1; 
	global $branch2;
	global $bAddress2;
	global $bPhone2;
	global $bFax2;
	global $bEmail2;
	global $bWebsite2;
	global $branch3;
	global $bAddress3;
	global $bPhone3;
	global $bFax3;
	global $bEmail3;
	global $bWebsite3;
	global $branch4;
	global $bAddress4;
	global $bPhone4;
	global $bFax4;
	global $bEmail4;
	global $bWebsite4;
	global $branch5;
	global $bAddress5;
	global $bPhone5;
	global $bFax5;
	global $bEmail5;
	global $bWebsite5;
	global $branch6;
	global $bAddress6;
	global $bPhone6;
	global $bFax6;
	global $bEmail6;
	global $bWebsite6; 
	global $chkShipOwners;
	global $chkShippingAgnts;
	global $chkFreight;
	global $chkAirlines;
	global $chkAirCargo;
	global $chkAirCraft;
	global $chkShipbuilders;
	global $chkEnginBuilders;
	global $chkShipCharters;
	global $chkShipBrokers;
	global $chkBunkers;
	global $chkShipChandler;
	global $chkStevedores;
	global $chkWarehousing;
	global $chkMarineContainer;
	global $chkMaritime;
	global $chkContainerTrucking;
	global $chkEquipmentOwners;
	global $chkCourier;
	global $chkLashing;
	global $chkLogistics;
	global $chkPacking;
	global $chkPestControl;
	global $chkProjectCargo;
	global $chkSupplyChain;
	global $chkConsultants;
	global $chkShipManagers;
	global $chkMaritimeSchool;
	global $chkMarineInsurance;
	global $chkMaritimeLawyers;
	global $chkClassification;
	global $chkTowage;
	global $chkOffshore;	
	
	$company=formatDisplayText($company);
	$address=formatDisplayText($address);
	$telephone=formatDisplayText($telephone);
	$fax=formatDisplayText($fax);
	$email=formatDisplayText($email);
	$website=formatDisplayText($website);
	$organizationHead=formatDisplayText($organizationHead);
	$designation=formatDisplayText($designation);
	$mobile=formatDisplayText($mobile);
	$employeeCount=formatDisplayText($employeeCount);
	$branch1=formatDisplayText($branch1);
	$bAddress1=formatDisplayText($bAddress1);
	$bPhone1=formatDisplayText($bPhone1);
	$bFax1=formatDisplayText($bFax1);
	$bEmail1=formatDisplayText($bEmail1);
	$bWebsite1=formatDisplayText($bWebsite1); 
	$branch2=formatDisplayText($branch2);
	$bAddress2=formatDisplayText($bAddress2);
	$bPhone2=formatDisplayText($bPhone2);
	$bFax2=formatDisplayText($bFax2);
	$bEmail2=formatDisplayText($bEmail2);
	$bWebsite2=formatDisplayText($bWebsite2);
	$branch3=formatDisplayText($branch3);
	$bAddress3=formatDisplayText($bAddress3);
	$bPhone3=formatDisplayText($bPhone3);
	$bFax3=formatDisplayText($bFax3);
	$bEmail3=formatDisplayText($bEmail3);
	$bWebsite3=formatDisplayText($bWebsite3);
	$branch4=formatDisplayText($branch4);
	$bAddress4=formatDisplayText($bAddress4);
	$bPhone4=formatDisplayText($bPhone4);
	$bFax4=formatDisplayText($bFax4);
	$bEmail4=formatDisplayText($bEmail4);
	$bWebsite4=formatDisplayText($bWebsite4);
	$branch5=formatDisplayText($branch5);
	$bAddress5=formatDisplayText($bAddress5);
	$bPhone5=formatDisplayText($bPhone5);
	$bFax5=formatDisplayText($bFax5);
	$bEmail5=formatDisplayText($bEmail5);
	$bWebsite5=formatDisplayText($bWebsite5);
	$branch6=formatDisplayText($branch6);
	$bAddress6=formatDisplayText($bAddress6);
	$bPhone6=formatDisplayText($bPhone6);
	$bFax6=formatDisplayText($bFax6);
	$bEmail6=formatDisplayText($bEmail6);
	$bWebsite6=formatDisplayText($bWebsite6); 
	$chkShipOwners=formatDisplayText($chkShipOwners);
	$chkShippingAgnts=formatDisplayText($chkShippingAgnts);
	$chkFreight=formatDisplayText($chkFreight);
	$chkAirlines=formatDisplayText($chkAirlines);
	$chkAirCargo=formatDisplayText($chkAirCargo);
	$chkAirCraft=formatDisplayText($chkAirCraft);
	$chkShipbuilders=formatDisplayText($chkShipbuilders);
	$chkEnginBuilders=formatDisplayText($chkEnginBuilders);
	$chkShipCharters=formatDisplayText($chkShipCharters);
	$chkShipBrokers=formatDisplayText($chkShipBrokers);
	$chkBunkers=formatDisplayText($chkBunkers);
	$chkShipChandler=formatDisplayText($chkShipChandler);
	$chkStevedores=formatDisplayText($chkStevedores);
	$chkWarehousing=formatDisplayText($chkWarehousing);
	$chkMarineContainer=formatDisplayText($chkMarineContainer);
	$chkMaritime=formatDisplayText($chkMaritime);
	$chkContainerTrucking=formatDisplayText($chkContainerTrucking);
	$chkEquipmentOwners=formatDisplayText($chkEquipmentOwners);
	$chkCourier=formatDisplayText($chkCourier);
	$chkLashing=formatDisplayText($chkLashing);
	$chkLogistics=formatDisplayText($chkLogistics);
	$chkPacking=formatDisplayText($chkPacking);
	$chkPestControl=formatDisplayText($chkPestControl);
	$chkProjectCargo=formatDisplayText($chkProjectCargo);
	$chkSupplyChain=formatDisplayText($chkSupplyChain);
	$chkConsultants=formatDisplayText($chkConsultants);
	$chkShipManagers=formatDisplayText($chkShipManagers);
	$chkMaritimeSchool=formatDisplayText($chkMaritimeSchool);
	$chkMarineInsurance=formatDisplayText($chkMarineInsurance);
	$chkMaritimeLawyers=formatDisplayText($chkMaritimeLawyers);
	$chkClassification=formatDisplayText($chkClassification);
	$chkTowage=formatDisplayText($chkTowage);
	$chkOffshore=formatDisplayText($chkOffshore);
}
/*********************************************** Page level functions ends ****************************************************/

?>