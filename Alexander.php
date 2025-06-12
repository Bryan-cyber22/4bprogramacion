<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$servername = "localhost";
$username = "root";
$password = "";
$database = "badlcm";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $precio = $conexion->real_escape_string($_POST["precio"]);
    $id_categoria = $conexion->real_escape_string($_POST["categoria"]);
    $id_colores = $conexion->real_escape_string($_POST["colores"]);

    $sql = "INSERT INTO productos (nombre, precio, id_categoria, id_colores) 
            VALUES ('$nombre', '$precio', '$id_categoria', '$id_colores')";

    if ($conexion->query($sql) === TRUE) {
        echo "<p style='color:green;'>Producto agregado con éxito.</p>";
    } else {
        echo "<p style='color:red;'>ERROR: " . $conexion->error . "</p>";
    }
}

$sql_categorias = "SELECT * FROM categorias";
$result_categorias = $conexion->query($sql_categorias);

$sql_colores = "SELECT * FROM colores";
$result_colores = $conexion->query($sql_colores);
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
<body><style>
body {
    background: #f4f6fa;
    font-family: 'Segoe UI', Arial, sans-serif;
    margin: 0;
    padding: 0;
}
h2 {
    color: #04362a;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 20px;
    letter-spacing: 2px;
}
form {
    background: #fff;
    max-width: 400px;
    margin: 0 auto 30px auto;
    padding: 30px 30px 20px 30px;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
}
form label {
    display: block;
    margin-bottom: 6px;
    color: #04362a;
    font-weight: bold;
}
form input[type="text"], form select {
    width: 100%;
    padding: 8px 10px;
    margin-bottom: 18px;
    border: 1px solid #b0bfc7;
    border-radius: 6px;
    font-size: 1em;
    background: #f9f9fa;
    color: #04362a;
}
form input[type="submit"] {
    background: #04362a;
    color: #fff;
    border: none;
    padding: 10px 0;
    width: 100%;
    border-radius: 6px;
    font-size: 1.1em;
    cursor: pointer;
    transition: background 0.2s;
}
form input[type="submit"]:hover {
    background: #669BBC;
}
table {
    width: 90%;
    margin: 0 auto 40px auto;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
    border-radius: 10px;
    overflow: hidden;
}
table th, table td {
    padding: 12px 16px;
    text-align: center;
}
table th {
    background: #04362a;
    color: #fff;
    font-weight: bold;
    letter-spacing: 1px;
}
table tr:nth-child(even) {
    background: #f4f6fa;
}
table tr:hover {
    background: #e6f0f7;
}
nav.navbar {
    margin-bottom: 30px;
    border-radius: 0 0 10px 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
</style>

    <h2>Registrar Productos</h2>
    <form method="POST">
        <label>Nombre de Producto:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Precio:</label>
        <input type="text" name="precio" required><br><br>

        <label>Categoría:</label>
        <select name="categoria" required>
            <option value="">Seleccione una categoría</option>
            <?php
            if ($result_categorias->num_rows > 0) {
                while ($row = $result_categorias->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                }
            }
            ?>
        </select><br><br>

        <label>Colores:</label>
        <select name="colores" required>
            <option value="">Seleccione un color</option>
            <?php
            if ($result_colores->num_rows > 0) {
                while ($row = $result_colores->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre_color"] . "</option>";
                }
            }
            ?>
        </select><br><br>

        <input type="submit" value="Agregar Producto">
    </form>

    <h2>Lista de Productos</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Colores</th>
        </tr>
        <?php
        $sql_productos = "SELECT productos.nombre, productos.precio, 
                                 categorias.nombre AS categoria, 
                                 nombre_color AS colores 
                          FROM productos
                          JOIN categorias ON productos.id_categoria = categorias.id
                          JOIN colores ON productos.id_colores = colores.id";

        $result_productos = $conexion->query($sql_productos);

        if ($result_productos->num_rows > 0) {
            while ($row = $result_productos->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nombre']}</td>
                        <td>{$row['precio']}</td>
                        <td>{$row['categoria']}</td>
                        <td>{$row['colores']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>NO HAY PRODUCTOS REGISTRADOS</td></tr>";
        }
        ?>
    </table>
</body>
</html>