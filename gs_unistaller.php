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
if(strpos($_SERVER['PHP_SELF'] , "gs_unistaller.php"))  { 
               require_once("alarm.php");
die("<center>Privilege escalation not Allowed.</center>");
   }
#__________________
#unistaller block; |
#shopping list..
unlink("DOCUMENTATION-Sentinel.htm");
unlink("NoXploiter.php");
unlink("admin.php");
unlink("alarm.php");
unlink("banner.php");
unlink("blockIP.php");
unlink("crawler_killer.php");
unlink("emposha_plug.php");
unlink("file.db");
unlink("godsentinel.php");
unlink("gs_sessions.php");
unlink("gs_sessions_patch.php");
unlink("htaccess.txt");
unlink(".htaccess");
unlink("login_s.php");
unlink("logo_sentinel.png");
unlink("logout_s.php");
unlink("no_hackme_adv_filters.php");
unlink("nohackme_filters.php");
unlink("sqli_filters_get.php");
unlink("sqli_filters_post.php");
unlink("table_filters.php");
unlink("table_protected.jpg");
unlink("xss_filters_get.php");
unlink("xss_filters_post.php");
unlink("NoX_plug.txt");
unlink("ck_plug.txt");
unlink("emposha_plug.txt");
unlink("no_hackme_adv_filters_off.php");
unlink("nohackme_filters_off.php");
unlink("sqli_filters_get_off.php");
unlink("sqli_filters_post_off.php");
unlink("table_filters_off.php");
unlink("xss_filters_get_off.php");
unlink("xss_filters_post_off.php");
#dir_removing;
$img1 = "banner.jpg";	
$img2 = "delete.png";
$img3 = "green_dot.gif";
$img4 = "home.png";
$img5 = "logs_x.gif";
$img6 = "panel_banner.jpg";
$img7 = "red_dot.gif";
$img8 = "table_x.png";
if(is_dir("imgs")) { 
unlink("imgs/" . $img1);
unlink("imgs/" . $img2); 
unlink("imgs/" . $img3); 
unlink("imgs/" . $img4); 
unlink("imgs/" . $img5); 
unlink("imgs/" . $img6); 
unlink("imgs/" . $img7); 
unlink("imgs/" . $img8);
rmdir("imgs");
            };
unlink("gs_unistaller.php");
#now_pay;
?>