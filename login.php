<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
header("Location: private.php");
}
?>
<html>
<head>
<title>Login Page</title>
</head>
<body>
<?php
if (isset($_POST['uname']) && isset($_POST['pass']))
{
if (!empty($_POST['uname']) && !empty($_POST['pass']))
{
$uname=stripslashes(trim($_POST['uname']));
$pass=stripslashes(trim($_POST['pass']));
mysql_connect("localhost","cl57-mailui","mailui");
mysql_select_db("cl57-mailui");
$check=mysql_query("SELECT * FROM login WHERE username='$uname' AND password='$pass'");
if(mysql_num_rows($check)!=0)
{
$details=mysql_fetch_array($check);
$_SESSION['display_name']=$details[0];
$_SESSION['username']=$details[1];
$_SESSION['password']=$details[2];
header("Location: private.php");
}
else
{
echo
'<script>
alert("Invalid Username/Password");
</script>';

}
}
else
{
echo
'<script>
alert("All fields must be filled");
</script>';

}
}
else
{
?>
<form action="login.php" method="post">
Username: <input type="text" name="uname" /><br />
Password: <input type="password" name="pass" /><br />
<input type="submit" value="Login" />
</form>
<?php
}
?>
</body>
</html>
