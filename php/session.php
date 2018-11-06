<?php
  session_start();
  //connection
  include('connection.php');
  //session handlings
  include('user_login.php');
  //bring session
  $sesuser = $_SESSION['userid'];
  $sesrole = $_SESSION['role'];
  $sesparam = $_SESSION['successparam'];
  //if session wrong sesson destroy
  if ($sesparam != 1)
  {
    session_destroy();
    echo '<script language="javascript"> window.alert("Inval User") </script>';
    echo '<script language="javascript"> location.href = "../index.php" </script>';
  }
?>
