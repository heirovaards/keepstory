<?php
  include('connection.php');
  $output = '';
  if(isset($_POST['search']))
  {
    $searchq = $_POST['search'];;
    $searchq = preg_replace["#[^0-9a-z]#i","",$searchq];
    $sql = "SELECT * FROM table_post WHERE CONCAT (`post_id`, `post_category`, `user_id`, `post_author`, `post_tittle`, `post_content`, `post_date`, `post_origin`, `post_rating`, `post_totalrating`, `post_sumrating`) LIKE '%$searchq%'";
    $query = mysql_query($sql) or die("cant search");
    $count = mysql_num_rows($query);
    if($count == 0)
    {
      $output = 'data not found';
    }
    else
    {
      while ($postdata = mysql_fetch_array($query))
      {
        $tittle = $postdata['post_tittle'];

        $output."" '<div>'.$title.'<div>';
      }
    }
  }
  echo ($output);

 ?>
