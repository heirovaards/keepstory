<!DOCTYPE html>
<?php
      //core PHP
      $rootfolder= $_SERVER['DOCUMENT_ROOT'];
      $prjectfolder = "keepsstory";
      include($rootfolder.'/'.$prjectfolder.'/php/connection.php');
      include($rootfolder.'/'.$prjectfolder.'/php/session.php');
      //----//
      $usersql = "SELECT * FROM table_user WHERE user_id = '$sesuser'";
      $userqry = mysql_query($usersql);
      $userdata = mysql_fetch_assoc($userqry);


      $postsql = "SELECT * FROM table_post WHERE user_id = '$sesuser' ORDER BY post_date DESC";
      $postqry = mysql_query($postsql);
      //echo "Error message = ".mysql_error();
      $postnum = mysql_num_rows($postqry);
      //echo "Error message = ".mysql_error();
      $postdata = mysql_fetch_assoc($postqry);
      $postid = $postdata['post_id'];

      $commentsql = "SELECT * FROM table_review WHERE user_id = '$sesuser'";
      $commentqry = mysql_query($commentsql);
      $commentnum = mysql_num_rows($commentqry);

      $contentid=$_GET['post'];
      $contentsql = "SELECT * FROM table_post WHERE post_id = '$contentid'";
      //echo "Error message = ".mysql_error();
      $contentqry = mysql_query($contentsql);
      $contentdata = mysql_fetch_assoc($contentqry);

 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <!--NAVBAR-->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KeepsStory</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
            <li  class="active"><a href="post.php">Post</a></li>
            <li><a href="comment.php">Comment</a></li>
            <li><a href="../login/">Back</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $userdata['user_fname']; ?></a></li>
            <li><a href="../php/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--//NAVBAR-->

    <!--Jumbotron-->
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> KeepsStory <small>Dashboard</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Post</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--//Jumbotron-->

    <!-- breadcrumb -->
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li class="post.php">Posts</li>
          <li class="active">Edit Post</li>
        </ol>
      </div>
    </section>
    <!-- //breadcrumb -->

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="post.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Post <span class="badge"><?php echo $postnum; ?></span></a>
              <a href="comment.php" class="list-group-item"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Comment <span class="badge"><?php echo $commentnum;?></span></a>
            </div>
          </div>

          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Edit Post</h3>
              </div>
              <div class="panel-body">
                <form method="post" action="../php/post_edit.php">
                  <div class="form-group">
                    <label>Post Title</label>
                    <input type="text" class="form-control" name="tittle" value="<?php echo $contentdata['post_tittle'];?>">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $contentdata['post_id'];?>">
                  </div>
                  <div class="form-group">
                    <label>Page Body</label>
                    <textarea name="editor1" class="form-control"><?php echo $contentdata['post_content']; ?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" value="<?php echo $contentdata['post_category']; ?>" name="category">
                  </div>
                  <div class="form-group">
                    <label>Origin</label>
                    <input type="text" class="form-control"  value="<?php echo $contentdata['post_origin']; ?>" name="origin">
                  </div>
                  <input type="submit" class="btn btn-default" value="Submit">
                </form>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright &copy; KeepsStory 2017</p>
    </footer>

    <!-- Modals -->

    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="../php/post_add.php" method="post">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Add Post</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Post Title</label>
                <input type="text" class="form-control" placeholder="Page Title" name="tittle" required>
              </div>
              <div class="form-group">
                <label>Post</label>
                <textarea name="editor1" class="form-control" placeholder="Page Body" required></textarea>
              </div>
              <div class="form-group">
                <label>Category</label>
                <input name="category" type="text" class="form-control" placeholder="Add Category..." required>
              </div>
              <div class="form-group">
                <label>Origin</label>
                <input name="origin" type="text" class="form-control" placeholder="Add Meta Description..." required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
      </div>
    </div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
