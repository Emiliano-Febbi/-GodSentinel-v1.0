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
if(strpos($_SERVER['PHP_SELF'] , "sqli_filters_get.php") or strpos($_SERVER['PHP_SELF'] , "sqli_filters_get_off.php")) { 
               require_once("alarm.php");
die("<center>Privilege escalation not Allowed.</center>");
                                       }; 
#Check for SQL injection attacks --> File: sqli_filters_get.php                                                                      
   #on $_GET
    foreach($_GET as $sec_key2 => $secvalue2) {
    if((preg_match("#\w?\s?union\s\w*?\s?(select|all|distinct|insert|update|drop|delete)#is", $secvalue2))  or
      (preg_replace("#\w?\s?union\s\w*?\s?(select|all|distinct|insert|update|drop|delete)#is", $secvalue2)) or
      (preg_match("#\w?\s?union\s\w*?\s?(select|from|where|having|order by|group by)#is",      $secvalue2))) {
	                         $type = "SQL injection";
                           require_once("alarm.php");
      die(strip_tags("SQL injection attempt blocked! '.$secvalue2.'"));
	  }
       }
?>