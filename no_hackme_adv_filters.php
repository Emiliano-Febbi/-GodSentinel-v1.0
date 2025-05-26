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
if(strpos($_SERVER['PHP_SELF'] , "no_hackme_adv_filters.php") or strpos($_SERVER['PHP_SELF'] , "no_hackme_adv_filters_off.php")) { 
               require_once("alarm.php");
die("<center>Privilege escalation not Allowed.</center>");
                                       }; 
#Check for UNION attack --> File: no_hackme_adv_filters.php
$nsnst_const = $_SERVER['QUERY_STRING'];
  if (stristr($nsnst_const,'+union+') or
  stristr($nsnst_const,'%20union%20') or
  stristr($nsnst_const,'*/union/*')   or
  stristr($nsnst_const,' union ')     or
  stristr($nsnst_const,'+union+')     or
  stristr($nsnst_const,'INFORMATION_SCHEMA.') or
  stristr($nsnst_const,'*/union/*')) {
                $type = "SQL injection (WAF Bypass)";
                           require_once("alarm.php");
  die(strip_tags("SQL injection attempt blocked! '.$nsnst_const.'"));
  }
   

#Check for CLIKE attack --> File: no_hackme_adv_filters.php
  if (stristr($nsnst_const,'/*') or 
      stristr($nsnst_const,'*/')) {
                              $type = "CLIKE attack";
                           require_once("alarm.php");
      die(strip_tags("CLIKE attack attempt blocked! '.$nsnst_const.'"));
      } 
  ?>