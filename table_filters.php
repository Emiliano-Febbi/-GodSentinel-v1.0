<?php
/*
_____________________________________
| Name Software: GodSentinel         |
| Version: 1.0                       |
| Type Software: Flat                |
| PHP compatible Version: 7.3 tested |
| Site: nullsite.altervista.org      |
| Author: Emiliano Febbi             |
|____________________________________|
emilianofebbi.1994 -at- gmail -dot- com

*/
#Security..
if(strpos($_SERVER['PHP_SELF'] , "table_filters.php") or strpos($_SERVER['PHP_SELF'] , "table_filters_off.php")) { 
                       require_once("alarm.php");
die("<center>Privilege escalation not Allowed.</center>");
                                       }; 

#Check for users_table attack --> File: table_filters.php
#__________________
/* Protected Table */
$table_protected = file_get_contents("table_protected.jpg");
if(stristr($nsnst_const , "$table_protected"))         {
                        $type = "SQL injection";
                      require_once("alarm.php");
die(strip_tags("SQL injection attempt blocked! '.$nsnst_const.'"));
   }
?>