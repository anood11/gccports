<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>


<div class="center">
<h1 class="newsHead">World time zone &raquo;</h1>
<ul class="modifySearch">
<li>
	<div class="topContent">
	<p></p>
	<p><strong>Current time on your computer:<br />
		</strong></p>
<form name="sysForm" id="sysForm">
	<input value="" class="ContentItemTextStyle" name="sysTimer" size="33" />
</form>
<script type="text/javascript">

						var m_names = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

						var w_names = new Array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");

                        var currentTime = new Date()

                        var month = currentTime.getMonth() + 1

                        var day = currentTime.getDate()

                        var year = currentTime.getFullYear()

                        var hr=currentTime.getHours();

                        var mn=currentTime.getMinutes();

                        var sc=currentTime.getSeconds();

						//11:44:26  on Thu, 21 Apr 2011

                        document.sysForm.sysTimer.value=hr + ":" + mn + ":" + sc + " on " + w_names[currentTime.getDay()] + ", " + " " + day + " " + m_names[currentTime.getMonth()] +" " +  year;

                        //document.write(month + "/" + day + "/" + year)

                        </script>
<p> <strong>Select country:</strong></p>
<form name="zones" id="zones">
	<select name="countries" onchange="doUpdate()">
		<script>writeCtry();</script>
		<option selected="selected" value="0" class="ContentTypeTextStyle">Greenwich Mean Time</option>
		<option value="1" class="ContentTypeTextStyle">AFGHANISTAN</option>
		<option value="2" class="ContentTypeTextStyle">ALBANIA</option>
		<option value="3" class="ContentTypeTextStyle">ALGERIA</option>
		<option value="4" class="ContentTypeTextStyle">AMERICAN SAMOA</option>
		<option value="5" class="ContentTypeTextStyle">ANDORRA</option>
		<option value="6" class="ContentTypeTextStyle">ANGOLA</option>
		<option value="7" class="ContentTypeTextStyle">ANGUILLA</option>
		<option value="8" class="ContentTypeTextStyle">ANTIGUA &amp; BARBUDA</option>
		<option value="9" class="ContentTypeTextStyle">ARGENTINA</option>
		<option value="10" class="ContentTypeTextStyle">ARMENIA</option>
		<option value="11" class="ContentTypeTextStyle">ARUBA</option>
		<option value="" class="greyForm">AUSTRALIA =&gt;</option>
		<option value="12" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUSTRALIAN CENTRAL TIME</option>
		<option value="13" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUSTRALIAN EASTERN TIME</option>
		<option value="14" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUSTRALIAN QUEENSLAND TIME</option>
		<option value="15" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUSTALIAN WESTERN TIME</option>
		<option value="16" class="ContentTypeTextStyle">AUSTRIA</option>
		<option value="17" class="ContentTypeTextStyle">AZERBAIJAN</option>
		<option value="18" class="ContentTypeTextStyle">BAHAMAS</option>
		<option value="19" class="ContentTypeTextStyle">BAHRAIN</option>
		<option value="20" class="ContentTypeTextStyle">BANGLADESH</option>
		<option value="21" class="ContentTypeTextStyle">BARBADOS</option>
		<option value="22" class="ContentTypeTextStyle">BELARUS</option>
		<option value="23" class="ContentTypeTextStyle">BELGIUM</option>
		<option value="24" class="ContentTypeTextStyle">BELIZE</option>
		<option value="25" class="ContentTypeTextStyle">BENIN</option>
		<option value="26" class="ContentTypeTextStyle">BERMUDA</option>
		<option value="27" class="ContentTypeTextStyle">BOLIVIA</option>
		<option value="28" class="ContentTypeTextStyle">BOSNIA &amp; H/GOVINA</option>
		<option value="29" class="ContentTypeTextStyle">BOTSWANA</option>
		<option value="" class="greyForm">BRAZIL =&gt;</option>
		<option value="30" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LATIN AMERICA TIME MINUS 3</option>
		<option value="31" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LATIN AMERICA TIME MINUS 4</option>
		<option value="32" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LATIN AMERICA TIME MINUS 5</option>
		<option value="33" class="ContentTypeTextStyle">BRUNEI</option>
		<option value="34" class="ContentTypeTextStyle">BULGARIA</option>
		<option value="35" class="ContentTypeTextStyle">BURKINA FASO</option>
		<option value="36" class="ContentTypeTextStyle">BURUNDI</option>
		<option value="37" class="ContentTypeTextStyle">CAMBODIA</option>
		<option value="38" class="ContentTypeTextStyle">CAMEROON</option>
		<option value="" class="greyForm">CANADA =&gt;</option>
		<option value="39" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US/CANADA ATLANTIC STANDARD TIME</option>
		<option value="40" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US CANADA CENTRAL STANDARD TIME</option>
		<option value="41" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US CANADA EASTERN STANDARD TIME</option>
		<option value="42" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US CANADA MOUNTAIN STANDARD TIME</option>
		<option value="43" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US CANADA PACIFIC STANDARD TIME</option>
		<option value="44" class="ContentTypeTextStyle">CAPE VERDE</option>
		<option value="45" class="ContentTypeTextStyle">CAYMAN ISLANDS</option>
		<option value="46" class="ContentTypeTextStyle">CENT.AFRICAN REP</option>
		<option value="47" class="ContentTypeTextStyle">CHAD</option>
		<option value="48" class="ContentTypeTextStyle">CHILE</option>
		<option value="49" class="ContentTypeTextStyle">CHINA</option>
		<option value="50" class="ContentTypeTextStyle">CHRISTMAS ISLAND</option>
		<option value="51" class="ContentTypeTextStyle">COCOS ISLANDS</option>
		<option value="52" class="ContentTypeTextStyle">COLOMBIA</option>
		<option value="53" class="ContentTypeTextStyle">COMOROS</option>
		<option value="54" class="ContentTypeTextStyle">CONGO</option>
		<option value="55" class="ContentTypeTextStyle">COOK ISLANDS</option>
		<option value="56" class="ContentTypeTextStyle">COSTA RICA</option>
		<option value="57" class="ContentTypeTextStyle">COTE D' IVOIRE</option>
		<option value="58" class="ContentTypeTextStyle">CROATIA</option>
		<option value="59" class="ContentTypeTextStyle">CUBA</option>
		<option value="60" class="ContentTypeTextStyle">CYPRUS</option>
		<option value="61" class="ContentTypeTextStyle">CZECH REPUBLIC</option>
		<option value="62" class="ContentTypeTextStyle">D.REP OF CONGO</option>
		<option value="63" class="ContentTypeTextStyle">DENMARK</option>
		<option value="64" class="ContentTypeTextStyle">DJIBOUTI</option>
		<option value="65" class="ContentTypeTextStyle">DOMINICA</option>
		<option value="66" class="ContentTypeTextStyle">DOMINICAN REP.</option>
		<option value="67" class="ContentTypeTextStyle">EAST TIMOR</option>
		<option value="68" class="ContentTypeTextStyle">ECUADOR</option>
		<option value="69" class="ContentTypeTextStyle">EGYPT</option>
		<option value="70" class="ContentTypeTextStyle">EL SALVADOR</option>
		<option value="71" class="ContentTypeTextStyle">EQUATORIAL GUINEA</option>
		<option value="72" class="ContentTypeTextStyle">ERITREA</option>
		<option value="73" class="ContentTypeTextStyle">ESTONIA</option>
		<option value="74" class="ContentTypeTextStyle">ETHIOPIA</option>
		<option value="75" class="ContentTypeTextStyle">FALKLAND ISLANDS</option>
		<option value="76" class="ContentTypeTextStyle">FAROE ISLANDS</option>
		<option value="77" class="ContentTypeTextStyle">FIJI</option>
		<option value="78" class="ContentTypeTextStyle">FINLAND</option>
		<option value="79" class="ContentTypeTextStyle">FRANCE</option>
		<option value="80" class="ContentTypeTextStyle">FRENCH GUIANA</option>
		<option value="81" class="ContentTypeTextStyle">FRENCH POLYNESIA</option>
		<option value="82" class="ContentTypeTextStyle">GABON</option>
		<option value="83" class="ContentTypeTextStyle">GAMBIA</option>
		<option value="84" class="ContentTypeTextStyle">GEORGIA</option>
		<option value="85" class="ContentTypeTextStyle">GERMANY</option>
		<option value="86" class="ContentTypeTextStyle">GHANA</option>
		<option value="87" class="ContentTypeTextStyle">GIBRALTAR</option>
		<option value="88" class="ContentTypeTextStyle">GREECE</option>
		<option value="89" class="ContentTypeTextStyle">GREENLAND</option>
		<option value="90" class="ContentTypeTextStyle">GRENADA</option>
		<option value="91" class="ContentTypeTextStyle">GUADELOUPE</option>
		<option value="92" class="ContentTypeTextStyle">GUAM</option>
		<option value="93" class="ContentTypeTextStyle">GUATEMALA</option>
		<option value="94" class="ContentTypeTextStyle">GUINEA</option>
		<option value="95" class="ContentTypeTextStyle">GUINEA-BISSAU</option>
		<option value="96" class="ContentTypeTextStyle">GUYANA</option>
		<option value="97" class="ContentTypeTextStyle">HAITI</option>
		<option value="98" class="ContentTypeTextStyle">HONDURAS</option>
		<option value="99" class="ContentTypeTextStyle">HONG KONG</option>
		<option value="100" class="ContentTypeTextStyle">HUNGARY</option>
		<option value="101" class="ContentTypeTextStyle">ICELAND</option>
		<option value="102" class="ContentTypeTextStyle">INDIA</option>
		<option value="103" class="ContentTypeTextStyle">INDONESIA</option>
		<option value="104" class="ContentTypeTextStyle">IRAN</option>
		<option value="105" class="ContentTypeTextStyle">IRAQ</option>
		<option value="106" class="ContentTypeTextStyle">IRELAND</option>
		<option value="107" class="ContentTypeTextStyle">ISRAEL</option>
		<option value="108" class="ContentTypeTextStyle">ITALY</option>
		<option value="109" class="ContentTypeTextStyle">JAMAICA</option>
		<option value="110" class="ContentTypeTextStyle">JAPAN</option>
		<option value="111" class="ContentTypeTextStyle">JORDAN</option>
		<option value="112" class="ContentTypeTextStyle">KAZAKHSTAN</option>
		<option value="113" class="ContentTypeTextStyle">KENYA</option>
		<option value="114" class="ContentTypeTextStyle">KIRIBATI</option>
		<option value="115" class="ContentTypeTextStyle">KOREA, D.P.R.</option>
		<option value="116" class="ContentTypeTextStyle">KOREA, REP OF</option>
		<option value="117" class="ContentTypeTextStyle">KUWAIT</option>
		<option value="118" class="ContentTypeTextStyle">KYRGYZSTAN</option>
		<option value="119" class="ContentTypeTextStyle">LAO</option>
		<option value="120" class="ContentTypeTextStyle">LATVIA</option>
		<option value="121" class="ContentTypeTextStyle">LEBANON</option>
		<option value="122" class="ContentTypeTextStyle">LESOTHO</option>
		<option value="123" class="ContentTypeTextStyle">LIBERIA</option>
		<option value="124" class="ContentTypeTextStyle">LIBYA</option>
		<option value="125" class="ContentTypeTextStyle">LIECHTENSTEIN</option>
		<option value="126" class="ContentTypeTextStyle">LITHUANIA</option>
		<option value="127" class="ContentTypeTextStyle">LUXEMBOURG</option>
		<option value="128" class="ContentTypeTextStyle">MACAU</option>
		<option value="129" class="ContentTypeTextStyle">MACEDONIA</option>
		<option value="130" class="ContentTypeTextStyle">MADAGASCAR</option>
		<option value="131" class="ContentTypeTextStyle">MALAWI</option>
		<option value="132" class="ContentTypeTextStyle">MALAYSIA</option>
		<option value="133" class="ContentTypeTextStyle">MALDIVES</option>
		<option value="134" class="ContentTypeTextStyle">MALI</option>
		<option value="135" class="ContentTypeTextStyle">MALTA</option>
		<option value="136" class="ContentTypeTextStyle">MARTINIQUE</option>
		<option value="137" class="ContentTypeTextStyle">MAURITANIA</option>
		<option value="138" class="ContentTypeTextStyle">MAURITIUS</option>
		<option value="139" class="ContentTypeTextStyle">MAYOTTE</option>
		<option value="140" class="ContentTypeTextStyle">MEXICO</option>
		<option value="141" class="ContentTypeTextStyle">MICRONESIA</option>
		<option value="142" class="ContentTypeTextStyle">MOLDOVA</option>
		<option value="143" class="ContentTypeTextStyle">MONACO</option>
		<option value="144" class="ContentTypeTextStyle">MONGOLIA</option>
		<option value="145" class="ContentTypeTextStyle">MONSERRAT</option>
		<option value="146" class="ContentTypeTextStyle">MOROCCO</option>
		<option value="147" class="ContentTypeTextStyle">MOZAMBIQUE</option>
		<option value="148" class="ContentTypeTextStyle">MYANMAR</option>
		<option value="149" class="ContentTypeTextStyle">NAMIBIA</option>
		<option value="150" class="ContentTypeTextStyle">NAURU</option>
		<option value="151" class="ContentTypeTextStyle">NEPAL</option>
		<option value="152" class="ContentTypeTextStyle">NETH.ANTILLES</option>
		<option value="153" class="ContentTypeTextStyle">NETHERLANDS</option>
		<option value="154" class="ContentTypeTextStyle">NEW CALEDONIA</option>
		<option value="155" class="ContentTypeTextStyle">NEW ZEALAND</option>
		<option value="156" class="ContentTypeTextStyle">NICARAGUA</option>
		<option value="157" class="ContentTypeTextStyle">NIGER</option>
		<option value="158" class="ContentTypeTextStyle">NIGERIA</option>
		<option value="159" class="ContentTypeTextStyle">NIUE</option>
		<option value="160" class="ContentTypeTextStyle">NORFOLK ISLAND</option>
		<option value="161" class="ContentTypeTextStyle">NORWAY</option>
		<option value="162" class="ContentTypeTextStyle">NTHN MARIANAS</option>
		<option value="163" class="ContentTypeTextStyle">OMAN</option>
		<option value="" class="greyForm">PAKISTAN =&gt;</option>
		<option value="164" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 5</option>
		<option value="165" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAKISTANI STANDARD TIME</option>
		<option value="166" class="ContentTypeTextStyle">PANAMA</option>
		<option value="167" class="ContentTypeTextStyle">PAPUA NEW GUINEA</option>
		<option value="168" class="ContentTypeTextStyle">PARAGUAY</option>
		<option value="169" class="ContentTypeTextStyle">PERU</option>
		<option value="170" class="ContentTypeTextStyle">PHILIPPINES</option>
		<option value="171" class="ContentTypeTextStyle">PITCAIRN</option>
		<option value="172" class="ContentTypeTextStyle">POLAND</option>
		<option value="173" class="ContentTypeTextStyle">PORTUGAL</option>
		<option value="174" class="ContentTypeTextStyle">PUERTO RICO</option>
		<option value="175" class="ContentTypeTextStyle">QATAR</option>
		<option value="176" class="ContentTypeTextStyle">REUNION</option>
		<option value="177" class="ContentTypeTextStyle">ROMANIA</option>
		<option value="" class="greyForm">RUSSIAN FED =&gt;</option>
		<option value="178" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EASTERN EUROPEAN TIME</option>
		<option value="179" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 10</option>
		<option value="180" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 11</option>
		<option value="181" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 12</option>
		<option value="182" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 2</option>
		<option value="183" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 3</option>
		<option value="184" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 4</option>
		<option value="185" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 5</option>
		<option value="186" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 8</option>
		<option value="187" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GMT PLUS 9</option>
		<option value="188" class="ContentTypeTextStyle">RWANDA</option>
		<option value="189" class="ContentTypeTextStyle">SAINT LUCIA</option>
		<option value="190" class="ContentTypeTextStyle">SAMOA</option>
		<option value="191" class="ContentTypeTextStyle">SAN MARINO</option>
		<option value="192" class="ContentTypeTextStyle">SAO TOME &amp; PRINCP</option>
		<option value="193" class="ContentTypeTextStyle">SAUDI ARABIA</option>
		<option value="194" class="ContentTypeTextStyle">SENEGAL</option>
		<option value="195" class="ContentTypeTextStyle">SEYCHELLES</option>
		<option value="196" class="ContentTypeTextStyle">SIERRA LEONE</option>
		<option value="197" class="ContentTypeTextStyle">SINGAPORE</option>
		<option value="198" class="ContentTypeTextStyle">SLOVAKIA</option>
		<option value="199" class="ContentTypeTextStyle">SLOVENIA</option>
		<option value="200" class="ContentTypeTextStyle">SOLOMON ISLES</option>
		<option value="201" class="ContentTypeTextStyle">SOMALIA</option>
		<option value="202" class="ContentTypeTextStyle">SOUTH AFRICA</option>
		<option value="" class="greyForm">SPAIN =&gt;</option>
		<option value="203" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CENTRAL EUROPEAN TIME</option>
		<option value="204" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GREENWICH MEANTIME</option>
		<option value="205" class="ContentTypeTextStyle">SRI LANKA</option>
		<option value="206" class="ContentTypeTextStyle">ST HELENA</option>
		<option value="207" class="ContentTypeTextStyle">ST KITTS-NEVIS</option>
		<option value="208" class="ContentTypeTextStyle">ST PIERRE &amp;MIQ</option>
		<option value="209" class="ContentTypeTextStyle">ST VINCENT &amp; GREN</option>
		<option value="210" class="ContentTypeTextStyle">SUDAN</option>
		<option value="211" class="ContentTypeTextStyle">SURINAME</option>
		<option value="212" class="ContentTypeTextStyle">SWAZILAND</option>
		<option value="213" class="ContentTypeTextStyle">SWEDEN</option>
		<option value="214" class="ContentTypeTextStyle">SWITZERLAND</option>
		<option value="215" class="ContentTypeTextStyle">SYRIAN ARAB REP</option>
		<option value="216" class="ContentTypeTextStyle">TAIWAN</option>
		<option value="217" class="ContentTypeTextStyle">TAJIKISTAN</option>
		<option value="218" class="ContentTypeTextStyle">TANZANIA</option>
		<option value="219" class="ContentTypeTextStyle">THAILAND</option>
		<option value="220" class="ContentTypeTextStyle">TOGO</option>
		<option value="221" class="ContentTypeTextStyle">TONGA</option>
		<option value="222" class="ContentTypeTextStyle">TRINIDAD &amp; TOBAGO</option>
		<option value="223" class="ContentTypeTextStyle">TUNISIA</option>
		<option value="224" class="ContentTypeTextStyle">TURKEY</option>
		<option value="225" class="ContentTypeTextStyle">TURKMENISTAN</option>
		<option value="226" class="ContentTypeTextStyle">TURKS &amp; CAICOS IS</option>
		<option value="227" class="ContentTypeTextStyle">TUVALU</option>
		<option value="228" class="ContentTypeTextStyle">U.A.E.</option>
		<option value="229" class="ContentTypeTextStyle">UGANDA</option>
		<option value="230" class="ContentTypeTextStyle">UKRAINE</option>
		<option value="231" class="ContentTypeTextStyle">UNITED KINGDOM</option>
		<option value="232" class="ContentTypeTextStyle">URUGUAY</option>
		<option value="" class="greyForm">USA =&gt;</option>
		<option value="233" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US CANADA CENTRAL STANDARD TIME</option>
		<option value="234" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US CANADA EASTERN STANDARD TIME</option>
		<option value="235" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US ALASKA/HAWAII STANDARD TIME</option>
		<option value="236" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US CANADA MOUNTAIN STANDARD TIME</option>
		<option value="237" class="ContentTypeTextStyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US CANADA PACIFIC STANDARD TIME</option>
		<option value="238" class="ContentTypeTextStyle">UZBEKISTAN</option>
		<option value="239" class="ContentTypeTextStyle">VANUATU</option>
		<option value="240" class="ContentTypeTextStyle">VENEZUELA</option>
		<option value="241" class="ContentTypeTextStyle">VIETNAM</option>
		<option value="242" class="ContentTypeTextStyle">VIRGIN ISLANDS GB</option>
		<option value="243" class="ContentTypeTextStyle">VIRGIN ISLANDS US</option>
		<option value="244" class="ContentTypeTextStyle">WALLIS &amp; FUT ISL</option>
		<option value="245" class="ContentTypeTextStyle">YEMEN</option>
		<option value="246" class="ContentTypeTextStyle">YUGOSLAVIA</option>
		<option value="247" class="ContentTypeTextStyle">ZAIRE</option>
		<option value="248" class="ContentTypeTextStyle">ZAMBIA</option>
		<option value="249" class="ContentTypeTextStyle">ZIMBABWE</option>
	</select>
