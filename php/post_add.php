<?php

    $rootfolder= $_SERVER['DOCUMENT_ROOT'];
    $prjectfolder = "keepsstory";
    include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
    include($rootfolder.'/'.$prjectfolder.'/php/session.php');


    $tittle = addslashes(strip_tags($_POST['tittle']));
    $content = addslashes(strip_tags($_POST['editor1']));
    $category = addslashes(strip_tags($_POST['category']));
    $origin = addslashes(strip_tags($_POST['origin']));

    $usersql = "SELECT * FROM table_user WHERE user_id = '$sesuser'";
    $userqry = mysql_query($usersql);
    $userdata = mysql_fetch_assoc($userqry);
    $fname = $userdata['user_fname'];
    $lname = $userdata['user_lname'];
    $author = $fname . ' ' . $lname;


    $sql = "INSERT INTO table_post values (NULL, '$category', '$sesuser', '$author' ,'$tittle', '$content', CURRENT_DATE, '$origin', 0, 0, 0)";
    $insertqry = mysql_query($sql);
  //  echo "Error message = ".mysql_error();

    echo '<script language="javascript"> window.alert("Post Recorded") </script>';
    echo '<script language="javascript"> location.href = "../admin/index.php" </script>';



 ?>
