<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'users');
define('DB_USER','root');
define('DB_EMAIL','root');
define('DB_CONTACT','root');
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
if ($uname!='Username')
{
mysql_connect("localhost","root","");
mysql_select_db("users");
$add_user=mysql_query("INSERT INTO signup(Username,Fullname,Email Address,Contact Number,Password) values ('$uname','$fname','$email','$contact','$pass1')");
if ($add_user)
{
print "You've sucessfully registered on our website";
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
}

?>