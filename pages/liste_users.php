<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guypi | Informations</title>
  <style>
    <?php 
      include("../css/global.php"); 
    ?>
  </style> 
</head>
<body>
  <nav class="navbar">
    <ul>
      <li><a href="/index.php" class="nav_title">GUYPI</a></li>
      <li><a href="/pages/register.php">ENREGISTRER</a></li>
      <li><a href="/pages/info.php">GESTION</a></li>
    </ul>
  </nav>

  <main class="main">
    <h1>Utilisateurs</h1>
    <?php
      echo "<table style='border: solid 1px black;'>";
      echo "<tr><th>Noms</th><th>Prénoms</th><th>Matricules</th><th>Identifiant RFID</th><th>Résidence</th><th>Numéro de chambre</th><th>Date d'enregistrement</th></tr>";
      class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
          parent::__construct($it, self::LEAVES_ONLY);
        }
      
        function current() {
          return "<td>" . parent::current(). "</td>";
        }
      
        function beginChildren() {
          echo "<tr>";
        }
      
        function endChildren() {
          echo "</tr>" . "\n";
        }
      }

      $servername = "localhost";
      $username = "michee";
      $database = "guypi";
      $password = "@Jesus4Life";

      try {
        $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $connection->prepare("SELECT lastname, firstname, mat, cardId, residence, roomNum, createdAt FROM users ORDER BY createdAt DESC");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
          echo $v;
        }
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      $connection = null;
      echo "</table>";
    ?>
  </main>
</body>
</html>