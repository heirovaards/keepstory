<!DOCTYPE html>
<html lang="en">
<?php
  $rootfolder= $_SERVER['DOCUMENT_ROOT'];
  $prjectfolder = "keepsstory";
  include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
  include($rootfolder.'/'.$prjectfolder.'/php/user_login.php');
  include($rootfolder.'/'.$prjectfolder.'/php/session.php');
  $postid=$_GET['postid'];
  $query = "select * from table_post where post_id='$postid'";
  $data = mysql_query($query);
  $result = mysql_fetch_assoc($data);

  $usersql = "select * from table_user where user_id='$sesuser'";
  $userqry = mysql_query($usersql);
  $userdata = mysql_fetch_assoc($userqry);

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
</head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Business Casual</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

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
        <h2 class="text-center text-lg text-uppercase my-0"><strong><?php echo $result['post_tittle']; ?></strong>
        </h2>
        <hr class="divider">
        <label class="text-heading">Author :</label><strong> <?php echo $result['post_author']; ?></strong><br>
        <label class="text-heading">Story Origin :</label><strong> <?php echo $result['post_origin']; ?></strong><br>
        <label class="text-heading">Category :</label><strong> <?php echo $result['post_category']; ?></strong><br>
        <label class="text-heading">Publised Date :</label><strong> <?php echo date ('d-M-Y', strtotime($result['post_date'])); ?></strong><br>
        <p><?php echo $result['post_content']; ?></p>
        </div>

        <div class="bg-faded p-4 my-4">
          <hr class="divider">
          <h2 class="text-center text-lg text-uppercase my-0">Comment
            <strong>Form</strong>
          </h2>
          <hr class="divider">
          <form action="../php/post_comment.php" method="post">
            <div class="row">
              <div class="form-group col-lg-4">
                <label class="text-heading">Rating</label>
                <input type="hidden" class="form-control" value="<?php echo $userdata['user_id']; ?>" name="userid">
                <input type="hidden" class="form-control" value="<?php echo $result['post_id']; ?>" name="postid">
                <select class="form-control" name="rating">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-lg-12">
                <label class="text-heading">Comment</label>
                <textarea class="form-control" rows="6" name="comment"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </div>
          </form>
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
