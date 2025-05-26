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
if(strpos($_SERVER['PHP_SELF'] , "xss_filters_post.php") or strpos($_SERVER['PHP_SELF'] , "xss_filters_post_off.php")) { 
               require_once("alarm.php");  
die("<center>Privilege escalation not Allowed.</center>");
                                       }; 
#Check for XSS attacks --> File: xss_filters_post.php                                                                      
   #on $_POST
               $_POST = array_map(function ($myfilter) {
    return htmlspecialchars(addslashes(trim($myfilter)));
                                              }, $_POST);
?>