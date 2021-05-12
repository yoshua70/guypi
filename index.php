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
  <nav class="navbar navbar-light bg-light nav-pills">
    <a class="nav-link" href="/index.php">
      <h1>
        Guypi
      </h1>
    </a>
    <section class="section">
      <a class="nav-link" href="./pages/info.php">
        <button type="button" class="btn btn-warning">
          Informations
        </button>
      </a>
      <a class="nav-link" id="nav-register-link" href="./pages/register.php">
        <button type="button" class="btn btn-primary">
          Enregistrer
        </button>
      </a>
    </section>
  </nav>

  <main class="main">
    <h1>Bienvenue sur le programme de gestion de la Guypi</h1>
  </main>
  
</body>
</html>