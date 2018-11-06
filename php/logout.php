<?php
  //recall session
  include ('session.php');
  //destroy session
  session_destroy();
  //redirect link
  echo '<script language="javascript"> location.href = "../index.php" </script>';
?>
