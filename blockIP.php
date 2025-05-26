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
 if(strpos($_SERVER['PHP_SELF'] , "blockIP.php"))            {     
 die("<center><body bgcolor=black><img src=logo_sentinel.png alt=logo>
      <br><font color=white><b>GodSentinel Say:</b>
      <br>Privilege escalation not Allowed.</font></center>");
                                                            };
#File: blockIP.php
#_________________________
/*Ban system v1.0        */
#Blocking Aggressor Block
          $blocked_user = $_SERVER['REMOTE_ADDR'];
#Set ban User                                               
   $write_BAN = fopen("address_blocked.php", 'a');
       fwrite($write_BAN, "$blocked_user\n");
                               fclose($write_BAN);
$IP_Adrress_banneds = file_get_contents("address_blocked.php");
if(preg_match("/$blocked_user/", $IP_Adrress_banneds))   {
                   die("<br>You've been banned!");
                                                };

                                                 
?>