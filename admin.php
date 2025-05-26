<? include_once("gs_sessions.php"); ?>
<html>
<head>
  <title>- Admin -GS</title>
<style>
a {text-decoration: none;} 
</style>
</head>
<body>
<body bgcolor="black">
<body text="white">
<body link="red">
<body vlink="red">
<center>
<img src="./imgs/panel_banner.jpg" alt="panel_banner"><br>
<div style='float: center; text-align: center; padding-right:120px'>

      <a href="admin.php" title="home">
<img alt="home" src="./imgs/home.png"/>
      </a>
      <a href="admin.php?logs_editor=run;" title="gs_logs">
<img alt="home" src="./imgs/logs_x.gif"/>
      </a>
      <a href="admin.php?ban_system=run;" title="gs_blacklist">
<img alt="home" src="./imgs/delete.png"/>
      </a>
      <a href="admin.php?table_protection=run;" title="table_protection">
<img alt="home" src="./imgs/table_x.png"/>
      </a>                                             
</div>
<div style="padding-left: 508px;"><? echo "<a href='?ck_reset=reset_ck_logs;'>::<i>[reset]</i>::</a><br>"; if (false!==file("ck_logs.php")) print_r("<font color=lime><b>available</b></font>");  else print_r("<font color=red><b>unavailable</b></font>"); ?>
<br><font color=red><b><small><i>[CrawlerKiller Logs]:</i></small></b></font></div>
<div style="width:622px; height:900px; border:1px solid white;">
<div style="width:120px; height:900px; border:1px solid white; float: right; text-align: right;">
                         <?
             #crawler_killer block dedicate;
                       #|Logs|
                       $crawler_killer_logs = file("ck_logs.php");
for ($i = max(0, count($crawler_killer_logs)-50);
$i < count($crawler_killer_logs); $i++) { 
    $kck = $crawler_killer_logs[$i]; 
print_r(nl2br("<center><font color=lime>$kck</font></center>"));
                                                              };
                   #Reset_ck_logs;                                                              
       if(!empty($_GET['ck_reset']))    { unlink("ck_logs.php"); 
header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?return;");
                                                         };
                   #Reset_bf_logs;
       if(!empty($_GET['reset_count'])) { unlink("brute_force.htm"); 
header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?return_pg=index;");
                                                         };
                         ?></div>                 
<a href='logout_s.php'>::<i>[Logout]</i>::</a><br><br>
     __________
