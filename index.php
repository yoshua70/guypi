<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guypi</title>
  <style>
    <?php 
      include("./css/global.php"); 
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
    <h1>Bienvenue sur le programme de gestion de la Guypi</h1>
    
    <a href="/pages/register.php">
      <button>Enregistrer une nouvelle carte -></button>
    </a>

    <a href="/pages/info.php">
      <button>Consulter les données -></button>
    </a>
  </main>
</body>
</html>