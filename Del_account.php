<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{
header("Location: login.php");
}
if(isset($_POST['confirm']))
{
if($_POST['confirm']=='Yes')
{
mysql_connect("localhost","cl57-mailui","mailui");
mysql_select_db("cl57-mailui");
mysql_query("delete from login where username='".$_SESSION['username']."'");


echo
'<script>
alert("Your account has been deleted");
</script>';

session_destroy();
header("Location: form2.html");
}
else
{
header("Location: private.php");
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
<form method="post" action="Del_account.php">
<h4>Are you sure you want to delete your account ?</h4>

<input type="submit" name="confirm"  value="Yes" style="background-color: #CC3333; color: #FFFFFF"/>
<input type="submit" name="confirm"  value="No" style="background-color: #CC3333; color: #FFFFFF"/>

</form>
<?php
}
?>
