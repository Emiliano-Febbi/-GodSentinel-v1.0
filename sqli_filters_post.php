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
if(strpos($_SERVER['PHP_SELF'] , "sqli_filters_post.php") or strpos($_SERVER['PHP_SELF'] , "sqli_filters_post_off.php")) {  
               require_once("alarm.php");   
die("<center>Privilege escalation not Allowed.</center>");
                                       };
#Check for SQL injection attacks --> File: sqli_filters_post.php                                                                      
   #on $_POST
   foreach($_POST as $sec_key3 => $secvalue3) {
    if (stristr($secvalue3, "+AND+") or
        stristr($secvalue3, "+AND+") or
        stristr($secvalue3, "+or+")  or
        stristr($secvalue3, "+or"))
                                              {                              
                             $type = "SQL injection";
                                     print "$header"; 
     header('Location: alarm.php?message=SQL+injection+$_POST+detected!');
     die(strip_tags("SQL injection attempt blocked! '.$secvalue3.' </center></body></html>"));
     } 
      }
?>