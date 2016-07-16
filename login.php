<?php // FMStudio Pro - do not remove comment, needed for DreamWeaver support  ?>
<?php

require_once('lib/FMStudio_v2/FMStudio_Tools.php');
$_GET["errorMsg"] = fmsPerformLogin();
// FMStudio v1.0 - do not remove comment, needed for DreamWeaver support ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Page Can't Be Displayed</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
body {
	background-image: url(images/45503552_ml.jpg);
	background-color: #ffffff;
}
.style4 {
	color: #D7D7D7;
	font-weight: bold;
}
.style5 {color: #FFFFFF}
.style6 {
	color: #62EDE7
}
.style7 {
	color: #ffffff;
	text-align: right;
}
-->
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>

<form id="login_form" name="login_form" method="post" action="">
  <div align="left"><span class="style1"><?php echo $_GET["errorMsg"]; ?></span><br />
</div>
  <div align="left"></div>
  <table width="1005" border="0">
    <tr>
        <td valign="top" ><img src="images/perceptiosmall.png" width="80" height="75" alt=""/></td>
      <td><table width="400" border="0" align="left">
              <tr>
          <th colspan="2" align="left" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="2" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th align="right" style="color: #ffffff; text-align: right;" scope="row">User</th>
          <td><input name="login_user" type="text" id="login_user" size="19" /></td>
        </tr>
        <tr>
          <th align="right" scope="row"><span class="style7">Password</span></th>
          <td><input name="login_pass" type="password" id="login_pass" size="20" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="Submit" value="Login" /></td>
        </tr>
      </table></td>
      <td align="right" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td width="48">&nbsp;</td>
      <td width="800">&nbsp;</td>
      <td width="143" align="right" valign="middle">&nbsp;</td>
    </tr>
    <tr> </tr>
  </table>
  <p>&nbsp;</p>
</form>

</body>
</html>
