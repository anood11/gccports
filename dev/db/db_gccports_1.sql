-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2013 at 07:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gccports`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE IF NOT EXISTS `tblnews` (
  `newsID` int(11) NOT NULL AUTO_INCREMENT,
  `newsHeading` varchar(256) DEFAULT NULL,
  `newsMatter` varchar(8000) DEFAULT NULL,
  `newsDate` date DEFAULT NULL,
  `newsTime` time DEFAULT NULL,
  `newsImage` varchar(128) DEFAULT NULL,
  `newsStatus` int(1) DEFAULT NULL,
  PRIMARY KEY (`newsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`newsID`, `newsHeading`, `newsMatter`, `newsDate`, `newsTime`, `newsImage`, `newsStatus`) VALUES
(1, 'Cargolux pioneers 747-8 services in South America and China', ' Cargolux pioneers 747-8 services in South America and China Cargolux has added four new destinations to its 747-8 freighter network and, in the process, flew the first-ever 747-8 services to Xiamen, China; Latacunga, Ecuador and Aguadilla, Puerto Rico.  The operations were planned well ahead and all concerned parties performed flawlessly in turning around the flight.  Xiamen saw its first 747-8 service on 1 February when the Cargolux aircraft arrived from Beijing. On 3 February, Cargolux performed the inaugural 747-8 service to South America with a flight to Latacunga. Previously, the southernmost destination of any 747-8 operator was Panama City. The return flight also touched down in Aguadilla, Puerto Rico - another first that Cargolux achieved. The approval by local authorities, that cleared Aguadilla airport for 747-8 operations, was the final hurdle that allows Cargolux to operate the 747-8 in South America for the first time. It was achieved with the cooperation of Cargolux, Boeing, the Aguadilla Airport Authority, the Puerto Rico Port Authority and the Federal Aviation Administration. Brazil remains one of the last countries in Cargolux’s network that still has not approved its airports for 747-8 operations, a situation that remains a challenge for the Luxembourg carrier that is still limited to 747-400F services in the region.  70 Cargolux destinations are now cleared for 747-8F operations; Vietnam is expected to approve its airports in the near future. This will enable Cargolux to use its new freighter almost throughout its entire network.  Boeing’s 747-8F is the most advanced freighter aircraft in its class and gives Cargolux an aircraft that sets new benchmarks in economic and environmental performance. The company currently operates six of the new freighters and expects additional deliveries throughout 2013.', '2013-02-19', '23:02:02', '1', 1),
(2, 'The port of Algeciras reaches 4,1 millions of teus during 2012', 'The Port Authority of Algeciras Bay already has the final statistics of freight traffic for the year 2012. As expected, the Container Terminals handled nearly 4.1 million containers measured in standardized units of 20 feet (teus, for its acronym in English), 13% more than in 2011.  These figures that after a year of positive percentages as no surprise. However, they are still important to be a huge growth in absolute terms, with more than 497,369 TEUs in 2011 and more than 1,293,116 in fiscal crisis of 2010. For terminals, port concessionaires APM Terminals and Terminal International Algeciras Total 3,033,000 and 1,022,000 TEUs handled, respectively. The remaining containers were transited the Strait of Gibraltar on the ferries that link the two banks.  In the absence of statistics of other enclaves of the national port system that facilitates periodically the State Ports Agency, is only to compare the figures with previous traffic. Thus, companies operating in the Bay of Algeciras port handled 89 million tonnes, representing an increase of 8% over the previous year.  According to data of the APBA, in absolute values, products that have grown during the year were as coals, steel products, construction materials and food products.  Exercise also record closes with good results in traffic Strait, for growing both the number of passengers traveling passengers between Tarifa and Algeciras and Ceuta, Tangier and Tangier-Med City as passenger cars and trucks. The passenger boarding again approaching the 5 million passengers, with 4.8 million customers (up 7%). The shipment of 1.14 million vehicles sum (an increase of 4%) and trucks carrying goods for the first time exceeded 240,000 units (up 7%), after the passage of more than 16,655 trucks last year.  Liquid bulk added 22.7 million tonnes (down 1%), dry bulk 2 million tons (25%) and general merchandise 58 million tonnes (up 12%).', '2013-02-18', NULL, '1', 1),
(3, 'Cathay Pacific adds fifth daily flight to London Heathrow', 'Cathay Pacific Airways announced a fifth daily return flight between its Hong Kong hub and London Heathrow, scheduled to debut on 27 June 2013. The additional flight further demonstrates Cathay Pacific’s commitment to serve key long-haul markets around the globe with multiple frequencies offering maximum customer choice.  Cathay Pacific Chief Executive John Slosar said: “We are offering our customers the best of all worlds. First, products that are second to none including our new long-haul Business Class, winner of the Skytrax Best Business Class in the world award. Second, people and service that have earned us recognition as a five-star airline. And third, the choice to travel when it is convenient with multiple frequencies throughout the day.”  In addition to the 35 frequencies a week to London the new flight brings, Cathay Pacific offers 25 flights a week to New York City and 17 to Los Angeles. Both routes are planned to gain additional frequencies in 2013. Even in medium-haul markets such as Sydney and Melbourne, Cathay Pacific offers 28 and 21 flights a week, respectively.  Mr. Slosar added: “Whether getting passengers to their destinations on a nonstop flight or connections via our convenient, world renowned hub in Hong Kong, we are working to expand the network in a way that brings additional flight options to our customers. It is just another way we are giving passengers more reasons to choose Cathay Pacific.”  The upcoming fifth London Heathrow frequency will be operated with a Boeing 777-300ER aircraft. Across the five daily flights, the airline will offer a mix of First Class, Business Class, Premium Economy Class and Economy Class seating, each complemented by the airline’s award-winning service.  Premium Economy Class continues to grow in popularity on the London route and the new flight will add approximately 1,000 extra Premium Economy Class seats each way to the market every month.', '2013-02-17', NULL, '1', 1),
(4, 'ZIM and MSC to commence a new joint Med-Europe Service', 'The new joint service offers a wide port coverage, additional direct links between North West Continent and East Med and enhanced schedule reliability  MSC Mediterranean Shipping Company and ZIM Integrated Shipping Services Ltd are pleased to announce that Starting a new and improved Med-Europe service will commence operation on the following rotation:  Felixtowe – Rotterdam – Hamburg – Antwerp – Le Havre – Ashdod – Alexandria – Haifa – Ashdod – Valencia – Felixtowe  The new Service will operate 5X5,500-6000 TEU’s vessel, 2 operated by ZIM and 3 by MSC, with a roundtrip of 35 days, allowing customers an improved port coverage, including major North European ports, with competitive transit times and enhanced schedule reliability.  First westbound sailing: m/v MSC Fiammetta Eta Haifa 15.2', '2013-02-18', NULL, '1', 1),
(5, ' Dubai port sets 100 million box record', '	 Dubai port sets 100 million box record DP World celebrates a marquee milestone in its history when its Dubai ports handled the 100 millionth container to pass through DP World, UAE Region terminals in ten years, an achievement that, Chairman H.E. Sultan Ahmed Bin Sulayem said, was made possible by the high level of support the company has received from Dubai’s leadership, loyal customers, stakeholders and committed employees.  The 100 million TEU record was achieved between January 2003 and January 2013 and covers all container boxes handled in both Mina Rashid and Jebel Ali Port. DP World, UAE Region’s annual container throughput increased more than 150% over the decade, from around five million TEU in 2003 to 13.3 million TEU in 2012.  In all, the two container ports have handled 135 million TEU since the opening of Jebel Ali Port in 1979, around 75% of it since 2003.  In a recognition of the crucial roles they have played in DP World’s success story, members of the DP World Alumni Network were invited as special guests to celebrations at Jebel Ali Port where the Chairman unveiled a container box painted in company colours, in the presence of senior officials, including Vice Chairman H.E. Jamal Majid Bin Thaniah, Group Chief Executive Officer Mohammed Sharaf, and Senior Vice President and Managing Director of DP World, UAE Region Mohammed Al Muallem – all of whom have played pivotal leadership roles in the company’s emergence as the third largest global marine terminal operator.  The expansion work currently underway at Jebel Ali includes adding 1 million TEU in new capacity to Container Terminal 2 (T2) during the first half of this year and the development of a 4 million TEU capacity mega Container Terminal 3 (T3) by 2014. When the expansion work is complete, Jebel Ali Port will be able to handle ten of the next generation 18,000 TEU mega vessels at the same time – the only port in the region able to do so. Dubai’s modern port industry goes back to 1969 when the late Ruler, Sheikh Rashid Bin Saeed Al Maktoum gave instructions for a four-berth deep-water harbour to be constructed close to the mouth of Dubai Creek. By 1978, with a capacity of 1,500,000 TEU, the number of berths at Mina Rashid was increased to 35.  Encouraged by the market’s response, Sheikh Rashid launched an even more ambitious project. When opened in 1979, Jebel Ali Port was ranked the world’s largest man-made harbour.  In May 1991, Dubai Ports Authority (DPA) was established to manage both Mina Rashid and Jebel Ali Port. The merger led to a dramatic increase in throughput, exceeding one million TEU per annum for the first time. DPA and DPI was merged in 2005 to form DP World.In 2007, DP World, UAE Region achieved the throughput of 10,000,000 TEU in a single year. After a few months, container and general cargo operations at Mina Rashid were shifted to Jebel Ali Port, the gateway to a market of more than 2 billion people.  For well over a year now, DP World, UAE Region has been handling volumes of more than 1 million TEU every month. In 2012 DP World, UAE Region handled 13.3 million TEU.', '2013-02-17', NULL, '1', 1),
(6, 'Diana Shipping announces delivery of the newly built kamsarmax dry bulk carrier', 'Diana Shipping Inc. a global shipping company specializing in the ownership and operation of dry bulk vessels, announced that the Company, through a separate wholly-owned subsidiary, took delivery of the m/v “Myrto”, a 82,131 dwt newly built Kamsarmax dry bulk carrier that the Company entered into an agreement to purchase in December 2012. As previously announced, the m/v “Myrto” is time chartered to Cargill International S.A., Geneva, at a gross charter rate of US$9,000 per day, minus a 5% commission paid to third parties, for a period of minimum eighteen (18) months to maximum twenty-four (24) months. The charter is expected to commence later today. This employment is anticipated to generate approximately US$4.86 million of gross revenue for the minimum scheduled period of the charter. Including the newly-delivered m/v “Myrto”, Diana Shipping Inc.’s fleet currently consists of 31 dry bulk carriers (17 Panamax, 1 Kamsarmax, 3 Post-Panamax, 8 Capesize and 2 Newcastlemax), as well as 2 new-building Ice Class Panamax vessels expected to be delivered to the Company during the fourth quarter of 2013. As of today, the combined carrying capacity of the Company’s current fleet, excluding the two vessels not yet delivered, is 3.5 million dwt with a weighted average age of 5.9 years. ', '2013-02-16', NULL, '1', 1),
(7, 'Australian LNG industry faces severe labor crunch', 'Australia"s dire need for workers to staff the numerous LNG processing facilities is set to increase by the thousands in line with 14 new gas trains that are slated to be brought online, according to a report published by Western Australia"s Department of Mines and Petroleum (DMP) last week.  All of the gas trains will have to be brought onstream as scheduled, as the LNG volumes are already fully contracted to Japan, South Korea and China.  Looking beyond 2020, the DMP forecasted that the country"s LNG industry will continue to grow, in sync with Asia"s unrelenting appetite for the clean burning fuel.  In addition to the seven LNG projects that have already reached their final investment decision (FID) stage – Gorgon, Prelude, Wheatstone, Ichthys, Queensland Curtis LNG (QCLNG), Gladstone LNG (GLNG) and Australia Pacific LNG (APLNG) – and are slated to be brought onstream by 2018, there are eight other LNG developments in the planning stage, Australian Workforce and Productivity Agency (AWPA) noted in a report published in October last year.(Source: Rigzone)', '2013-02-15', NULL, '1', 1),
(8, 'Golar LNG Partners completion of acquisition of Golar Maria', 'Golar LNG Partners LP announced, further to its announcement on January 30, 2013, that it has completed its acquisition of interests in the company that owns and operates the LNG Carrier Golar Maria from Golar LNG Limited for a purchase price of $215.0 million.   In connection with this transaction the Partnership will assume $89.5 million of bank debt in respect of the Golar Maria with the balance of the purchase price to be funded using the proceeds of its recent equity offerings, which closed on February 5, 2013.', '2013-02-14', NULL, '1', 1),
(9, 'The tanker Stena Sunrise named in South Korea', '	 The tanker Stena Sunrise named in South Korea The Suezmax tanker Stena Sunrise was named at the Samsung Heavy Industries (SHI) shipyard in Geoje, South Korea. The vessel is the last in a series of seven units and is owned by Stena Bulk. The Stena Sunrise is a third generation, fuel-efficient Suezmax and, like the other tankers in the series, will be employed on the spot market via Stena Sonangol Suezmax Pool. She was delivered on 30 January and will sail with a cargo of gas oil from Asia to Europe. A number of international guests had gathered together with representatives of SHI and the Stena Group at the shipyard in Geoje to attend the naming ceremony. The Stena Sunrise’s godmother was Inge Widjaja, married to Franky O Widjaja, owner of Indonesian Golden Agri (GAR).  The Stena Sunrise is the last vessel in a series built at SHI and ordered at the beginning of 2010. “The seven sisters”, each representing an investment of just under SEK 500 million, were projected by Stena Bulk. The seven sister ships, all of which have now been delivered, are the Stena Superior (owned by Stena Bulk), theStena Suède (Stena Bulk), theMontesperanza (Spanish Ibaizabal Tankers), the MonteStena (Ibaizabal Tankers), the Stena Supreme (Concordia Maritime), the AST Sunshine (joint venture between Japanese Asahi Tankers and Stena Bulk) and the Stena Sunrise(Stena Bulk).  Together with SHI, Stena Teknik has been responsible for the development of the new ship model, where the focus has been on energy efficiency. The vessel’s technical equipment and design mean that fuel consumption can be reduced by up to 10-15 percent compared with standard tonnage. As a result, fuel consumption can be reduced by 4-6 thousand litres per day thus saving USD 3-4,000/day.  “Like Stena Teknik, we are very satisfied with the collaboration with the Samsung shipyard, which has characterised both the development and production of this tanker series. Besides the generally good quality delivered by the shipyard, we have together achieved our fuel efficiency target, which was the single most important objective”, says Erik Hånell, President and CEO of Stena Bulk, in a comment.  The Stena Sonangol Suezmax Pool is controlled by Stena Bulk and the Angolan state-owned oil company Sonangol. The pool currently consists of around thirty fuel-efficient Suezmax tankers and the average age of the fleet is about three years. Stena Bulk’s offices in Houston, Gothenburg, Rio de Janeiro and Singapore are responsible for the operation and chartering of the vessels in the pool.', '2013-02-13', NULL, '1', 1),
(10, 'Finnair Cargo to expand in Asia', 'With the summer opening of Finnair"s new routes to Hanoi, Vietnam and Xi"an in Northwestern China, Finnair Cargo"s Asian network will cover already 14 Asian destinations. Summer also brings added frequencies to existing destinations, e.g. Tokyo Narita. Freighter services to Mumbai, India will also be reinforced with a second weekly rotation to Mumbai.  "Finnair strategy is to double its Asian turnover by 2020, and the new Summer 2013 Asian network offers a wide variety of alternatives and unique destinations, including Chongqing, Xi"an and Hanoi. With new freighter connections from Brussels via Helsinki we will offer excellent cargo service between Europe and Asia", states Mr Juha Järvinen, Managing Director of Finnair Cargo.  The aim of these new services is to support our customers" air cargo needs to/from Southeast Asia.', '2013-02-13', NULL, '1', 1),
(11, 'ITG wins Quality Award from Lufthansa Cargo', 'The ITG logistics services provider has landed by a large margin the Quality Award from Lufthansa Cargo. The Munich-based company achieved the highest booking quality and lowest no-show rate of all the forwarders participating in the competition. Lufthansa Cargo Vice President Area Management Germany J. Florian Pfaff presented the award at the cargo carrier''s annual conference for the Association of German Fowarders and Logistics Operators (DSLV).  ITG branch managers in Frankfurt and Munich, Luigi Petrelli und Ralph Biller, accepted the award at the presentation. “The Quality Award is a mark of distinction for all the staff of ITG,“ emphasised Ralph Biller. “Together with our partners, we are committed to delivering the highest quality, daily. This accolade shows that we are on the right track.” Luigi Petrelli added: “It will spur us to continue working hard in this direction and firmly pursuing our objectives."  The quality initiative of Lufthansa Cargo is ostensibly bearing fruit. The quality level of the front runners in the competition and the general level was unprecedently high in 2012. "Peak quality is only possible in the interaction between forwarder, shipper and airline,“ observed J. Florian Pfaff. “Quality throughout the logistics chain profits from that,“ he emphasised.  Lufthansa Cargo conferred the Quality Award for the third time in the German market. Performance is judged on the basis of diverse quality parameters, such as compliance to delivery specifications and punctual delivery.  Runner-up to ITG was Quick Cargo Service (QCS), followed by the logistics services provider Steck. Among the forwarders with “more than 10,.000 AWBs“ Streck took the honours, followed by Geis/SDV and Dachser.  At the meeting, J. Florian Pfaff announced that Lufthansa Cargo is conferring a further award this year alongside its quality prize: The winner will come from among Lufthansa Cargo’s 40 biggest customers in the German market. The aim of the new award is to encourage greater utilization of digital processes in transactions between forwarders and the airline. Among the criteria for the 2 award is a company’s electronic bookings rate as a percentage of the total and its use of eFreight.', '2013-02-20', NULL, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(64) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` text,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userId`, `userName`, `password`, `email`) VALUES
(1, 'admin', 'N7lZie7bQiNuEc+esxlHylGh/Y8yb5Vcf77pziJGAMQ=', 'admin@gccports.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;