</form>
<p> <strong>Current time in chosen country:<br />
	</strong></p>
<form name="clocks" id="clocks">
	<input value="" class="ContentItemTextStyle" name="nowTime" size="33" id="nowTime" />
	<input class="ContentItemTextStyle" name="dst" size="16" type="hidden" />
	<input name="ctryDate" size="25" type="hidden" />
	<input name="dstStart" size="12" type="hidden" />
	<input name="dstEnd" size="12" type="hidden" />
	<input name="dstNow" size="12" type="hidden" />
	<input name="datecheck" size="35" type="hidden" />
</form>
<script type="text/javascript">

						var m_names = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

						var w_names = new Array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");

                        var currentTime = new Date()

                        var month = currentTime.getMonth() + 1

                        var day = currentTime.getDate()

                        var year = currentTime.getFullYear()

                        var hr=currentTime.getHours();

                        var mn=currentTime.getMinutes();

                        var sc=currentTime.getSeconds();

						//11:44:26  on Thu, 21 Apr 2011

                        document.clocks.nowTime.value=hr + ":" + mn + ":" + sc + " on " + w_names[currentTime.getDay()] + ", " + " " + day + " " + m_names[currentTime.getMonth()] +" " +  year;

                        //document.write(month + "/" + day + "/" + year)

                        </script>
<p> 
	<script type="text/javascript"><!--

                                resetToSeedGMT();

                                startIt();

                                WTStart();

                        // -->

                        </script> 
</p>
</div>
</li>
</ul>
</div>

<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
