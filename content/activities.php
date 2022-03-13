<?php

//phpinfo();

$host = 'db'; //Nom donné dans le docker-compose.yml
$user = 'myuser'; // user et pwd du docker compose
$password = 'monpassword';
$db = 'tutoseu';
$conn = new mysqli($host,$user,$password,$db);
if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
else{
        //echo "Connexion à mySQL ok<br />";
        
        $results = $conn->query("SELECT * FROM `Activitie`");  
}

//mysqli_close($conn);

?>


<div class="container">
    <h1>Activity List</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Cout</th>
          <th scope="col">Prix</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $result) :?>
          <tr>
            <th scope="col"><?= $result["name"] ?></th>
            <th scope="col"><?= $result["cout"] ?></th>
            <th scope="col"><?= $result["prix"] ?></th>
          </tr>
        <?php endforeach ; ?>
      </tbody>
    </table>
  </div>


  <div class="container">
    <select class="form-select" aria-label="Default select example">
      <?php foreach($results as $result) : ?>
        <option value="<?= $result["name"] ?>"><?= $result["name"] ?></option>
      <?php endforeach;  ?>
    </select>
  </div>