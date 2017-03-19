<html>
<head>
  <title>Test</title>
</head>
<body>
<?php
  $servername = getenv('IP');
  $username = getenv('C9_USER');
  $password = "";
  $database = "c9";
  $dbport = 3306;
  // Create connection
  $db = new mysqli($servername, $username, $password, $database, $dbport);
  // if find connect error..
  if ($db->connect_error) {
    echo $db->connect_error;
    exit();
  }
  // select db
  $db-> select_db('db01');
  // font code
  // This line is most important for khmer geek
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  $db->set_charset("utf8");
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // query
  $query = "SELECT * FROM tb1"; 
  $result = $db -> query($query);
  while ($row = $result -> fetch_assoc()) {
    echo $row['id'];
    echo $row['name'];
    echo $row['image'];
    echo "<br>";
  }
  $result->free();
  $db->close();
?>
</body>
</html>