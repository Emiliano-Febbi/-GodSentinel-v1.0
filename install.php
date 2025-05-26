<html>
<head>
  <title>- installation -GS</title>
</head>
<body>
<center>
<body bgcolor="black">
<body text="white">
<body link="red">
<body vlink="red">
<img src="./imgs/panel_banner.jpg" alt="panel_banner"><br>
<i>Choose a password.</i><br>
[Install pwd]:<br>
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
#delete me;
if(isset($_GET['install_del'])) {
print "<script>alert('installation Completed.')</script>";
header("Refresh: 1; URL=login_s.php"); 
unlink("install.php"); 
                 exit;
 }
echo '
<form action="'.basename($SERVER[PHP_SELF]).'" method="POST" style="text-align: center;">
<input type="text" style="background-color: black;color:#ff0000;" id="tablep" name="pwd"><br>
<input type="submit" style="background-color: black;color:#ff0000;" value="install" name="install"><br>
</form>';
#  ___________________
#__installation system__v1.0
#Registration Key;
 if(empty($_POST['pwd'])) { die(); } else {
   $pwd = $_POST['pwd'];
$pwd_hashed = md5($pwd);
$createX = fopen("GS_$pwd_hashed.jpg", 'a');
fwrite($createX, $pwd);
      fclose($createX);                                          
                 print_r("<b>chosen password:</b> <font color=red>$pwd</font><br>");
                 rename("htaccess.txt", ".htaccess");
 echo "<a href='?install_del=execute'>::<i>[Delete File install.php]</i>::</a><br>";
                                                   };
 
?>
<br><b>______________________________________________________________________________</b><br>
<i>GodSentinel copyright ©</i> by Emiliano Febbi<br>
<a href= "mailto: emilianofebbi.1994@gmail.com">
<i>emilianofebbi.1994@gmail.com</i></a><br>
</center>
</body>
</html>