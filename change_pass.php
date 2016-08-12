<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{
header("Location: login.php");
}
if (isset($_POST['cur_pass']) && isset($_POST['pass1']) && isset($_POST['pass2']))
{
if (!empty($_POST['cur_pass']) && !empty($_POST['pass1']) && !empty($_POST['pass2']))
{
$current_pass=stripslashes(trim($_POST['cur_pass']));
$pass1=stripslashes(trim($_POST['pass1']));
$pass2=stripslashes(trim($_POST['pass2']));
if($pass1==$pass2)
{
if($current_pass==$_SESSION['password'])
{
mysql_connect("localhost","cl57-mailui","mailui");
mysql_select_db("cl57-mailui");
mysql_query("UPDATE login SET password='$pass1' WHERE username='".$_SESSION['username']."'");
$_SESSION['password']=$pass1;
print "Password successfully changed";
}
else
{
print "The current password is incorrect";
}
}
else
{
print "Both the passwords do not match";
}
}
else
{
print "Please fill all the fields";
}
}
else
{
?>
<head>
<link rel="stylesheet" type="text/css" href="private_style.css"></link>
</head>
 <div class="modal-dialog">
				<div class="loginmodal-container">
<form action="change_pass.php" method="post">
Current Password: <input type="password" name="cur_pass" /><br />
New Password: <input type="password" name="pass1" /><br />
Retype New Password: <input type="password" name="pass2" /><br />
<input type="submit" value="Change Password" class="login loginmodal-submit"/>
</form>
<?php
}
?>
