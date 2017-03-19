<!DOCTYPE html>
<html lang="kh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KhmerGeek Sample Page</title>


  </head>
  <body>

    <style>
    .box{
      width: 50px;
      height: 50px;
      border: 2px solid black;
      margin: 5px;
      float:left;
    }
    .p1{
      background-color: gray;
    }
    .p2{
      background-color: red;
    }
    .p3{
      background-color: yellow;
    }
    .p4{
      background-color: blue;
    }
    </style>

    <?php 
    for ($number = 1; $number <= 16; $number++) {
      if    ($number%3 == 0 && $number%5 == 0 ){
        echo "<div class='box p4'>" . "fizzbuzz" . "</div>";
      }
      elseif($number%3 == 0){
        echo "<div class='box p3'>" . "fizz"     . "</div>";
      }
      elseif($number%5 == 0){
        echo "<div class='box p2'>" . "buzz"     . "</div>";
      }
      else{
        echo "<div class='box p1'>" . $number    . "</div>";
      }
    } 
    ?>



  </body>
</html>
