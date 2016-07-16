<?php // FMStudio Pro - do not remove comment, needed for DreamWeaver support  ?>
<?php
# FileName="PHP_FileMaker_Login.htm"
# Type="FileMaker"
# FileMaker="true"
$path = preg_replace("#^(.*[/\\\\])[^/\\\\]*[/\\\\][^/\\\\]*$#",'\1',__FILE__);
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('FileMaker.php');
require_once('FMStudio_v2/FMStudio_Tools.php');
fmsCheckLogin('sportslogin','login.php');
$hostname_sportslogin = "127.0.0.1";
$database_sportslogin = "sportsdev";
$username_sportslogin = "sportsuser";
$password_sportslogin = "sportspass";
// $Lusername_sportslogin = $_SESSION['sportslogin_login']['user'];
// $Lpassword_sportslogin = $_SESSION['sportslogin_login']['pass'];
$Lusername_sportslogin = "sifatsultan";
$Lpassword_sportslogin = "pizzahut20"
$sportslogin = new FileMaker($database_sportslogin, $hostname_sportslogin, $Lusername_sportslogin, $Lpassword_sportslogin);
fmsCheckFirstLogin('sportslogin','login.php',$sportslogin);
?>
