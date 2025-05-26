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
if(strpos($_SERVER['PHP_SELF'] , "xss_filters_get.php") or strpos($_SERVER['PHP_SELF'] , "xss_filters_get_off.php")) { 
               require_once("alarm.php");
die("<center>Privilege escalation not Allowed.</center>");
                                       }; 
 #Check for XSS attacks --> File: xss_filters_get.php                                                                      
   #on $_GET
   foreach($_GET as $sec_key => $secvalue) {
     if ((preg_match('/</', $secvalue))       or
        (preg_match("/<object>/", $secvalue)) or
        (preg_match("/<iframe>/", $secvalue)) or
        (preg_match("/<applet>/", $secvalue)) or
        (preg_match("/<meta>/", $secvalue))   or
        (preg_match("/<style>/", $secvalue))  or
        (preg_match("/<form>/", $secvalue))   or
        (preg_match("/<img>/", $secvalue))    or
        (preg_match("/script/", $secvalue))   or
        (preg_match("/<body>/", $secvalue))   or
        (preg_replace("/<(?:\"[^\"]*\"['\"]*|'[^']*'['\"]*|[^'\">])+>/", $secvalue))   or
        (preg_match("/<(?:\"[^\"]*\"['\"]*|'[^']*'['\"]*|[^'\">])+>/", $secvalue))) {
                $type = "XSS (Cross Site Scripting)";
                           require_once("alarm.php");
        die(strip_tags("XSS attempt blocked! '.$secvalue.'"));
        }        
         }
?>