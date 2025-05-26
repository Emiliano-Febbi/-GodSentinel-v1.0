<html>
<head>
  <title>[~]ALARM[~]</title>
<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>
</head>
<body>
<body bgcolor="black">
<body text="white">
<body link="red">
<body vlink="red">
<div style="width:100%;max-width:300px;border-radius:10px;border:1px red solid;overflow:hidden; float: right; text-align: right;">
<div style="background-color:#000000;padding:5px">
<i>GodSentinel copyright ©</i> by Emiliano Febbi<br>
<a href= "mailto: emilianofebbi.1994@gmail.com"><i>emilianofebbi.1994@gmail.com</i></a><br>
</div>
</div><br><br><br>
<center>
<br><img src="logo_sentinel.png" alt="logo">
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
 #________________________
#/* User controlling     */
  $your_IP = $_SERVER['REMOTE_ADDR'];
$Verify_IP = file_get_contents("address_blocked.php");
if(preg_match("/$your_IP/", $Verify_IP))            {
                  die("<br>You've been banned!");
                                               };
#_________________________
/*Information acquisition*/
$TimeSet = date("F j, Y, g:i a", time()); 
$hostname =     $_SERVER['SERVER_NAME'];
$alarmIP =      $_SERVER['REMOTE_ADDR'];
$Filename_int = $_SERVER['SCRIPT_NAME'];
$realtime_QS =  $_SERVER['QUERY_STRING'];
$user_agent =   $_SERVER['HTTP_USER_AGENT'];
$FULL_PATH = "$hostname$Filename_int?$realtime_QS";
#not Click Me
if (empty($realtime_QS)) {
                   print_r("<br><b>GodSentinel Say:</b> Not Click Me.");
                   require_once("blockIP.php");
                                         } else {
#Alert
echo "<h2><i><font color='red'>ALERT Message:</font></i></h2><br>";
print "An illegal operation has been detected on the website. ($hostname)<br>";
                     print "<font color='red'>[Type Attack]:</font> $type<br>";
print_r (strip_tags("Incriminating Query: $realtime_QS"));
print "<br>Your IP address <font color='red'>($alarmIP)</font> has been saved!<br>After this operation you are at risk and could be banned.<br>";
echo "<b>If you think this is a error, please contact the site admin.</b><br>";
print "................................................................................................................";
print "................................................................................................................";
print "................................................................................................................";
echo "<h2><i><font color='red'>Extrapolated information:</font></i></h2><br>";
echo "<font color='red'>[FULL PATH]:</font><br>";
print_r(strip_tags("$FULL_PATH"));
echo "<br><br><font color='red'>[USER AGENT]:</font><br>";
print_r(strip_tags("$user_agent"));
print "<br><br><font color='red'>File interessed:</font> $Filename_int<br><br><font color='red'>[Cookie Session]:</font><br><br>";

#Getting/printing COOKIE_
foreach ($_COOKIE as $keyC=>$val_cookie)
  {
    echo htmlentities(trim("$keyC.' is '.$val_cookie.'<br>\n"));
  }
    echo "<br><font color='red'>Message:</font><br><center>";
#Message from CORE of GodSentinel

#_________________________Designed to make a difference
/* Logs system v1.0      */
   $GUI_int = "<font color=red>$TimeSet</font>
               <br><div style='border: 3px white; border-style: double; width: 500px; height: 200px;'>";
   $filename_logs = 'gsentinel_logs.php';
$write_into = fopen($filename_logs, 'a');
fwrite($write_into, "<? <br>\n $GUI_int [Type Attack]: '.$type.' <br>\n [IP Found]: '.$alarmIP.'<br>\n [USER AGENT]: $user_agent <br>\n [FULL PATH]: $FULL_PATH <br>\n File interessed --> $Filename_int <br>\n [Cookie]: $val_cookie <br></div> \n<br>\n");
                     fclose($write_into);
                                       };
?>
</body>
</center>
</html>
