<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Guypi | Enregistrement</title>
  <style>
    <?php 
      include("../css/global.php"); 
    ?>
  </style>

  <script type="text/javascript">
  function validate()
  {
  var error="";
  var lastName = document.getElementById( "labelNom" );
  if( lastName.value == "" )
  {
    error = "Veuillez fournir un nom.";
    document.getElementById( "error_para_nom" ).innerHTML = error;
    return false;
  }

  var firstName = document.getElementById( "labelPrenom" );
  if( firstName.value == "" )
  {
    error = " Veuillez fournir un prénom. ";
    document.getElementById( "error_para_prenom" ).innerHTML = error;
    return false;
  }

  var userId = document.getElementById( "labelID" );
  if( userId.value == "" )
  {
    error = " Veuillez fournir un ID RFID ";
    document.getElementById( "error_para_id" ).innerHTML = error;
    return false;
  }

  else
  {
    return true;
  }
  }

  </script>
</head>
<body>
  <?php
  require_once("../config/config.php");

  $rfid_id_err = "";

  if (!empty($_POST["nom"]) AND !empty($_POST["prenom"]) AND !empty($_POST["rfid_id"])) {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $rfid_id = $_POST["rfid_id"];

    $result = $connection->query("SELECT * FROM users WHERE rfid_id = $rfid_id");
    $result->execute();
    $row = $result->fetch(PDO::FETCH_ASSOC);

    if ( $row ) {
      $rfid_id_err = "L'identifiant rfid existe déjà!";
    } else {
      $sql = "INSERT INTO users (name, fname, rfid_id) VALUES ('$nom', '$prenom', '$rfid_id')";

      $connection->exec($sql);
    }
  }
  ?>
  <nav class="navbar navbar-light bg-light nav-pills">
    <a class="nav-link" href="/index.php">
      <h1>
        Guypi
      </h1>
    </a>
    <section class="section">
      <a class="nav-link" href="./info.php">
        <button type="button" class="btn btn-warning">
          Informations
        </button>
      </a>
      <a class="nav-link" id="nav-register-link" href="./register.php">
        <button type="button" class="btn btn-primary">
          Enregistrer
        </button>
      </a>
    </section>
  </nav>
  <main class="main">
    <h1>Enregistrement</h1>

    <form action="./register.php" method="post" onsubmit="return validate();">
      <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" id="labelNom">
        <em><p id="error_para_nom" class="lead" ></p></em>
      </div>
      <div class="mb-3">
        <label class="form-label">Prénoms</label>
        <input type="text" name="prenom" class="form-control" id="labelPrenom">
        <em><p id="error_para_prenom" class="lead" ></p></em>
      </div>
      <div class="mb-3">
        <label class="form-label">RFID ID</label>
        <input type="text" name="rfid_id" class="form-control" id="labelID">
        <em><p id="error_para_id" class="lead" ></p></em>
        <?php echo $rfid_id_err ?>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </main>
</body>
</html>