<?php
session_start();
if(isset($_SESSION['Username']) && isset($_SESSION['Password']))
{
header("Location: private.php");
}

if (isset($_POST['uname']) && isset($_POST['pass']))
{
if (!empty($_POST['uname']) && !empty($_POST['pass']))
{
$uname=stripslashes(trim($_POST['uname']));
$pass=stripslashes(trim($_POST['pass']));
mysql_connect("localhost","root","");
mysql_select_db("users");
$check=mysql_query("SELECT * FROM signup WHERE Username='$uname' AND Password='$pass'");
if(mysql_num_rows($check)!=0)
{
$details=mysql_fetch_array($check);
$_SESSION['display_name']=$details[0];
$_SESSION['Username']=$details[1];
$_SESSION['Password']=$details[2];
header("Location: private.php");
}
else
{
print "Invalid Username/Password";
}
}
else
{
print "All fields must be filled";
}
}
else
{
?>
