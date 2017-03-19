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

    color:  <?php echo $_SESSION['favcolor']; ?> <br>
    animal: <?php echo $_SESSION['animal']; ?> <br>
    date:   <?php echo date('Y m d H:i:s', $_SESSION['time']); ?> <br>

    <a href="02-session-1.php">page 1</a>



  </body>
</html>
