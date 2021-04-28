<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
          Info
        </button>
      </a>
      <a class="nav-link" id="nav-register-link" href="./pages/register.php">
        <button type="button" class="btn btn-primary">
          Register
        </button>
      </a>
    </section>
  </nav>

  <main class="main">
    <h1>Welcome !</h1>
  </main>
  
</body>
</html>