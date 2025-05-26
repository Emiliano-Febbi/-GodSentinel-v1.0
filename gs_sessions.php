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
if(strpos($_SERVER['PHP_SELF'] , "gs_sessions.php")) { 
               require_once("alarm.php");
die("<center>Privilege escalation not Allowed.</center>");
     }
#Sessions_admin_panel
    include_once("gs_sessions_patch.php");
    session_start();
    if(trim($_SESSION["connected"])!="$lineX")
    {
    header("location: login_s.php");
                               exit;
    }
?>