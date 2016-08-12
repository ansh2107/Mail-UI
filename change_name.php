<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{
header("Location: login.php");
}
if(isset($_POST['new_name']))
{
if(!empty($_POST['new_name']))
{
$old_name=$_SESSION['display_name'];
$new_name=stripslashes(trim($_POST['new_name']));
$uname=$_SESSION['username'];
mysql_connect("localhost","cl57-mailui","mailui");
mysql_select_db("cl57-mailui");
mysql_query("UPDATE login SET full_name='$new_name' WHERE username='$uname'") or die(mysql_error());
$_SESSION['display_name']=$new_name;
print "Your Account name has been changed from $old_name to $new_name";
}
else
{
print "Field cannot be blank";
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
<form action="change_name.php" method="post" >
Current Display Name is <b><?php print $_SESSION['display_name']; ?></b><br />
Enter a new display name: <input type="text" name="new_name" /><br />
<input type="submit" class="login loginmodal-submit" value="change" />
<a href="private.php">Go Back</a>
</form>
</div>
</div>
<?php
}
?>

