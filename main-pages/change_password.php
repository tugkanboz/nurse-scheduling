<?php
session_start();
include("db_conn.php");
if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['oldpassword1']);
 $username=$_SESSION['login'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($con,"SELECT password FROM personal where password='$oldpass' && username='$username'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update personal set password=' $newpassword' where username='$username'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>