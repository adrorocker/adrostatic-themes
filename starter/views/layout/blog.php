<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/img/adrostatic.png">

    <title><?=$this->e($title)?></title>

    <!-- Bootstrap core CSS -->
    <link href="/include/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-post.css" rel="stylesheet">
    <link href="/css/theme.css" rel="stylesheet">

  </head>

  <body>

    
    <?= $menu ?>
    <!-- Page Content -->
    <div id="content" class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <?=$this->section('content')?>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website <?= @date('Y'); ?></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/include/jquery/jquery.min.js"></script>
    <script src="/include/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
