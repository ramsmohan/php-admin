<!DOCTYPE html>
<!-- saved from url=(0053) -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="canonical" href="/">
  <!-- Bootstrap core CSS -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#563d7c">
  <!-- Custom styles for this template -->
  <link href="./assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">


  
  <?php 
    if(isset($_SESSION)) session_destroy();
  ?>
    <form class="form-signin" action="loginCheck.php" method="POST">
      <i class="fa fa-user"></i>
      <img class="mb-4" src="assets/img/login.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="login_email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><input type="hidden" name="login" value="true">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="login_pwd" id="inputPassword" class="form-control" placeholder="Password" required>

      <button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Sign in</button>
      <?php 
        if(isset($_GET['msg'])) 
          if($_GET['msg']=='failed') 
            echo '<div class="alert alert-danger">Login Failed.</div>';
       ?>

      <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y') ?></p>
    </form>





  <script src="./assets/js/jquery-3.4.1.slim.min.js"></script>
</body>

</html>

