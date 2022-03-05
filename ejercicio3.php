<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Recibe resultado</title>
</head>
<body>

<div class="container"><br/>
<h1>Resultado</h1>

<hr>
<?php 
$mensaje=$_POST['mensaje'];

if ( $mensaje == "Hola" ) {
    echo "Muy buenas, usuario bien benido";
    }elseif( $mensaje == "Adios" ) {
       echo "Hasta pronto";
    }else{
       echo "No se  reconoce el textro introducido lo siento";
    }
 
 ?>

<hr>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>