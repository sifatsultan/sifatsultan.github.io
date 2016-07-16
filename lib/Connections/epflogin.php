<?php // FMStudio Pro - do not remove comment, needed for DreamWeaver support  ?>
<?php
# FileName="PHP_FileMaker_Login.htm"
# Type="FileMaker"
# FileMaker="true"
$path = preg_replace("#^(.*[/\\\\])[^/\\\\]*[/\\\\][^/\\\\]*$#",'\1',__FILE__);
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('FileMaker.php');
require_once('FMStudio_v2/FMStudio_Tools.php');
fmsCheckLogin('epflogin','login.php');
$hostname_epflogin = "127.0.0.1";
$database_epflogin = "EPF";
$username_epflogin = "epfuser";
$password_epflogin = "epfpass";
$Lusername_epflogin = $_SESSION['epflogin_login']['user'];
$Lpassword_epflogin = $_SESSION['epflogin_login']['pass'];
$epflogin = new FileMaker($database_epflogin, $hostname_epflogin, $Lusername_epflogin, $Lpassword_epflogin); 
fmsCheckFirstLogin('epflogin','login.php',$epflogin);
?>