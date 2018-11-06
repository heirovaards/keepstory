<?php
include('connection.php');
//bring the root folder
$rootfolder= $_SERVER['DOCUMENT_ROOT'];

$username =  addslashes(strip_tags($_POST['username']));
$email = addslashes(strip_tags($_POST['email']));
$fname = addslashes(strip_tags($_POST['fname']));
$lname = addslashes(strip_tags($_POST['lname']));
$password = addslashes(strip_tags($_POST['password']));
$confirm_password = addslashes(strip_tags($_POST['confirm_password']));

$sameuser = "SELECT * from table_user where user_name='$username'";
$same = mysql_query($sameuser);
$double = mysql_num_rows($same);

if ($password != $confirm_password)
  {
    echo '<script language="javascript"> window.alert("Password not match") </script>';
    echo '<script language="javascript"> location.href = "../index.php" </script>';
  }
elseif ($double > 0)
  {
    echo '<script language="javascript"> window.alert("Username not available") </script>';
    echo '<script language="javascript"> location.href = "../index.php" </script>';
  }
else
  {
    $sql = "INSERT into table_user values(NULL,'$username','$password', 'user', '$email', CURRENT_DATE, '$lname', '$fname')";
    $query=mysql_query($sql);
    echo '<script language="javascript"> location.href = "../index.php" </script>';
  }
 ?>
