<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Formulario 5</title>
  </head>
  <body>
  <div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
        <h3>Ejercicio 4 version 2</h3>
            <hr>
            <div class="row justify-content-center">
    <div class="col-6 p-5 bg-white shadow-lg rounded">
    <h6></h6>
<form method="post" action="ejercicio5.php">
    <div class="form-group">
        <label for="enlace">Enlace de pagina</label>
        <input id="enlace" class="form-control" type="text" name="enlace">

    </div>
    
    <br>
        <div class="form-group">
  <button class="btn btn-secondary" type="submit">Enviar</button>
  </div>

        </div>
    </div>
    <hr>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>