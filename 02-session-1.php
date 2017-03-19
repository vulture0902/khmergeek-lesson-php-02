<!DOCTYPE html>
<html lang="kh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KhmerGeek Sample Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" >

  </head>
  <body>

    <?php session_start(); ?>

    <?php $_SESSION['favcolor'] = 'green'; ?>
    <?php $_SESSION['animal']   = 'cat'; ?>
    <?php $_SESSION['time']     = time(); ?>

    <a href="02-session-2.php">page 2</a>

  </body>
</html>
