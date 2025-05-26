<html>
<head>
  <title>- Login -GS</title>
<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>
</head>
<body>
<center>
<body bgcolor="black">
<body text="white">
<body link="red">
<body vlink="red">
<img src="./imgs/panel_banner.jpg" alt="panel_banner"><br>
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
session_start();
unset($_SESSION["connected"]);

if(isset($_GET['brute_verify'])) {
#______________________________
#brute_force_protection_panel; |
            $set_my_value = 1;
                   if(isset($_COOKIE['brute_force_limiter']))
                                       {
            $set_my_value = $_COOKIE['brute_force_limiter'];
            $set_my_value ++; 
                                };
        #Set_cookie<--
        setcookie('brute_force_limiter', $set_my_value, time()+500);        
        if($set_my_value > 7)          {
$bf_counter = fopen("brute_force.htm", 'a');
              fwrite($bf_counter, "-.\n");
              fclose($bf_counter);
        die("<br><font color=red>bad connection.</font>");  } else {
       echo "<br><font color=lime>sicure connection.<br></font>";
                                };
                                };                 
#  ____________
#__Login system__v1.0
echo '
[password]:<br>
<form action="'.basename($SERVER[PHP_SELF]).'" method="POST" style="text-align: center;">
<input type="password" style="background-color: black;color:#ff0000;" id="login_form" name="password"><br>
<input type="submit" style="background-color: black;color:#ff0000;" value="login" name="login"><br>
</form>';
if(isset($_POST['password'])) {

#Find_md5_Key;
$ext = array("jpg","jpg");
 foreach ($ext as  $jpg_)                      {
foreach (glob("./*.$jpg_") as $jpg__)          {
               $prefix_sentinel = 'GS_';
if (strpos($jpg__, $prefix_sentinel) != false) {
           $jpg__Key = basename($jpg__);
                     }
                      } 
                       }  
#Access Loading..
$admin_pass = $_POST['password'];
#reading_root_pwd_file;
        $line = '1';
if($f = fopen($jpg__Key, 'r')) {
  $line = fgets($f); 
         fclose($f);
}
#access_key_comparison;
if(!empty($admin_pass) and ($admin_pass == "$line")) {
                      print "<font color=lime>Welcome <b>admin</b>!</font>";
                      print "<br><b>Redirecting..</b>";
                                       include_once("gs_sessions_patch.php");
                                                $_SESSION["connected"]="$lineX";
                                         header("Refresh: 2; URL=admin.php");
                                                  exit;
          } else { print_r("<font color=red><i>Wrong password.</i></font><br>");
    header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?brute_verify=;connection");
           }  
            }
?>
<b>______________________________________________________________________________</b><br>
<i>GodSentinel copyright ©</i> by Emiliano Febbi<br>
<a href= "mailto: emilianofebbi.1994@gmail.com">
<i>emilianofebbi.1994@gmail.com</i></a><br>
</center>
</body>
</html>