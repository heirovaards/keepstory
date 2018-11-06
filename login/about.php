<!DOCTYPE html>
<html lang="en">
<?php
$rootfolder= $_SERVER['DOCUMENT_ROOT'];
$prjectfolder = "keepsstory";
include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
include($rootfolder.'/'.$prjectfolder.'/php/user_login.php');
include($rootfolder.'/'.$prjectfolder.'/php/session.php');
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
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
            </li>
            <li class="nav-item px-lg-4">
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
        <h2 class="text-center text-lg text-uppercase my-0">About
          <strong>KeepsStory</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="img/slide-2.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <p>KeepsStory are developed by Faculty of Computer Science Student in  University Malaysia Sarawak in order to implement Collaborative Recomendation algorith by having platform that allow the user write, read, rate and commenting a story.</p>
            <p>The system are build based based on a believe "Everything are from the author, for the author and to the author" whereby in this pages,the user are allowed to write, read and comment. Based on that, the algorithm will find, rank and sort the story and provide a suitable result for the reader. </p>
          </div>
        </div>
      </div>


      <!-- Team-->
      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Our
          <strong>Team</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
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
    <script onload="modal1()" src="./js/modal1.js"></script>
    <script onload="modal2()" src"./js/modal2.js"></Script>

  </body>

</html>
