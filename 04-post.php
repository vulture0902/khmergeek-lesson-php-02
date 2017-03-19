<!DOCTYPE html>
<html lang="kh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KhmerGeek Sample Page</title>

  </head>
  <body>

  <form action="04-post.php" method="post">
    <input type="text" name="text1">
    +
    <input type="text" name="text2">
    <input type="submit" name="send" value="=">
    <?php
      echo($_POST['text1'] + $_POST['text2']);
    ?>
  </form>




  </body>
</html>