<h2>|<i>Settings:</i> |</h2>
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
#___________
# Settings; 
    #Filter1__________________________________________________________________________________;
    if(isset($_GET['de_adv'])) { rename("no_hackme_adv_filters.php", "no_hackme_adv_filters_off.php"); };
    if(isset($_GET['ac_adv'])) { rename("no_hackme_adv_filters_off.php", "no_hackme_adv_filters.php"); };
     print "(<b>filter for:</b> <font color=red><i>SQLi WAF based, CLIKE attack</font></i>)<br>";
    if (file_exists("no_hackme_adv_filters.php")) { 
echo "<b><i>[Advanced Anti-Hacking Filter]:</i></b><img src='./imgs/green_dot.gif' alt='green_dot'><br><a href='admin.php?de_adv=off;'>
      <button style='background-color: black;color:#ff0000;'>deactivate Filter</button></a><br><br>"; 
                                           } else { 
echo "<b><i>[Advanced Anti-Hacking Filter]:</i></b><img src='./imgs/red_dot.gif' alt='red_dot'><br><a href='admin.php?ac_adv=on;'>
      <button style='background-color: black;color:#ff0000;'>activate Filter</button></a><br><br>"; };
    #Filter2___________________________________________________________________________________;
    if(isset($_GET['de_hck']))  { rename("nohackme_filters.php", "nohackme_filters_off.php"); };
    if(isset($_GET['ac_hack'])) { rename("nohackme_filters_off.php", "nohackme_filters.php"); };
    print "(<b>filter for:</b> <font color=red><i>Remote File inclusion, Local File includsion, Generic attacks</font></i>)<br>";
    if (file_exists("nohackme_filters.php"))      { 
echo "<b><i>[Anti-Hacking Filter]:</i></b><img src='./imgs/green_dot.gif' alt='green_dot'><br><a href='admin.php?de_hck=off;'>
      <button style='background-color: black;color:#ff0000;'>deactivate Filter</button></a><br><br>"; 
                                           } else { 
echo "<b><i>[Anti-Hacking Filter]:</i></b><img src='./imgs/red_dot.gif' alt='red_dot'><br><a href='admin.php?ac_hack=on;'>
      <button style='background-color: black;color:#ff0000;'>activate Filter</button></a><br><br>";};
    #Filter3___________________________________________________________________________________;
     if(isset($_GET['de_sqli'])) { rename("sqli_filters_get.php", "sqli_filters_get_off.php");  };
     if(isset($_GET['ac_sqli'])) { rename("sqli_filters_get_off.php", "sqli_filters_get.php");  };
print "(<b>filter for:</b> <font color=red><i>SQL injection on _GET requests</font></i>)<br>";
     if (file_exists("sqli_filters_get.php"))     { 
echo "<b><i>[SQL injection Filter1]:</i></b><img src='./imgs/green_dot.gif' alt='green_dot'><br><a href='admin.php?de_sqli=off;'>
      <button style='background-color: black;color:#ff0000;'>deactivate Filter</button></a><br><br>"; 
                                           } else { 
echo "<b><i>[SQL injection Filter1]:</i></b><img src='./imgs/red_dot.gif' alt='red_dot'><br><a href='admin.php?ac_sqli=on;'>
      <button style='background-color: black;color:#ff0000;'>activate Filter</button></a><br><br>";};
    #Filter4___________________________________________________________________________________;
     if(isset($_GET['de_sqlip'])) { rename("sqli_filters_post.php", "sqli_filters_post_off.php");  };
     if(isset($_GET['ac_sqlip'])) { rename("sqli_filters_post_off.php", "sqli_filters_post.php");  };
  print "(<b>filter for:</b> <font color=red><i>SQL injection on _POST requests</font></i>)<br>";
     if (file_exists("sqli_filters_post.php"))    { 
echo "<b><i>[SQL injection Filter2]:</i></b><img src='./imgs/green_dot.gif' alt='green_dot'><br><a href='admin.php?de_sqlip=off;'>
      <button style='background-color: black;color:#ff0000;'>deactivate Filter</button></a><br><br>"; 
                                           } else { 
echo "<b><i>[SQL injection Filter2]:</i></b><img src='./imgs/red_dot.gif' alt='red_dot'><br><a href='admin.php?ac_sqlip=on;'>
      <button style='background-color: black;color:#ff0000;'>activate Filter</button></a><br><br>";};
      #Filter5___________________________________________________________________________________;
     if(isset($_GET['de_xss'])) {  rename("xss_filters_get.php", "xss_filters_get_off.php");  };
     if(isset($_GET['ac_xss'])) {  rename("xss_filters_get_off.php", "xss_filters_get.php");  };
  print "(<b>filter for:</b> <font color=red><i>XSS on _GET requests</font></i>)<br>";
     if (file_exists("xss_filters_get.php"))      { 
echo "<b><i>[XSS Filter1]:</i></b><img src='./imgs/green_dot.gif' alt='green_dot'><br><a href='admin.php?de_xss=off;'>
      <button style='background-color: black;color:#ff0000;'>deactivate Filter</button></a><br><br>"; 
                                           } else { 
echo "<b><i>[XSS Filter1]:</i></b><img src='./imgs/red_dot.gif' alt='red_dot'><br><a href='admin.php?ac_xss=on;'>
      <button style='background-color: black;color:#ff0000;'>activate Filter</button></a><br><br>";};
     #Filter6___________________________________________________________________________________;
     if(isset($_GET['de_xssp'])) { rename("xss_filters_post.php", "xss_filters_post_off.php");  };
     if(isset($_GET['ac_xssp'])) { rename("xss_filters_post_off.php", "xss_filters_post.php");  };
  print "(<b>filter for:</b> <font color=red><i>XSS on _POST requests</font></i>) --> not recommended for CMS.<br>";
     if (file_exists("xss_filters_post.php"))     { 
echo "<b><i>[XSS Filter2]:</i></b><img src='./imgs/green_dot.gif' alt='green_dot'><br><a href='admin.php?de_xssp=off;'>
      <button style='background-color: black;color:#ff0000;'>deactivate Filter</button></a><br><br>"; 
                                           } else { 
echo "<b><i>[XSS Filter2]:</i></b><img src='./imgs/red_dot.gif' alt='red_dot'><br><a href='admin.php?ac_xssp=on;'>
      <button style='background-color: black;color:#ff0000;'>activate Filter</button></a><br><br>";};
     #Filter7___________________________________________________________________________________;
     if(isset($_GET['de_tablep'])) { rename("table_filters.php", "table_filters_off.php");  };
     if(isset($_GET['ac_tablep'])) { rename("table_filters_off.php", "table_filters.php");  };
    print "(<b>filter for:</b> <font color=red><i>users Table Protection</font></i>)<br>";
     if (file_exists("table_filters.php"))        { 
echo "<b><i>[table_protection]:</i></b><img src='./imgs/green_dot.gif' alt='green_dot'><br><a href='admin.php?de_tablep=off;'>
      <button style='background-color: black;color:#ff0000;'>deactivate Filter</button></a><br><br>"; 
                                           } else { 
echo "<b><i>[table_protection]:</i></b><img src='./imgs/red_dot.gif' alt='red_dot'><br><a href='admin.php?ac_tablep=on;'>
      <button style='background-color: black;color:#ff0000;'>activate Filter</button></a><br><br>";};
#End Filters management;
#___________________
#New password Block;
$gs_Xy = gzinflate(base64_decode('s8nMKygtUchLzE21VUouLkqLT8vMKUktUlIoqSwACpWkVpQoKRSXVOYAOSmZxQU5iZVWefl5qdZKCvp2AA=='));
        echo '__________ ';
echo'<h2>|<i>New admin Key:</i> |</h2>';
  echo 'enter new password:
<form action="'.basename($SERVER[PHP_SELF]).'" method="POST" style="text-align: center;">
<input type="text" style="background-color: black;color:#ff0000;" id="newpwd" name="newpwd"><br>
enter old password:<br>
<input type="text" style="background-color: black;color:#ff0000;" id="pwd_ver" name="pwd_ver"><br>
                                                                                  '.$gs_Xy.'<br>
<input type="submit" style="background-color: black;color:#ff0000;" value="change" name="change"><br>
</form>';
#______________________
#change password admin;|
#Registration new Key; |

if(isset($_POST['newpwd']) and isset($_POST['pwd_ver']) and empty($_POST['csrf_filter'])) {
#__________________
#Find old password;
     $extS2 = array("jpg","jpg");                             
foreach ($extS2 as  $jpg_newpwd)                          {
foreach (glob("./*.$jpg_newpwd") as $jpg_newpwd2)         {
      $prefix_sentinelX2 = 'GS_';
if(strpos($jpg_newpwd2, $prefix_sentinelX2) != false)     {
             $found_old_pass = basename($jpg_newpwd2);
                               }
                               }
                               };
#________________
#patch for CSRF; |                              
$No_CSRF = file_get_contents("$found_old_pass");   
if(!empty($_POST['pwd_ver'] == $No_CSRF)) {

#____________________
#Delete old password;
unlink("$found_old_pass");

#____________________
#writing new password;
   $newpwd = $_POST['newpwd'];
$new_pwd_hashed = md5(newpwd);
$createX2 = fopen("GS_$new_pwd_hashed.jpg", 'a');
fwrite($createX2, $newpwd);
         fclose($createX2);                                          
 print_r("<b>new password changed:</b> <font color=red>$newpwd</font><br>");
} elseif(!empty($_POST['pwd_ver'] !== $No_CSRF)) { print_r("<font color=red><i>Wrong password.</i></font>"); };
                         };
     print_r("</div><br>"); 
#____________________
#errors_console v1.0;|
print "<font color=red>[errors_console]</font>";
print "<font color=red><div style='width:622px; height:150px; text-align: left; border:1px solid red;'>";
if(!file_exists(".htaccess"));   {  print "#error1_ .htaccess File not found. !!!compromised security!!!<br>";                 };
if(file_exists("install.php"));  {  print "#error2_ install.php active! You have to remove it.<br>";                           };
if(file_exists("htaccess.txt")); {  print "#error3_ File .htaccess it has the wrong format (.txt) you need to rename it.<br>"; };
#__________________________________________
#brute forcing tentatives on admin panel;
#Reset_bf_logs;                                                              
if(file_exists("brute_force.htm")); {
$brute_logs = file_get_contents('brute_force.htm');
        $total_attacks = explode('.', $brute_logs);
print_r("<b>Brute Forcing attacks on panel registered =></b>");
                                echo count($total_attacks) - 1;
print_r(" <a href='admin.php?reset_count=;done'>
          <button style='background-color: black;color:#ff0000;'>Reset count</button></a>");
                                                                                          };
#________________________
#server security check;
 $check_sec = '../../../../../../../../../../../../etc/passwd';
$check_sec2 = '../../../../../../../../../../../../etc/shadow';
if (file_exists($check_sec) or file_exists($check_sec2)) 
                  {
 $filen_grab = basename($check_sec);
$filen_grab2 = basename($check_sec2);
echo "<br>#error4_The file $filen_grab / $filen_grab2 is readable server is not secure.";
           } else { 
echo "<br><i>Message:</i><font color=lime>server is secure.</font>";                   };
                                      echo "</div></font><br>"; 
 
#end_erros_console;|
#__________________ 
 
//plugins_settings
      echo '<div style="width:622px; height:250px; border:1px solid white;">';
      echo '__________ ';
echo'<h2>|<i>PLUGINS;</i> |</h2>';
#############
#NoXploiter;#
if(file_exists("NoX_plug.txt"))        {
echo "[<b>NoXploiter</b> <font color=lime>beta</font>] - <font color=red><i>PLUGIN AVAILABLE</i> -</font> 
       <a href='admin.php?NoXploiter_on=;run'>
       <button style='background-color: black;color:#ff0000;'>activate</button></a><br><br>";
                                } else { 
echo "[<b>NoXploiter</b> <font color=lime>beta</font>] - <font color=lime><i>PLUGIN ACTIVATED</i> -
      <a href='admin.php?NoXploiter_off=;run'>                                                       
      <button style='background-color: black;color:#ff0000;'>deactivate</button></a></font><br><br><br>";                                       };
if(isset($_GET['NoXploiter_on']))  {  rename("NoX_plug.txt", "NoXploiter.php"); header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?returnNoX;");  };
if(isset($_GET['NoXploiter_off'])) {  rename("NoXploiter.php", "NoX_plug.txt"); header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?returnNoX2;"); };
#NoXploiter;#
#############

########################
#crawler_killer_plugin;#
if(file_exists("ck_plug.txt"))          {
echo "[<b>CrawlerKiller</b> <font color=lime>beta</font>] - <font color=red><i>PLUGIN AVAILABLE</i> -</font> 
       <a href='admin.php?crawler_killer_on=;run'>
       <button style='background-color: black;color:#ff0000;'>activate</button></a><br><br>";
                                } else { 
echo "[<b>CrawlerKiller</b> <font color=lime>beta</font>] - <font color=lime><i>PLUGIN ACTIVATED</i> -
      <a href='admin.php?crawler_killer_off=;run'>                                                       
      <button style='background-color: black;color:#ff0000;'>deactivate</button></a></font><br><br><br>";                                             };
if(isset($_GET['crawler_killer_on']))  {  rename("ck_plug.txt", "crawler_killer.php"); header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?returnck;");  };
if(isset($_GET['crawler_killer_off'])) {  rename("crawler_killer.php", "ck_plug.txt"); header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?returnck2;"); };
#crawler_killer_plugin;#
########################

########################
#shell_detector_plugin;#
if(file_exists("emposha_plug.txt"))    {
echo "[<b>Web Shell Detector</b> <font color=lime>beta</font>] - <font color=red><i>PLUGIN AVAILABLE</i> -</font> 
       <a href='admin.php?shell_detector_on=;run'>
       <button style='background-color: black;color:#ff0000;'>activate</button></a></div><br><br>";
                                } else { 
echo "[<b>Web Shell Detector</b> <font color=lime>beta</font>] - <font color=lime><i>PLUGIN ACTIVATED</i> -
      <a href='admin.php?shell_detector_off=;run'>
      <button style='background-color: black;color:#ff0000;'>deactivate</button></a></font></div><br><br><br>"; 
                                                        include_once("emposha_plug.php"); 
                                                                 print_r("<br><br><br>");                                                      };
if(isset($_GET['shell_detector_on']))  {  rename("emposha_plug.txt", "emposha_plug.php"); header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?"); };
if(isset($_GET['shell_detector_off'])) {  rename("emposha_plug.php", "emposha_plug.txt"); header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?"); };
#shell_detector_plugin;#
########################
//end plugins;

//Blocks;
if(isset($_GET['logs_editor'])) {
#_____________________
# Logs editor
$gs_open = htmlentities(file_get_contents("gsentinel_logs.php"));
echo '<i><font color=red>Block1 called;</font></i><br><br>';
echo '
<a href="admin.php?logs_editor=;restart">
    <button style="background-color: black;color:#ff0000;">Refresh</button></a></div><br>
                                  ::::::::::::::::::<br>
                                  Logs Editor: (<font color=red><b>HTML allowed</b></font>)<br>
<form action="'.basename($SERVER[PHP_SELF]).'" method="POST" style="text-align: center;">                            
<textarea name="logs_editor"  id="editor_logs" cols="30" rows="10" style="width: 90%; height: 70vh; background-color: black;color:#ff0000;">
'.$gs_open.'
</textarea><br>
<input type="submit" style="background-color: black;color:#ff0000;" value="save" name="save">
</form><br><br>';
         if(isset($_POST['logs_editor'])) {
   $FileContent = $_POST['logs_editor'];
           $NoPHP_JScode = array("<?", "<?php", "?>", ".js", "alert");
$FileContent_filtred = str_replace($NoPHP_JScode, "", "$FileContent");
$openfile = fopen("gsentinel_logs.php", "w") or die("Unable to open file! [does the log file exist?]");
fwrite($openfile, "$FileContent_filtred");
                      fclose($openfile);
                              echo "<script>alert('File Saved.')</script>";
   header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?logs_editor=;restart");             
                   }
#_____________________
# Logs Reader/Deleter
                echo "<a href='?logs_editor=view&delete1=;reset'>::<i>[Delete File Logs]</i>::</a><br>";
               if (false!==file("gsentinel_logs.php")) print_r("<font color=lime>available</font><br>"); 
                                                  else print_r("<font color=red>unavailable</font><br>");
 if(!empty($_GET['logs_editor']=="view" and $_GET['delete1']==";reset" )) { unlink("gsentinel_logs.php");
 
   header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?logs_editor=;restart");
   
                                                                         };                   
echo "                      ____                 ";
echo "<h2><font color='red'>Logs:</font></h2><br>";
echo file_get_contents("gsentinel_logs.php");
                                                  };//editor1
if(isset($_GET['ban_system'])) {                                                  
#___________________________
# Ban System Dedicate Block;
$gs_open2 = htmlentities(file_get_contents("address_blocked.php"));
echo '<i><font color=red>Block2 called;</font></i><br><br>';
echo '
<a href="admin.php?ban_system=;restart">
    <button style="background-color: black;color:#ff0000;">Refresh</button></a></div><br>
                                  ::::::::::::::::::::::::::<br>
                                  Ban management:<br>
<form action="'.basename($SERVER[PHP_SELF]).'" method="POST" style="text-align: center;">                            
<textarea name="ban_system"  id="editor_logs" cols="30" rows="10" style="width: 90%; height: 70vh; background-color: black;color:#ff0000;">
'.$gs_open2.'
</textarea><br>
<input type="submit" style="background-color: black;color:#ff0000;" value="save" name="save">
</form><br><br>';
         if(isset($_POST['ban_system'])) {
  $FileContent2 = $_POST['ban_system'];
             $NoPHP_JScode2 = array("<?", "<?php", "?>", ".js", "alert");
$FileContent_filtred2 = str_replace($NoPHP_JScode2, "", "$FileContent2");
$openfile2 = fopen("address_blocked.php", "w") or die("Unable to open file! [does the Ban file exist?]");
fwrite($openfile2, "$FileContent_filtred2");
                         fclose($openfile2);
                           echo "<script>alert('Updated list.')</script>";
   header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?ban_system=;restart");             
                   }
#_____________________
# Ban File Reader/Deleter
                echo "<a href='?ban_system=records&delete2=;reset'>::<i>[Reset all Addresses Banned]</i>::</a><br>";
                          if (false!==file("address_blocked.php")) print_r("<font color=lime>available</font><br>"); 
                                                     else print_r("<font color=red>unavailable</font><br>");
 if(!empty($_GET['ban_system']=="records" and $_GET['delete2']==";reset" )) { unlink("address_blocked.php");
 
   header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?ban_system=;restart");
   
                                                                         };                   
echo "                      ____                 ";
echo "<h2><font color='red'>Addresses Blocked:</font></h2><i>";
#Fix;
      $ViewADDR = file_get_contents("address_blocked.php");
                          print_r(nl2br($ViewADDR));
echo "</i>";
                                                  };//editor2
if(isset($_GET['table_protection'])) {
#_______________________________________
# users Table Protection Dedicate Block;
$gs_open3 = htmlentities(file_get_contents("table_protected.jpg"));
echo '<i><font color=red>Block3 called;</font></i><br><br>';
echo '
<a href="admin.php?table_protection=;restart">
    <button style="background-color: black;color:#ff0000;">Refresh</button></a></div><br>
                                  :::::::::::::::::::::::::<br>
                                  Table Protection:<br>[Recommended: users_table]<br>
<form action="'.basename($SERVER[PHP_SELF]).'" method="POST" style="text-align: center;">                            
<input type="text" style="background-color: black;color:#ff0000;" id="tablep" name="table_protection" value="'.$gs_open3.'"><br>
<input type="submit" style="background-color: black;color:#ff0000;" value="save" name="save">
</form><br><br>';
          if(isset($_POST['table_protection'])) {
   $FileContent3 = $_POST['table_protection'];
             $NoPHP_JScode3 = array("<?", "<?php", "?>", ".js", "alert");
$FileContent_filtred3 = str_replace($NoPHP_JScode3, "", "$FileContent3");
$openfile3 = fopen("table_protected.jpg", "w") or die("Unable to open file! [does the file exist?]");
fwrite($openfile3, "$FileContent_filtred3");
                         fclose($openfile3);
                                echo "<script>alert('Updated Table.')</script>";       
   header("Refresh: 0; url=". $SERVER[PHP_SELF] . "?table_protection=;restart");
                                exit;
                                                                              };
                                                  };//editor3
#unistaller_;
print_r("<pre><a href='?gs_unistaller=removal'>::<i>[unistall me]</i>::</a><br></pre>"); if (false!==file("gs_unistaller.php")) 
print_r("<font color=lime><b><i>-- Ready --</i></b></font>");                           else 
print_r("<pre><font color=red><b>unavailable</b></font></pre>");
if(isset($_GET['gs_unistaller']))   { 
print_r("<script>alert('GodSentinel v1.0 successfully removed.')</script>");
include_once("gs_unistaller.php");                                        
                                };
?>
<br><b>______________________________________________________________________________</b><br>
<i>GodSentinel copyright ©</i> by Emiliano Febbi<br>
<a href= "mailto: emilianofebbi.1994@gmail.com">
<i>emilianofebbi.1994@gmail.com</i></a><br>
</center>
</body>
</html>