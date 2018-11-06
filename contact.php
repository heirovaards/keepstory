<!DOCTYPE html>
<html lang="en">
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
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="post.php">Post</a>
                </li>
                <li class="nav-item active px-lg-4">
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
        <h2 class="text-center text-lg text-uppercase my-0">Contact
          <strong>Business Casual</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
              <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.504878460608!2d110.42926598810308!3d1.470206760178571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba3ce88e3a469%3A0xf0983c853635b29!2sFaculty+of+Computer+Science+and+Information+Technology!5e0!3m2!1sen!2smy!4v1512522302388"></iframe>
            </div>
          </div>
          <div class="col-lg-4">
            <h5 class="mb-0">Phone:</h5>
            <div class="mb-4">082-581 000</div>
            <h5 class="mb-0">Email:</h5>
            <div class="mb-4">
              <a href="mailto:name@example.com">info@unimas.my</a>
            </div>
            <h5 class="mb-0">Address:</h5>
            <div class="mb-4">
              Jalan Datuk Mohammad Musa
              <br>
              94300 Kota Samarahan, Sarawak
            </div>
          </div>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contact
          <strong>Form</strong>
        </h2>
        <hr class="divider">
        <form>
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Email Address</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Phone Number</label>
              <input type="tel" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Message</label>
              <textarea class="form-control" rows="6"></textarea>
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

    <!-- Zoom when clicked function for Google Map -->
    <script>
      $('.map-container').click(function () {
        $(this).find('iframe').addClass('clicked')
      }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
      });
    </script>

  </body>

</html>
