<?php
ob_start(); // iniciar buffer de salida
?>
<!DOCTYPE html>
<html lang="en"> <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/atomic-kittens" rel="stylesheet">             
    </nav>
    <title>Brayan Alexander</title> </head><body> 
<nav class="navbar navbar-light" style="background-color: black;">
  <div class="container">
    <a class="navbar-brand" href="index.html" style="color:white;">INICIO</a>
  <div class="collaspe navbar-collaspe" id="navbarNavDropdown"><ul class="nav navbar-nav"><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" style="color: white;">unidad 1</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan1.php/index.html">practica1</a><br>
          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan2.php/index.html">practica2</a><br>
          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan3.php/index.html">practica3</a></div></li></ul> <ul class="nav navbar-nav"> <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" style="color: white;">unidad 2</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan4.php/index.html">practica4</a><br>
                  <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Alexander.php/index.html">Practica de tienda</a><br>
                  <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan5.php/index.html">practica5</a><br>
                  <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan05a.php/index.html">Practica 5a</a><br>
                  <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan6.html">Pokemon</a><br>
                  <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/proyecto1.php/index.html">Proyecto Primavera</a><br>
                  <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/personajes.php/index.html">Personajes</a><br></li></ul>
                    <ul class="nav navbar-nav"><li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="color: white;">unidad 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan7.html">practica7</a><br>
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan8.html">practica8</a><br>
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan9.html">practica9</a><br></li></ul></div></div></div></nav></div></div></div></nav>
<div class="container">
    <div class="jumbotron">
    <h1 class="display-4"  style="text-align: center; color: black;font-family: 'Atomic Kittens', sans-serif;">PÁGINA-AÑADIR-DATOS</h1> 
        <h2 style="text-align: center;">La tabla de balones</h2>

        <form action="" method="post" id="formulario">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="tamano">Tamaño:</label>
                <input type="text" class="form-control" id="tamano" name="tamano" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar al Registro</button>
        </form>
        <br>
         
        <style>
          .container {
            width: 60%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px; rgba(0,0,0,0.2);
          }
          
          h1,h2{
            text-align: center;
            color:rgb(22, 20, 21);
            margin-bottom: 15px;
            font-family: 'diablo', sans-serif;
          }

          form{
            display: flex;
            flex-direction: column;
          }
          label{
            font-size: 16px;
            margin-bottom: ;
          }
        </style>



        <?php
            $conexion = new mysqli("localhost", "root", "", "messi");

            if ($conexion->connect_error) {
                die("<div class='alert alert-danger'>La conexión falló: " . $conexion->connect_error . "</div>");
            }

            function insertarbalones($conexion) {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  var_dump($_POST);
                $id = $conexion->real_escape_string($_POST["id"]);
                $marca = $conexion->real_escape_string($_POST["marca"]);
                $tamano = $conexion->real_escape_string($_POST["tamano"]);
                $cantidad = $conexion->real_escape_string($_POST["cantidad"]);
                $descripcion = $conexion->real_escape_string($_POST["descripcion"]);

                $sql = "INSERT INTO balones (id, marca, tamano, cantidad, descripcion) VALUES ('$id', '$marca', '$tamano', '$cantidad', '$descripcion')";
                
                if ($conexion->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>¡Nuevo balón agregado correctamente!</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error al agregar el balón: " . $conexion->error . "</div>";
                }
            }
          }

            $sql = "SELECT * FROM balones";
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                echo "<table class='table table-bordered'>";
                echo "<tr><th>ID</th><th>Marca</th><th>Tamaño</th><th>Cantidad</th><th>Descripción</th></tr>";
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr><td>" . htmlspecialchars($row["id"]) . "</td><td>" . htmlspecialchars($row["marca"]) . "</td><td>" . htmlspecialchars($row["tamaño"]) . "</td><td>" . htmlspecialchars($row["cantidad"]) . "</td><td>" . htmlspecialchars($row["descripción"]) . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<div class='alert alert-warning'>No se encontraron registros en la base de datos.</div>";
            }

            $conexion->close();
        ?>
    </div>
</div>

</body>
</html>
