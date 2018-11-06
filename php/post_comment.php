<?php
  $rootfolder= $_SERVER['DOCUMENT_ROOT'];
  $prjectfolder = "keepsstory";
  include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
  include($rootfolder.'/'.$prjectfolder.'/php/user_login.php');
  include($rootfolder.'/'.$prjectfolder.'/php/session.php');
  $reviewerid =  addslashes(strip_tags($_POST['userid']));
  $postid = addslashes(strip_tags($_POST['postid']));
  $rating =  addslashes(strip_tags($_POST['rating']));
  $comment = addslashes(strip_tags($_POST['comment']));

  //taking number of review based on reader id and post id
  $sql = "SELECT * FROM table_review where reviewer_id = '$reviewerid' AND post_id = '$postid'";
  $query = mysql_query($sql);
  $row = mysql_num_rows($query);

  //taking user id of the post creator
  $usersql = "SELECT * FROM table_post WHERE post_id = '$postid'";
  $userqry = mysql_query($usersql);
  $userdata = mysql_fetch_assoc($userqry);
  $userid = $userdata['user_id'];


  //echo "Error message = ".mysql_error();
  //echo $reviewqry;

  //IF IN REEVIEW TABLE HAVE SAME POST COMMENTED BY SAME USER
  if ($row > 0)
  {
    echo '<script type="text/javascript">alert("You have commented this post before, YOUR COMMENT WILL NOT BE RECORDED");
    location.href = "../login/post.php"</script>';
  }
  //IF IN user id in post table (author id) are same with reviewer id
  elseif($userid == $reviewerid)
  {
    echo '<script type="text/javascript">alert("You are not allowed to comment your own post");
    location.href = "../login/post.php"</script>';
  }
  else
  {
      $sqlinsert = "INSERT INTO table_review VALUES(NULL, '$reviewerid','$userid', '$postid', '$rating', '$comment', CURRENT_DATE)";
      //echo "Error message = ".mysql_error();
      $queryinsert = mysql_query($sqlinsert);


      //get number of reviewer on certain post
      $reviewsql = "SELECT COUNT(review_id) AS no_review FROM table_review WHERE post_id='$postid'";
      $reviewqry = mysql_query($reviewsql);
      $reviewdata = mysql_fetch_assoc($reviewqry);
      $reviewval = $reviewdata['no_review'];

      //get sum of rating  given
      $ratingsql = "SELECT SUM(review_rating) AS rating_data FROM table_review WHERE post_id='$postid'";
      $ratingqry = mysql_query($ratingsql);
      $ratingdata = mysql_fetch_assoc($ratingqry);
      $ratingval = $ratingdata['rating_data'];

      //return average
      $avg = $ratingval / $reviewval;

      $updatesql = "UPDATE table_post SET post_sumrating ='$ratingval',  post_totalrating = '$reviewval' , post_rating = '$avg' WHERE post_id='$postid'";
      $updateqry = mysql_query($updatesql);


      echo '<script type="text/javascript">alert("Thank you for your feedback");
      location.href = "../login/post.php"</script>';

    }



 ?>
