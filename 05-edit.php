<html>
<head>
  <title>Test</title>
</head>
<body>

  <form enctype="multipart/form-data" action="./05-edit.php" method="POST">
    name: <input type="text" name="name"><br>
    <br>
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
    image: <input name="image" type="file" /><br>
    <br>
    <p><input type="submit" name="save" value="Submit" /><p>
  </form>

<?php

if (!empty($_POST))
{
    // binary data
    $fp = fopen($_FILES["image"]["tmp_name"], "rb");
    $imgdat = fread($fp, filesize($_FILES["image"]["tmp_name"]));

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

    $sql = "INSERT INTO tb1 (id, name, image) VALUES (:id, :name, :image)";
    $stmt = $db->prepare($sql);
    $params = array(':id' => '', ':name' => $_POST['name'], ':image' => $imgdat);
    $stmt->execute($params);

}
?>

</body>
</html>
