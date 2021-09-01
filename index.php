<?php

if($_POST){

    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

if ($usuario != "" && $clave != "") {
    header("location: acceso_confirmado.php");
} else {
    echo "Unicamente para usuarios registrados";
    exit;
}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    
    <div class="container shadow">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Iniciar sesión</h1>
            </div>
        </div>
        <form method="POST" action="">
            <div class="row">
                <div class="col-4">
                    <label for="">Usuario:</label>
                    <input type="text" name="txtUsuario" id="txtUsuario">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-4">
                    <label for="">Clave:</label>
                    <input type="password" name="txtClave" id="txtClave">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary py-2">Enviar</button>
            </div>
        </form>
</body>
</html>