<html>
<head>
  <title>- logout -GS</title>
</head>
<body>
<center>
<body bgcolor="black">
<body text="white">
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
#logout;
include_once("gs_sessions_patch.php");
session_start();
if($_SESSION["connected"]="$lineX") {
session_unset();
session_destroy();
echo "<font color=lime>logout successful!</font>";
echo "<br><b>Redirecting..</b>";
            header("Refresh: 1; URL=login_s.php");
                           exit;
 } 
?>
</center>
</body>
</html>