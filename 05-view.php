<html>
<head>
  <title>Test</title>
</head>
<body>

<?php

  // connect to DB
  $hostname = getenv('IP');
  $username = getenv('C9_USER');
  $password = "";
  $database = "c9";
  $dbport   = 3306;
  $dsn      = "mysql:host=$hostname;port=$dbport;dbname=$database;charset=utf8";

  try{ 
    $db = new PDO($dsn, $username, $password); 
  } catch (PDOException $e) { 
    print('Error:'.$e->getMessage());
    die(); 
  }

  $db->query("use db01");


  $sql = "SELECT * FROM tb1";
  $stmt = $db->query($sql);
 
  foreach ($stmt as $row) {
    echo $row['name'];
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>';
  }

?>

</body>
</html>
