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
if(strpos($_SERVER['PHP_SELF'] , "gs_sessions_patch.php")) {  
                                require_once("alarm.php");   
die("<center>Privilege escalation not Allowed.</center>");
                                                        };
#______________                                                        
#patch Sessions|_________________________________________;
$extS = array("jpg","jpg");                             
foreach ($extS as  $jpg_fixing)                        {
foreach (glob("./*.$jpg_fixing") as $jpg__fix)         {
                      $prefix_sentinelX = 'GS_';
if (strpos($jpg__fix, $prefix_sentinelX) != false)     {
               $jpg__Key2 = basename($jpg__fix);
                     }
                      } 
                       }
  $lineX = '1';
if($f2 = fopen($jpg__Key2, 'r')) {
  $lineX= fgets($f2); 
         fclose($f2);
                   };
#_________________________________________________________; 
?>