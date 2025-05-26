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
error_reporting(0);
# ___________________
#/* User controlling */
   $your_IP = $_SERVER['REMOTE_ADDR'];
   $Verify_IP = file_get_contents("address_blocked.php");
if(preg_match("/$your_IP/", $Verify_IP))                    {
 die("<center><body bgcolor=black><img src=logo_sentinel.png alt=logo>
      <br><font color=white><b>GodSentinel Say:</b>
      <br>You've been banned!</font></center>");
                     };
//plugin grafts;                     
################                     
#Crawler_Killer#.....
include_once("crawler_killer.php");
#Crawler_Killer#
################.....

#############
#NoXploiter;#.....
include_once("NoXploiter.php");
#NoXploiter;#.....
#############

#Security..
if(strpos($_SERVER['PHP_SELF'] , "godsentinel.php"))        {     
 die("<center><body bgcolor=black><img src=logo_sentinel.png alt=logo>
      <br><font color=white>
      Privilege escalation not Allowed.</font></center>");
                     };
# _______________________
/* Including All Modules */
include_once("xss_filters_post.php");
include_once("sqli_filters_post.php");
include_once("xss_filters_get.php");
include_once("sqli_filters_get.php");
include_once("nohackme_filters.php");
include_once("no_hackme_adv_filters.php");
include_once("table_filters.php");
?>