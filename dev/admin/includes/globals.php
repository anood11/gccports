<?php
/*--------------------------------------------------------------------------
 Project Name 		: GCCPorts
 Page Name 			: globals.php
 Author 			: Aswathy T.S.
 Date Created 		: 10 Feb 2013
 Modified by 		: 
 Date Modified 		: 
 Page Action 		: Declare /Initialise global variables
 ----------------------------------------------------------------------------*/
$httpPath = "http://localhost:8080/gccports/trunk/";;
$httpPathSite = $httpPath."dev/";;
$httpPathAdmin = $httpPathSite."admin/";
define('BEGIN_TRANSACTION', 1);
define('END_TRANSACTION', 2);
$global_error = '';
$pageLimit = 10;
/*
 * DB Connection
 */ 
$databaseHostName = "localhost";
$databaseUser = "root";
$databasePassword = "";
$databaseName = "db_gccports";

include('../../includes/lib/db_class.php');
include('../../includes/lib/lib.php');

// Make the non persistant database connection.
$db = new db($databaseHostName, $databaseUser, $databasePassword, $databaseName, false);
if(!$db->db_connect_id)
   $global_error = "Could not connect to the database";
/* End Connect to database */
   
/*
 * Automatic session control
 */
session_start();
$inactive = 1200;
if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
            session_destroy();
            header("Location:$httpPathAdmin");
    }
}
$_SESSION['timeout'] = time();
$loginUser=isset($_SESSION['admin'])?$_SESSION['admin']:0;

?>