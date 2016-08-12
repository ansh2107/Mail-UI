<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'users');
define('DB_USER','root');

define('DB_PASSWORD','');


$fname=stripslashes(trim($_POST['fname']));
$uname=stripslashes(trim($_POST['uname']));
$email=stripslashes(trim($_POST['email']));
$contact=stripslashes(trim($_POST['contact']));
$pass1=stripslashes(trim($_POST['pass1']));
$pass2=stripslashes(trim($_POST['pass2']));


if(!empty($uname) && !empty($fname) && !empty($email) && !empty($contact) && !empty($pass1) && !empty($pass2))
{
if ($pass1==$pass2)
{
if ($uname!='username')
{
mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());

mysql_select_db(DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());



$add_user=mysql_query("INSERT INTO signup(Username,Fullname,Email_Address,Contact_Number,Password) values ('$uname','$fname','$email','$contact','$pass1')");
if ($add_user)
{
print "You've sucessfully registered on our website";
}
mysql_close();
}
else
{
print  "Username already exists. Please change it";
}
}
else
{
print "Passwords do not match";
}
}
else
{
print "Please Fill in all the fields";
}


?>