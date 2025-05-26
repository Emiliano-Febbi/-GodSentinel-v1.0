<?php
/*
______________________________________
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
if (strpos($_SERVER['PHP_SELF'] , "nohackme_filters.php") or strpos($_SERVER['PHP_SELF'] , "nohackme_filters_off.php")) { 
               require_once("alarm.php");
die("<center>Privilege escalation not Allowed.</center>");
                                       }; 
#Check for Generic attacks --> File: nohackme_filters.php             
    $nsnst_const = $_SERVER['QUERY_STRING'];
    if(stristr($nsnst_const , "../../"))         {
                            $type = "LFI (Local File Inclusion)";
                            require_once("alarm.php");
                            die(strip_tags("LFI attempt blocked! '.$nsnst_const.'"));
                                                 } 
    if (stristr($nsnst_const, "http://") or stristr($nsnst_const, "https://")
                                         or
       stristr($nsnst_const, "ftp://")   or
       stristr($nsnst_const, "ftps://")  
    or stristr($nsnst_const, "_SERVER=") or stristr($nsnst_const, "_COOKIE=")
    or stristr($nsnst_const, "cmd=")  and !stristr($nsnst_const, "&cmd")
    or stristr($nsnst_const, "exec")  and !stristr($nsnst_const, "execu")
    or stristr($nsnst_const,"concat") and !stristr($nsnst_const, "../"))  {
                                  $type = "Generic";
                           require_once("alarm.php");
                           die(strip_tags("Hacking attempt blocked! '.$nsnst_const.'"));                                                       
                                                                           }
?>
                                                                          