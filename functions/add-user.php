<?php

var_dump($_POST);

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

$sql = "INSERT INTO User (Name, Adresse, Age) VALUES (?,?,?)";
$stmt= $dbh->prepare($sql);
$stmt->execute([$_POST['name'], $_POST['address'], $_POST['age']]);

header('Location: http://0.0.0.0:90/');

?>