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
$http_path = "http://localhost:8080/gccports/trunk/";
$http_path_admin = $http_path."admin/";
$http_path_site = $http_path."dev/";
define('BEGIN_TRANSACTION', 1);
define('END_TRANSACTION', 2);
$global_error = '';
$page_limit = 10;
/*
 * DB Connection
 */ 
$database_host_name = "localhost";
$database_user = "root";
$database_password = "";
$database_name = "db_gccports";

include('db_class.php');
include('lib.php');

// Make the non persistant database connection.
$db = new db($database_host_name, $database_user, $database_password, $database_name, false);
if(!$db->db_connect_id)
   $global_error = "Could not connect to the database";
/* End Connect to database */
   
/*
 * Automatic session control
 */
session_start();
/*$inactive = 1200;
if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
            session_destroy();
            header("Location:$http_path_site");
    }
}
$_SESSION['timeout'] = time();*/
?>