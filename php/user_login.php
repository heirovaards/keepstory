<?php
  //connection
  include('connection.php');
  //bring the root folder
  $rootfolder= $_SERVER['DOCUMENT_ROOT'];
  //echo $rootfolder;
  //if submit is true
  if (isset($_POST['username']))
  {
    //get email
    $username=$_POST['username'];
    //get password
    $password=$_POST['password'];
    //check query
    $query = mysql_query("select * from table_user where user_name='$username' AND user_password='$password'");
    //return query
    $baris = mysql_num_rows($query);
    //return query
    //get role
    $user = mysql_fetch_assoc($query);
    $role = $user['user_role'];
    $userid =  $user['user_id'];
    if($baris==0)
      {
          session_destroy();
          echo '<script language="javascript"> window.alert("Username or Password is not correct!") </script>';
          echo '<script language="javascript"> location.href = "../index.php" </script>';
      }
    elseif($role=='admin')
      {
        session_start();
        $_SESSION['userid']=$userid;
        $_SESSION['successparam']=1;
        $_SESSION['role']=2;
        //echo '<script language="javascript"> window.alert("Success!") </script>';
        echo '<script language="javascript"> location.href = "../login/index.php" </script>';
      }
    elseif($role == 'user')
      {
        session_start();
        $_SESSION['userid']=$userid;
        $_SESSION['successparam']=1;
        $_SESSION['role']=1;
        //echo '<script language="javascript"> window.alert("Success!") </script>';
        echo '<script language="javascript"> location.href = "../login/index.php" </script>';
      }
      else
      {
        session_destroy();
        $_SESSION['successparam']=0;
        $_SESSION['role']=0;
        echo '<script language="javascript"> location.href = "../index.php" </script>';
      }
  }
?>
