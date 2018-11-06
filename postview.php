<!DOCTYPE html>
<html lang="en">
<?php
  $rootfolder= $_SERVER['DOCUMENT_ROOT'];
  $prjectfolder = "keepsstory";
  include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
  $postid=$_GET['postid'];
  $query = "select * from table_post where post_id='$postid'";
  $data = mysql_query($query);
  $result = mysql_fetch_assoc($data);

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
              <a class="nav-link text-uppercase text-expanded" href="#" onclick="document.getElementById('id01').style.display='block'">Login</a>
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
      </div>

    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; KeepsStory 2017</p>
      </div>
    </footer>

    <!--Login Modal-->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" data-dismiss="modal" href="#">&times;</span>
      <div class="modal-dialog">
      <div class="modal-content">
        <!-- Distance -->
        <div class="modal-header" align="center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
        </div>
        <!-- Begin # DIV Form -->
        <div id="div-forms">
          <!-- Begin # Login Form -->
          <form id="login-form" action="php/user_login.php" method="post">
            <div class="modal-body">
                <input id="login_username" class="form-control" type="text" placeholder="Username . . . . " name="username" required>
                <input id="login_password" class="form-control" type="password" placeholder="Password . . . ." name="password" required><br>
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div>
             </div>
             <div class="modal-footer">
                  <div>
                    <button name="submit" type="submit" class="btn btn-primary btn-lg">Login</button>
                  </div>
                  <div>
                    <button id="login_register_btn" type="button" data-dismiss="modal" class="btn btn-link" data-dismiss="modal" onclick="document.getElementById('id02').style.display='block'; document.getElementById('id01').style.display='none'">register</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End # Login Form -->

    <!--Register Modal-->
    <div id="id02" class="modal">
      <span style="color: white;" onclick="document.getElementById('id02').style.display='none'" data-dismiss="modal" href="#">&times;</span>
      <div class="modal-dialog">
      <div class="modal-content">
        <!-- Distance -->
        <div class="modal-header" align="center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
        </div>
        <!-- Begin # DIV Form -->
        <div id="div-forms">
          <!-- Begin # Login Form -->
          <form id="login-form" action="php/user_register.php" method="post">
            <div class="modal-body">
                <input id="login_username" class="form-control" type="text" placeholder="Username . . . . " name="username" required><br>
                <input id="login_username" class="form-control" type="email" placeholder="E-Mail . . . . " name="email" required><br>
                <input id="login_username" class="form-control" type="text" placeholder="First Name . . . ." name="fname" required><br>
                <input id="login_username" class="form-control" type="text" placeholder="Last Name . . . . " name="lname" required><br>
                <input id="login_username" class="form-control" type="password" placeholder="password . . . . " name="password" required><br>
                <input id="login_username" class="form-control" type="password" placeholder="password . . . . " name="confirm_password" required><br>
             </div>
             <div class="modal-footer">
                  <div>
                    <button name="submit" type="submit" class="btn btn-primary btn-lg">Submit</button>
                  </div>
                  <div>
                    <button id="login_register_btn"  data-toggle="modal" data-target="id01" type="button" class="btn btn-link" onclick="document.getElementById('id01').style.display='block'; document.getElementById('id02').style.display='none'" data-dismiss="modal">Login</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script onload="modal1()" src="./js/modal1.js"></script>
    <script onload="modal2()" src"./js/modal2.js"></Script>

  </body>

</html>
