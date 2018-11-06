<!DOCTYPE html>
<html lang="en">
<?php
$rootfolder= $_SERVER['DOCUMENT_ROOT'];
$prjectfolder = "keepsstory";
include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
include($rootfolder.'/'.$prjectfolder.'/php/user_login.php');
include($rootfolder.'/'.$prjectfolder.'/php/session.php');
$postsql = "SELECT * FROM table_post";
$postqry = mysql_query($postsql);

if (isset($_POST['search']))
{
  $ValueToSearch = $_POST['ValueToSearch'];
  $query = "SELECT * FROM table_post WHERE CONCAT (`post_id`, `post_category`, `user_id`, `post_author`, `post_tittle`, `post_content`, `post_date`, `post_origin`, `post_rating`, `post_totalrating`, `post_sumrating`) LIKE '%".$ValueToSearch."%'" ;
  $search_result = filterTable($query);
}
else
{
  $query = "SELECT * FROM table_post ORDER BY post_date DESC,  post_totalrating DESC, post_rating DESC";
  $search_result = filterTable($query);
}

function filterTable($query)
{
  $filter_result = mysql_query($query);
  return $filter_result;
}
 ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>KeepsStory</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">
  <link href="css/modal.css" rel="stylesheet">
  <!--Search Function-->
</head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">KeepsStory</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Faculty of Computer Science | University Malaysia Sarawak</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="post.php">Post</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="../admin/index.php">Manage</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="../php/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Story
          <strong>List</strong>
        </h2>
        <hr class="divider">
        <div class="panel-body">
        <form  action="post.php" method="post">
          <div class="row">
                <div class="col-md-12 input-group">
                    <input class="form-control" type="text" placeholder="Filter Pages..." name="ValueToSearch">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="submit" name="search" value="filter">Search!</button>
                    </span>
                </div>
          </div>
          </form>
          <br>
          <table class="table table-striped table-hover">
                <tr>
                  <th>Post Number</th>
                  <th>Tittle</th>
                  <th>Author</th>
                  <th>Published Date</th>
                  <th>No of Reviewer</th>
                  <th>Rating</th>
                  <th>Rating</th>
                </tr>
                <?php
                while ($row = mysql_fetch_array($search_result))
                {
                 ?>
                <tr>
                  <td><?php echo $row['post_id']; ?></td>
                  <td><?php echo $row['post_tittle']; ?></td>
                  <td><?php echo $row['post_author']; ?></td>
                  <td><?php echo date ('d-M-Y', strtotime($row['post_date'])); ?></td>
                  <td><?php echo $row['post_totalrating']; ?></td>
                  <td><?php echo $row['post_rating']; ?></td>
                  <td><a class="btn btn-default" href="postview.php?postid=<?php echo $row['post_id']; ?>">View</a></td>
                </tr>
                <?php
                }
                 ?>
            </table>
        </div>
        </div>
      </div>

    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; KeepsStory 2017</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
