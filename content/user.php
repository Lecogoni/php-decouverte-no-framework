<?php 

  $host = 'db'; //Nom donné dans le docker-compose.yml
  $user = 'myuser'; // user et pwd du docker compose
  $password = 'monpassword';
  $db = 'tutoseu';

  try {
    $dbh = new PDO('mysql:host=db;dbname=tutoseu', $user, $password);

  } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }

  $sql =  'SELECT * FROM User';
  foreach  ($dbh->query($sql) as $row) {
      print $row['Name'] . "<br />\n";
  }
?>


