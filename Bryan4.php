<tbody?php
ob_start(); // iniciar buffer de salida
?>
<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/atomic-kittens" rel="stylesheet"></nav>
    <title>Brayan Alexander</title> </head><body> 
<nav class="navbar navbar-light" style="background-color: black;">
  <div class="container">
    <a class="navbar-brand" href="index.html" style="color:white;">INICIO</a>
  <div class="collaspe navbar-collaspe" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" style="color: white;">unidad 1</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan1.php/index.html">practica1</a><br>
          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan2.php/index.html">practica2</a><br>
          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan3.php/index.html">practica3</a></div></li></ul>
    <ul class="nav navbar-nav">
    <li class="nav-item dropdown">
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
                    <ul class="nav navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="color: white;">unidad 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan7.html">practica7</a><br>
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan8.html">practica8</a><br>
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan9.html">practica9</a><br></li></ul></div></div></div></nav></div></div></div></nav></body>
<style>
  form {
    display: flex;
    flex-direction: column;
  }

  label {
    font-size: 16px;
    margin-bottom: 5px;
  }

  input[type="text"] {
    padding: 8px;
    margin-bottom: 10px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    background-color: #44475a;
    color: #fff;
  }

  input[type="submit"] {
    padding: 8px;
    margin-bottom: 10px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    background-color: #fa7b;
    color: #282a36;
    cursor: pointer;
    transition: background 0.3s;
  }

  input[type="submit"]:hover {
    background-color: #3ae374;
  }

  .success {
    color: green;
    text-align: center;
    font-weight: bold;
  }

  .error {
    color: red;
    text-align: center;
    font-weight: bold;
  }

  .card {
    max-width: 18rem;
    margin-top: 20px;
  }

  .navbar-brand {
    font-family: 'Kill your darlings', sans-serif;
    font-family: 'Kill your darlings AC', sans-serif;
    font-size: 24px;
  }
</style>


<div class="container">
    <class="jumbotron">
    <h1 class="display-4"  style="text-align: center; color: black;font-family: 'Atomic Kittens', sans-serif;">PÁGINA-PARA-MOSTRAR-DATOS</h1> 
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Numero de control</th>
      <th>Nombre</th>
      <th>Apellido paterno</th>
      <th>Apellido materno</th>
      <th>Edad</th>
      <th>Colonia</th>
      <th>Especialidad</th>
      <th>Genero</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>Fecha de ingreso</th>
    </tr>
  </thead>
  <tbody>

  <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$username = "root";
$password = "";
$servername = "localhost";
$database = "cetis131";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Consulta corregida para mostrar los valores en lugar de los IDs
$sql = "SELECT 
            a.numero_control,
            a.nombre,
            a.apellido_paterno,
            a.apellido_materno,
            e.edad AS edades,          -- Mostrar la edad real
            c.colonia AS colonia,            -- Mostrar el nombre de la colonia
            es.especialidad AS especialidad,      -- Mostrar la especialidad
            g.genero AS genero,        -- Mostrar el género
            a.correo,
            a.telefono,
            a.fecha_ingreso
        FROM alumnos a
        JOIN edades e ON a.edad = e.id
        JOIN colonia c ON a.colonia = c.id
        JOIN especialidad es ON a.especialidad = es.id
        JOIN genero g ON a.genero = g.id";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
                  <td>{$row['numero_control']}</td>
                  <td>{$row['nombre']}</td>
                  <td>{$row['apellido_paterno']}</td>
                  <td>{$row['apellido_materno']}</td>
                  <td>{$row['edades']}</td>
                  <td>{$row['colonia']}</td>
                  <td>{$row['especialidad']}</td>
                  <td>{$row['genero']}</td>
                  <td>{$row['correo']}</td>
                  <td>{$row['telefono']}</td>
                  <td>{$row['fecha_ingreso']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='11'>No se encontraron registros.</td></tr>";
}

$conexion->close();
?>

          </tbody>
          </table>
          </div>

</body>
</html>
