<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guypi | Enregistrement</title>
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
  <main>
    <h1>Enregistrer une nouvelle carte</h1>
    
    <form action="/controllers/signup.php" method="POST">
      <label for="lastname">Nom :</label>
      <input type="text" name="lastname"/>
      <label for="firstname">Prénoms :</label>
      <input type="text" name="firstname"/>
      <label for="mat">Matricule :</label>
      <input type="text" name="mat"/>
      <label for="cardId">Identifiant carte :</label>
      <input type="number" name="cardId"/>
      <label for="residence">Résidence :</label>
      <div class="select">
        <select name="residence" size="1">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
          <option value="H">H</option>
          <option value="I">I</option>
          <option value="J">J</option>
          <option value="K">K</option>
          <option value="L">L</option>
          <option value="M">M</option>
          <option value="N">N</option>
          <option value="P">P</option>
          <option value="R">R</option>
          <option value="T">T</option>
          <span class="focus"></span>
        </select>
      </div>
      <label for="roomNum">Numéro de chambre :</label>
      <input type="number" name="roomNum" min="1" max="96"/>
      
      <button class="btn-blue">
        <input type="submit" value="Enregistrer"/> 
      </button>   
    </form>

  </main>

</body>
</html>