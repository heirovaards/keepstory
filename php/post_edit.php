<?php

//core PHP
$rootfolder= $_SERVER['DOCUMENT_ROOT'];
$prjectfolder = "keepsstory";
include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
include($rootfolder.'/'.$prjectfolder.'/php/session.php');
//----//

$id=$_POST['id'];
$newtittle=$_POST['tittle'];
$newcontent=$_POST['editor1'];
$newcategory=$_POST['category'];
$neworigin=$_POST['origin'];

$sql="UPDATE table_post SET post_content = '$newcontent', post_tittle='$newtittle' , post_category='$newcategory', post_origin='$neworigin'  WHERE post_id = '$id'";
$query = mysql_query($sql);
echo "Error message = ".mysql_error();

echo '<script language="javascript"> window.alert("Post Updated") </script>';
echo '<script language="javascript"> location.href = "../admin/post.php" </script>';


 ?>
