if(window.event + "" == "undefined") event = null;
function HM_f_PopUp(){return false};
function HM_f_PopDown(){return false};
popUp = HM_f_PopUp;
popDown = HM_f_PopDown;
NS4 = (document.layers);    //SY
isIE = (document.all);
imagePath =  "/images/en/home_page/";     // SY07

// SY08 start
function mOver(e)
{
    if(isIE)
    {
        event.srcElement.style.background = "#FF9C00";
        event.srcElement.style.cursor = "Hand";
    }
    else
    {
        e.target.style.background = "#FF6300";
        e.target.style.cursor = "Pointer";
    }
}

function mOut(e)
{
    if(isIE)
    {
        event.srcElement.style.background = "#FFCE63";
    }
    else
    {
        e.target.style.background = "#FFCE63";
    }
}

var isLoaded = false;

function startIt() {
   isLoaded = true;
}

// window.onload = startIt;

  function WTStart() {
    if (isLoaded == true) {
      kickStart();
      sysTimeRun();
    } else {
        setTimeout("WTStart()",1000);
    }
  }


var cCount = 0;
var ctry = new Array();
var tSub = new Array();
 
// SKJ 3/10/2000 - make GMT "selectable"
 
mCty("Greenwich Mean Time","GMT","GMT","-00:00:00","","","","")
mCty("AFGHANISTAN","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("ALBANIA","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("ALGERIA","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("AMERICAN SAMOA","GMT P11","GMT PLUS 11","+11:00:00","","","","")
mCty("ANDORRA","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("ANGOLA","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("ANGUILLA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("ANTIGUA & BARBUDA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("ARGENTINA","GMT P3","GMT PLUS 3","+03:00:00","","","","")
mCty("ARMENIA","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("ARUBA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("AUSTRALIA","AUC","AUSTRALIAN CENTRAL TIME","-09:30:00","ASC","-10:30:00","M10.5.0/02:00:00","M3.4.0/02:00:00")
mCty("AUSTRALIA","AUE","AUSTRALIAN EASTERN TIME","-10:00:00","ASE","-11:00:00","M10.5.0/02:00:00","M3.4.0/02:00:00")
mCty("AUSTRALIA","AUQ","AUSTRALIAN QUEENSLAND TIME","-09:00:00","ASQ","-10:00:00","M10.5.0/02:00:00","M3.4.0/02:00:00")
mCty("AUSTRALIA","AUW","AUSTALIAN WESTERN TIME","-07:00:00","ASW","-08:00:00","M10.5.0/02:00:00","M3.4.0/02:00:00")
mCty("AUSTRIA","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("AZERBAIJAN","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("BAHAMAS","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("BAHRAIN","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("BANGLADESH","GMT M6","GMT MINUS 6","-06:00:00","","","","")
mCty("BARBADOS","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("BELARUS","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("BELGIUM","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("BELIZE","GMT P6","GMT PLUS 6","+06:00:00","","","","")
mCty("BENIN","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("BERMUDA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("BOLIVIA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("BOSNIA & H/GOVINA","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("BOTSWANA","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("BRAZIL","LAS P3","LATIN AMERICA TIME PLUS 3","+03:00:00","LAD P2","+02:00:00","M10.2.0/02:00:00","M3.2.0/02:00:00")
mCty("BRAZIL","LAS P4","LATIN AMERICA TIME PLUS 4","+04:00:00","LAD P3","+03:00:00","M10.2.0/02:00:00","M3.2.0/02:00:00")
mCty("BRAZIL","LAS P5","LATIN AMERICA TIME PLUS 5","+05:00:00","LAD P4","+04:00:00","M10.2.0/02:00:00","M3.2.0/02:00:00")
mCty("BRUNEI","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("BULGARIA","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("BURKINA FASO","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("BURUNDI","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("CAMBODIA","GMT M7","GMT MINUS 7","-07:00:00","","","","")
mCty("CAMEROON","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("CANADA","AST","US/CANADA ATLANTIC STANDARD TIME","+04:00:00","ADT","+03:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("CANADA","CST","US CANADA CENTRAL STANDARD TIME","+06:00:00","CDT","+05:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("CANADA","EST","US CANADA EASTERN STANDARD TIME","+05:00:00","EDT","+04:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("CANADA","MST","US CANADA MOUNTAIN STANDARD TIME","+07:00:00","MDT","+06:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("CANADA","PST","US CANADA PACIFIC STANDARD TIME","+08:00:00","PDT","+07:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("CAPE VERDE","GMT P1","GMT PLUS 1","+01:00:00","","","","")
mCty("CAYMAN ISLANDS","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("CENT.AFRICAN REP","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("CHAD","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("CHILE","LAS P4","LATIN AMERICA TIME PLUS 4","+04:00:00","LAD P3","+03:00:00","M10.2.0/02:00:00","M3.2.0/02:00:00")
mCty("CHINA","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("CHRISTMAS ISLAND","GMT P7","GMT PLUS 7","+07:00:00","","","","")
mCty("COCOS ISLANDS","GMT M65","GMT MINUS 6 POINT 5","-06:30:00","","","","")
mCty("COLOMBIA","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("COMOROS","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("CONGO","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("COOK ISLANDS","GMT P10","GMT PLUS 10","+10:00:00","","","","")
mCty("COSTA RICA","GMT P6","GMT PLUS 6","+06:00:00","","","","")
mCty("COTE D' IVOIRE","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("CROATIA","GMT P2","GMT PLUS 2","+02:00:00","","","","")
mCty("CUBA","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("CYPRUS","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("CZECH REPUBLIC","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("D.REP OF CONGO","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("DENMARK","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("DJIBOUTI","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("DOMINICA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("DOMINICAN REP.","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("EAST TIMOR","GMT M10","GMT MINUS 10","-10:00:00","","","","")
mCty("ECUADOR","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("EGYPT","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("EL SALVADOR","GMT P6","GMT PLUS 6","+06:00:00","","","","")
mCty("EQUATORIAL GUINEA","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("ERITREA","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("ESTONIA","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("ETHIOPIA","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("FALKLAND ISLANDS","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("FAROE ISLANDS","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("FIJI","GMT P11","GMT PLUS 11","+11:00:00","","","","")
mCty("FINLAND","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("FRANCE","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("FRENCH GUIANA","GMT P3","GMT PLUS 3","+03:00:00","","","","")
mCty("FRENCH POLYNESIA","GMT P10","GMT PLUS 10","+10:00:00","","","","")
mCty("GABON","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("GAMBIA","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("GEORGIA","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("GERMANY","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("GHANA","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("GIBRALTAR","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("GREECE","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("GREENLAND","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("GRENADA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("GUADELOUPE","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("GUAM","GMT P10","GMT PLUS 10","+10:00:00","","","","")
mCty("GUATEMALA","GMT P6","GMT PLUS 6","+06:00:00","","","","")
mCty("GUINEA","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("GUINEA-BISSAU","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("GUYANA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("HAITI","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("HONDURAS","GMT P6","GMT PLUS 6","+06:00:00","","","","")
mCty("HONG KONG","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("HUNGARY","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("ICELAND","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("INDIA","IST","INDIAN STANDARD TIME","-05:30:00","","","","")
mCty("INDONESIA","GMT M7","GMT MINUS 7","-07:00:00","","","","")
mCty("IRAN","GMT M5","GMT MINUS 5","-05:00:00","","","","")
mCty("IRAQ","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("IRELAND","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("ISRAEL","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("ITALY","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("JAMAICA","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("JAPAN","GMT M9","GMT MINUS 9","-09:00:00","","","","")
mCty("JORDAN","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("KAZAKHSTAN","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("KENYA","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("KIRIBATI","GMT M12","GMT MINUS 12","-12:00:00","","","","")
mCty("KOREA, D.P.R.","GMT M9","GMT MINUS 9","-09:00:00","","","","")
mCty("KOREA, REP OF","GMT M9","GMT MINUS 9","-09:00:00","","","","")
mCty("KUWAIT","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("KYRGYZSTAN","GMT M6","GMT MINUS 6","-06:00:00","","","","")
mCty("LAO","GMT M7","GMT MINUS 7","-07:00:00","","","","")
mCty("LATVIA","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("LEBANON","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("LESOTHO","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("LIBERIA","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("LIBYA","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("LIECHTENSTEIN","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("LITHUANIA","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("LUXEMBOURG","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("MACAU","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("MACEDONIA","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("MADAGASCAR","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("MALAWI","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("MALAYSIA","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("MALDIVES","GMT M5","GMT MINUS 5","-05:00:00","","","","")
mCty("MALI","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("MALTA","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("MARTINIQUE","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("MAURITANIA","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("MAURITIUS","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("MAYOTTE","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("MEXICO","GMT P6","GMT PLUS 6","+06:00:00","","","","")
mCty("MICRONESIA","GMT P11","GMT PLUS 11","+11:00:00","","","","")
mCty("MOLDOVA","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("MONACO","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("MONGOLIA","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("MONSERRAT","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("MOROCCO","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("MOZAMBIQUE","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("MYANMAR","MMST","MYANMAR STANDARD TIME","-06:30:00","","","","")
mCty("NAMIBIA","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("NAURU","GMT M12","GMT MINUS 12","-12:00:00","","","","")
mCty("NEPAL","NST","NEPAL STANDARD TIME","-05:45:00","","","","")
mCty("NETH.ANTILLES","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("NETHERLANDS","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("NEW CALEDONIA","GMT M11","GMT MINUS 11","-11:00:00","","","","")
mCty("NEW ZEALAND","NZT","NEW ZEALAND  TIME","-12:00:00","NZS","-13:00:00","M10.1.0/02:00:00","M3.1.0/02:00:00")
mCty("NICARAGUA","GMT P6","GMT PLUS 6","+06:00:00","","","","")
mCty("NIGER","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("NIGERIA","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("NIUE","GMT P95","GMT PLUS 9 POINT 5","+09:30:00","","","","")
mCty("NORFOLK ISLAND","GMT P115","GMT PLUS 11 POINT 5","+11:30:00","","","","")
mCty("NORWAY","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("NTHN MARIANAS","GMT M10","GMT MINUS 10","-10:00:00","","","","")
mCty("OMAN","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("PAKISTAN","GMT M5","GMT MINUS 5","-05:00:00","","","","")
mCty("PAKISTAN","PKT","PAKISTANI STANDARD TIME","-05:00:00","PKD","-06:00:00","M04.2.0/02:00:00","M10.1.0/02:00:00")
mCty("PANAMA","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("PAPUA NEW GUINEA","GMT M10","GMT MINUS 10","-10:00:00","","","","")
mCty("PARAGUAY","GMT P3","GMT PLUS 3","+03:00:00","","","","")
mCty("PERU","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("PHILIPPINES","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("PITCAIRN","GMT P9","GMT PLUS 9","+09:00:00","","","","")
mCty("POLAND","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("PORTUGAL","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("PUERTO RICO","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("QATAR","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("REUNION","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("ROMANIA","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("RUSSIAN FED","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("RUSSIAN FED","GMT M10","GMT MINUS 10","-10:00:00","","","","")
mCty("RUSSIAN FED","GMT M11","GMT MINUS 11","-11:00:00","","","","")
mCty("RUSSIAN FED","GMT M12","GMT MINUS 12","-12:00:00","","","","")
mCty("RUSSIAN FED","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("RUSSIAN FED","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("RUSSIAN FED","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("RUSSIAN FED","GMT M5","GMT MINUS 5","-05:00:00","","","","")
mCty("RUSSIAN FED","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("RUSSIAN FED","GMT M9","GMT MINUS 9","-09:00:00","","","","")
mCty("RWANDA","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("SAINT LUCIA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("SAMOA","GMT P11","GMT PLUS 11","+11:00:00","","","","")
mCty("SAN MARINO","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SAO TOME & PRINCP","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SAUDI ARABIA","SAT","SAUDI ARABIAN TIME","-03:00:00","","","","")
mCty("SENEGAL","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SEYCHELLES","GMT M4","GMT MINUS 4","-04:00:00","","","","")
mCty("SIERRA LEONE","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SINGAPORE","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("SLOVAKIA","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SLOVENIA","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SOLOMON ISLES","GMT P11","GMT PLUS 11","+11:00:00","","","","")
mCty("SOMALIA","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("SOUTH AFRICA","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("SPAIN","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SPAIN","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SRI LANKA","IST","INDIAN STANDARD TIME","-05:30:00","","","","")
mCty("ST HELENA","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("ST KITTS-NEVIS","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("ST PIERRE &MIQ","GMT P3","GMT PLUS 3","+03:00:00","","","","")
mCty("ST VINCENT & GREN","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("SUDAN","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("SURINAME","GMT P3","GMT PLUS 3","+03:00:00","","","","")
mCty("SWAZILAND","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("SWEDEN","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SWITZERLAND","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("SYRIAN ARAB REP","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("TAIWAN","GMT M8","GMT MINUS 8","-08:00:00","","","","")
mCty("TAJIKISTAN","GMT M6","GMT MINUS 6","-06:00:00","","","","")
mCty("TANZANIA","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("THAILAND","GMT M7","GMT MINUS 7","-07:00:00","","","","")
mCty("TOGO","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("TONGA","GMT P11","GMT PLUS 11","+11:00:00","","","","")
mCty("TRINIDAD & TOBAGO","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("TUNISIA","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("TURKEY","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("TURKMENISTAN","GMT M5","GMT MINUS 5","-05:00:00","","","","")
mCty("TURKS & CAICOS IS","GMT P5","GMT PLUS 5","+05:00:00","","","","")
mCty("TUVALU","GMT M12","GMT MINUS 12","-12:00:00","","","","")
mCty("U.A.E.","AET","ARABIAN GULF TIME","-04:00:00","","","","")
mCty("UGANDA","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("UKRAINE","EET","EASTERN EUROPEAN TIME","-02:00:00","EES","-03:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("UNITED KINGDOM","GMT","GREENWICH MEANTIME","00:00:00","BST","-01:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("URUGUAY","GMT P3","GMT PLUS 3","+03:00:00","","","","")
mCty("USA","CST","US CANADA CENTRAL STANDARD TIME","+06:00:00","CDT","+05:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("USA","EST","US CANADA EASTERN STANDARD TIME","+05:00:00","EDT","+04:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("USA","HST","US ALASKA/HAWAII STANDARD TIME","+10:00:00","HDT","+09:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("USA","MST","US CANADA MOUNTAIN STANDARD TIME","+07:00:00","MDT","+06:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("USA","PST","US CANADA PACIFIC STANDARD TIME","+08:00:00","PDT","+07:00:00","M04.1.0/02:00:00","M10.5.0/02:00:00")
mCty("UZBEKISTAN","GMT M5","GMT MINUS 5","-05:00:00","","","","")
mCty("VANUATU","GMT P11","GMT PLUS 11","+11:00:00","","","","")
mCty("VENEZUELA","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("VIETNAM","GMT M7","GMT MINUS 7","-07:00:00","","","","")
mCty("VIRGIN ISLANDS GB","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("VIRGIN ISLANDS US","GMT P4","GMT PLUS 4","+04:00:00","","","","")
mCty("WALLIS & FUT ISL","GMT P10","GMT PLUS 10","+10:00:00","","","","")
mCty("YEMEN","GMT M3","GMT MINUS 3","-03:00:00","","","","")
mCty("YUGOSLAVIA","CET","CENTRAL EUROPEAN TIME","-01:00:00","CES","-02:00:00","M03.4.0/02:00:00","M10.5.0/02:00:00")
mCty("ZAIRE","GMT M1","GMT MINUS 1","-01:00:00","","","","")
mCty("ZAMBIA","GMT M2","GMT MINUS 2","-02:00:00","","","","")
mCty("ZIMBABWE","GMT M2","GMT MINUS 2","-02:00:00","","","","")


/*----------------------------------------
	Build country arrays
----------------------------------------*/
 
var mCount = 0
 
var tzName
function mCty(country,tzCode,tzName,offsetStd,dstzCode,offsetDst,sumStart,sumEnd){
 
 
	if (!tSub[country])	tSub[country] = new Array();
	subPos = tSub[country].length;
	tSub[country][subPos]= new Array (tzCode)
    
	cCount=ctry.length
	ctry[cCount] = new Array(country,tzCode,tzName,offsetStd,dstzCode,offsetDst,sumStart,sumEnd);
 
 
}
 
 
/*----------------------------------------
	Write drop-down list to browser
----------------------------------------*/
localcount = 1;
function writeCtry(){
 
var urp = /PLUS/g;
var urm = /MINUS/g
 
		/* 
        The Dropdown list for "Select a country"
 
		In the database data is inserted opposite for example
 
		For Cuba "GMT PLUS 5"  have been inserted as "GMT MINUS 5" 
		and for ARMENIA "GMT MINUS 4"  have been inserted as "GMT PLUS 5"
 
		The following codes correct the data problem.
 
	   */
	
	// SKJ 3/10/2000 document.write('<option value="" class="ContentTypeTextStyle">Greenwich Mean Time')
	for (i=0; i < ctry.length; i++){
		if (tSub[ctry[i][0]].length <= 1) {
			document.write('<option value="'+i+'" class="ContentTypeTextStyle">'+ctry[i][0])
		}
		else {
			if (localcount == 1){
				document.write('<option value="" class="greyForm">' + ctry[i][0] + ' =>')
				if (ctry[i][2].match(urp) != null){
 
				  ctry[i][2] = ctry[i][2].replace(/PLUS/g,"MINUS");
 
				  }
 
				   else if (ctry[i][2].match(urm) != null){
 
				   ctry[i][2] = ctry[i][2].replace(/MINUS/g,"PLUS");
 
				   }   
				  document.write('<option value="'+i+'" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + ctry[i][2])
				localcount += 1;
			}
			else {
			    if (ctry[i][2].match(urp) != null)
				 {  
				
 
				   ctry[i][2] = ctry[i][2].replace(/PLUS/g,"MINUS");
 
			     } else if (ctry[i][2].match(urm) != null){
 
				   ctry[i][2] = ctry[i][2].replace(/MINUS/g,"PLUS");
 
				   }   
 
				   document.write('<option value="'+i+'" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + ctry[i][2])
				localcount += 1;
			}
			if(localcount == tSub[ctry[i][0]].length +1) { 
				localcount = 1;
			}
		}
	}
}
 
 
 
 
 
// seed data from server gmtTime
//  This is GMT Time. - make a note here about months 0-11.  
 
 
d=new Date();
seedYY = d.getFullYear();
seedMO = d.getMonth();
seedDD = d.getDate();
seedHH = d.getUTCHours();
seedMM = d.getUTCMinutes();
seedSS = d.getUTCSeconds();

 
 
var days=new Array()					
//create array for days
days[0]="Sun"; 
days[1]="Mon"; 
days[2]="Tue"; 
days[3]="Wed"; 
days[4]="Thu";
days[5]="Fri"; 
days[6]="Sat";
 
var months=new Array()					
//create array for months
months[0]="Jan"; 
months[1]="Feb"; 
months[2]="Mar";
months[3]="Apr"; 
months[4]="May"; 
months[5]="Jun";
months[6]="Jul"; 
months[7]="Aug"; 
months[8]="Sep";
months[9]="Oct"; 
months[10]="Nov"; 
months[11]="Dec";
 
 
var monthDays=new Array()					
//create array for days in month
monthDays["Jan"]=31; 
 
		//Checkecking for no of days in Feb in case of Leap Year.
	if( seedYY % 4 == 0){
 
		monthDays["Feb"]=29; 
 
	  }else{
 
		monthDays["Feb"]=28; 	  
	  
	  }
monthDays["Mar"]=31;
monthDays["Apr"]=30; 
monthDays["May"]=31; 
monthDays["Jun"]=30;
monthDays["Jul"]=31; 
monthDays["Aug"]=31; 
monthDays["Sep"]=30;
monthDays["Oct"]=31; 
monthDays["Nov"]=30; 
monthDays["Dec"]=31;
 
 
 
var now,hs,ms,ss,YY,MM,DD,DT,runTid
 
 
/*----------------------------------------
Start the offset clock with supplied
offset
----------------------------------------*/
function kickStart(inHr,inMm,oper){
	if (inHr){
/*  Operator altered here for time as the difference in time values(compared to GMT) that are being 
 
     fetched from the database is opposite in sign so the following adjustment is done below.
-----------------------------------------------------------------------------------------------------			
*/
				if(oper == '-'){
					oper = '+';
				}else{
	   				oper = '-';
 
				}
 
//----------------------------------------------------------------------------------------------------
 
         seedNH = eval(seedHH + oper + inHr);
 
   	}
	else {
	
		 seedNH = seedHH
	}
 
/*
----------------------------------------------------------
Minute checking is done below
----------------------------------------------------------
 
*/
    if(inMm){
   	     seedMH = parseInt(seedMM + inMm)
	}else{
		seedMH= seedMM;
 
	}
   if(seedMH >= 60){
 
	seedMH = parseInt(seedMH - 60);
    seedNH = parseInt(seedNH + 1);
 
 
 }
 
 
//----------------------------------------------------------
 
	seedNow = new Date(seedYY,seedMO,seedDD,seedNH,seedMH,seedSS);
	
	now = new Date(seedNow);
 
	hs = now.getHours();  
	ms = now.getMinutes();
	ss = now.getSeconds();
 	
	YY = now.getFullYear();
	MM = now.getMonth();
	DD = now.getDay();
	DT = now.getDate();
	
    //alert(seedNow);
	// fire-up the clock
	runClock();
}
 
/*----------------------------------------
Start and run a local system clock
----------------------------------------*/
function sysTimeRun(){
	
	snow = new Date()
	shs = snow.getHours();		(shs<10) ? shs="0"+shs : shs;
	sms = snow.getMinutes();	(sms<10) ? sms="0"+sms : sms;
	sss = snow.getSeconds();	(sss<10) ? sss="0"+sss : sss;
	sYY = snow.getFullYear();
	sMM = snow.getMonth();
	sDD = snow.getDay();
	sDT = snow.getDate();
 
	
	sysT = shs + ':' + sms + ':' + sss + '  on ' + days[sDD] + ', ' + sDT + ' ' + months[sMM] + ' ' + sYY
 
	document.sysForm.sysTimer.value = sysT
	sysTid=setTimeout("sysTimeRun();",1000)
 
 
}
 
/*----------------------------------------
Running of the offset clock (can't use
Javascript date object as it will return
systimes
----------------------------------------*/
function runClock(){

	ss = parseInt(ss)
	ms = parseInt(ms)
	hs = parseInt(hs)
	DD = parseInt(DD)
	DT = parseInt(DT)
	MM = parseInt(MM)
	YY = parseInt(YY)
 
 
	// get name of month for no. of days in month
	mnthNm = months[MM]
 
        if (ss < 59){ ss += 1;}
        else { ms +=1; ss = 1;}
        if (ss < 10) { rss = "0" + ss; } else { rss = ss; }           
 
	// increment minutes
	if (ms == 60) { hs += 1; ms = 0; } 
        if (ms < 10) { rms = "0" + ms; } else { rms = ms; }           
 
        // increment hours
      if (hs < 24){ }
      else { DD+=1; DT+=1; hs=0; }  
      if (hs<10) { rhs = "0" + hs ;} else { rhs = hs; }
  
	// increment days of week
	if (DD < 7) { } else { DD=0; }
	// increment date
	if (DT <= monthDays[mnthNm]) { } else { MM+=1; DT=1; }
	
	// increment years
	if (MM < 12) { } else { MM=0; YY+=1;}
 
	// normalise 'hh mm ss' add '0' if less than 10
	//if(ss < 10) { ss="0"+ss }
	//if(ms < 10) { ms="0"+ms }
	//if(hs < 10) { hs="0"+hs }
 
	nnTime = rhs + ':' + rms + ':' + rss + '  on ' + days[DD] + ', ' + DT + ' ' + months[MM] + ' ' + YY
 
      
	// <Chander 20/12/2000>
	// Increment system time as well
	seedSS = parseInt(seedSS)
	seedMM = parseInt(seedMM)
	seedHH = parseInt(seedHH)
	seedDD = parseInt(seedDD)
	seedMO = parseInt(seedMO)
	seedYY = parseInt(seedYY)
 
	// get name of month for no. of days in month
	mnthNm = months[seedMO]
	if (seedSS < 59){ seedSS += 1;}
	else { seedMM +=1; seedSS = 1;}
 
	// increment minutes
	if (seedMM == 60) { seedHH += 1; seedMM = 0; } 
 
	// increment hours
 
	if (seedHH < 24){ }
	else { seedDD+=1; seedHH=0; }  
 
	// increment date
	if (seedDD <= monthDays[mnthNm]) { } else { seedMO+=1; seedDD=1; }
 
	// increment years
	if (seedMO < 12) { } else { seedMO=0; seedYY+=1;}
	// </Chander 20/12/2000>
 
	document.clocks.nowTime.value = nnTime
	runTid = setTimeout("runClock();",1000);
 
}
 
 
function resetToSeedGMT(){
       
  //  seedNow = new Date(getseedval());
 
	now = new Date(seedYY,seedMO,seedDD,seedHH,seedMM,seedSS);
	hs = now.getHours();  
	ms = now.getMinutes();
	ss = now.getSeconds();
	YY = now.getFullYear();
	MM = now.getMonth();

	
	DD = now.getDay();
	DT = now.getDate();

       
	gmTime = hs + ':' + ms + ':' + ss + '  on ' + days[DD] + ', ' + DT + ' ' + months[MM] + ' ' + YY

	document.clocks.nowTime.value = gmTime

}
 
 
// get the value of the form to pass to the update function
function doUpdate(){
	fIndex = document.forms['zones'].countries.options.selectedIndex
	iVal = document.forms['zones'].countries.options[fIndex].value


	if (iVal == '') {
		alert('Please select a time zone for this country')
	}
	else {
		ctryUpdate(iVal)
	}
 
}
 
function ctryUpdate(recId){
 
resetToSeedGMT()
 
date_status = "today";
 
var y = seedDD
var mon = seedMO
var z = seedYY
	
	// Check for daylight savings
	dstStatus = false; 
	if (ctry[recId][6] != '' && ctry[recId][7] != ''){
		//Start Date
		dstStart = ctry[recId][6];
		FoundPosition =1;
		StartPosition=1;
		FoundPosition = dstStart.indexOf('.',StartPosition);
		dstStartMonth = dstStart.substr(StartPosition,FoundPosition-StartPosition);
		StartPosition=FoundPosition+1;
		FoundPosition = dstStart.indexOf('.',StartPosition);
		dstStartDay = dstStart.substr(StartPosition,FoundPosition-StartPosition);
		dstStartDate = new Date(2000,dstStartMonth,dstStartDay);

		//End Date
		dstStart = ctry[recId][7];
		FoundPosition =1;
		StartPosition=1;
		FoundPosition = dstStart.indexOf('.',StartPosition);
		dstEndMonth = dstStart.substr(StartPosition,FoundPosition-StartPosition);
		StartPosition=FoundPosition+1;
		FoundPosition = dstStart.indexOf('.',StartPosition);
		dstEndDay = dstStart.substr(StartPosition,FoundPosition-StartPosition);
		dstEndYear = 2000;
		CurrentYear = 2000;
		if (dstStartMonth*1 > dstEndMonth*1) {
          dstEndYear++;
          if (seedMO+1 < dstEndMonth*1) {
			CurrentYear++;
		  }
		}
	    dstEndDate = new Date(dstEndYear,dstEndMonth,dstEndDay);
		currentMonthDate = new Date(CurrentYear,seedMO+1,seedDD);

		//alert('Start= '+dstStartDate.getTime()+'\nEnd= '+dstEndDate.getTime()+'\nNow= '+currentMonthDate.getTime());

		if (currentMonthDate.getTime() >= dstStartDate.getTime() && currentMonthDate.getTime() <= dstEndDate.getTime() ){
		  dstStatus = true; 
        }

          
		/*
		//Start Date
		dstStart = ctry[recId][6];
		Position = dstStart.indexOf('.',1);
		alert(dstStart+' ' +Position);
		dstStartMonth = dstStart.substr(1,Position-1);

		
		//Check for the month 
	



		dstStartMonth = parseInt(ctry[recId][6].substr(1,2)); 
		dstEndMonth = parseInt(ctry[recId][7].substr(1,2));
		if (dstStartMonth<10) { dstStartMonth='0'+dstStartMonth; }
		if (dstEndMonth<10) { dstEndMonth='0'+dstEndMonth; }

		//if (dstStartMonth.substr(0,1) == '0') {dstStartMonth = dstStartMonth.substr(1,1) }
		//(dstStartMonth<10) ? dstStartMonth= '0' + dstStartMonth : dstStartMonth;

		//if (dstEndMonth.substr(0,1) == '0'){ dstEndMonth = dstEndMonth.substr(1,1) }
		//(dstEndMonth<10) ? dstEndMonth= '0' + dstEndMonth : dstEndMonth;
	
		// Check for the date 

		dstStartDate = parseInt(ctry[recId][6].substr(4,1)); 
		dstEndDate = parseInt(ctry[recId][7].substr(4,1)); 		
		if (dstStartDate<10) { dstStartDate='0'+dstStartDate; }
		if (dstEndDate<10) { dstEndDate='0'+dstEndDate; }
		
		dstStartMonthDate = parseFloat(dstStartMonth +'.'+ dstStartDate)
		dstEndMonthDate = parseFloat(dstEndMonth +'.'+ dstEndDate)
			
		// do a date range check for daylight savings depending on range or start / End
		if (dstStartMonthDate > dstEndMonthDate) {
          dstEndMonthDate += 12.00;
		}
        alert( 'currentMonthDate= '+currentMonthDate+'\n dstStartMonthDate= '+dstStartMonthDate+'\n dstEndMonthDate= '+dstEndMonthDate+'\n dstStartDate='+dstStartDate);

		if (currentMonthDate >= dstStartMonthDate && currentMonthDate <= dstEndMonthDate ){
		  dstStatus = true; 
        } */
	}
	
	// set hour offset according to dst
	if (dstStatus){
       // use dst offset
	     offset = ctry[recId][5]; 
	 
	   //document.clocks.dst.value = offset + ' (DST)'
	    if (!NS4){
			//document.clocks.elements[2].checked = true;
			//document.clocks.elements[3].checked = false;
	    }
	}
	else {
	   // use standard offset
	  offset = ctry[recId][3];
  
	   //document.clocks.dst.value = offset + ' (STD)'
		if (!NS4){
			//document.clocks.elements[3].checked = true;
		//	document.clocks.elements[2].checked = false;
		}
	}
 
	// get '+' or '-' operator of dst
		operator = offset.substr(0,1)
		
	// get the Hr and Min value  from offset 
      offsetval = offset.substr(1,2)
		
    // check whether Hr is single digit char, get the hr and min values

	// SKJ 4/1/01 Addede *1 here as ParseInt producing Strange results.
	// the *1 fools javascript into thinking a variable is numeric.
 
		if (offset.charAt(2) == ':'){
			 offHH = parseInt(offset.substr(1,1)*1)
			 offMM = parseInt(offset.substr(3,2)*1)
 
		}
		else {
			offHH = parseInt(offset.substr(1,2)*1)
			offMM = parseInt(offset.substr(4,2)*1)
 
 
		}
 
	// do offset
	//reset()
	pause = clearTimeout(runTid)
    kickStart(offHH,offMM,operator)
 
}