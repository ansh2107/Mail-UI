<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'users');
define('DB_USER','root');
define('DB_PASSWORD','');


$fname=stripslashes(trim($_POST['fname']));
$uname=stripslashes(trim($_POST['uname']));
$pass1=stripslashes(trim($_POST['pass1']));
$pass2=stripslashes(trim($_POST['pass2']));
if(!empty($fname) && !empty($uname) && !empty($pass1) && !empty($pass2))
{
if ($pass1==$pass2)
{
mysql_connect("localhost","cl57-mailui","mailui");
mysql_select_db("cl57-mailui");
$add_user=mysql_query("INSERT INTO login(full_name,username,password) values ('$fname','$uname','$pass1')");
if ($add_user)
{



echo
'<script>

alert("You have sucessfully registered on our website");
</script>';

header("Location: form2.html");
mysql_close();
}
}
else
{


echo
'<script>
alert("Passwords do not match");
</script>';

}
}
else
{
echo
'<script>
alert("Please Fill in all the fields");
</script>';

}

?>
