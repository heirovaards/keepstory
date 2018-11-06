<?php


//core PHP
$rootfolder= $_SERVER['DOCUMENT_ROOT'];
$prjectfolder = "keepsstory";
include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
include($rootfolder.'/'.$prjectfolder.'/php/session.php');
//----//

$contentid=$_GET['post'];

$sql="DELETE FROM table_post where post_id='$contentid'";
$query=mysql_query($sql);
echo '<script language="javascript">  confirm("Are you sure you want to delete?"); </script>';
echo '<script language="javascript"> location.href = "../admin/post.php" </script>';


 ?>
