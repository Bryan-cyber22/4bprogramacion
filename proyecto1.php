<?php
$conexion = new mysqli("localhost", "root", "", "futbol");
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}
function insertarJugador($conexion)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $campos = ["nombre", "apodo", "dorsal", "edad", "posicion", "Equipos_Jugados", "Campeonatos", "nacionalidad", "liga_actual"];
        foreach ($campos as $campo) {
            if (empty($_POST[$campo])) {
                echo "<p class='error'>Error: El campo '$campo' es obligatorio.</p>";
                return;
            }
        }

        $nombre = $conexion->real_escape_string($_POST["nombre"]);
        $apodo = $conexion->real_escape_string($_POST["apodo"]);
        $dorsal = $conexion->real_escape_string($_POST["dorsal"]);
        $edad = $conexion->real_escape_string($_POST["edad"]);
        $posicion = $conexion->real_escape_string($_POST["posicion"]);
        $equipos = $conexion->real_escape_string($_POST["Equipos_Jugados"]);
        $campeonatos = $conexion->real_escape_string($_POST["Campeonatos"]);
        $nacionalidad = $conexion->real_escape_string($_POST["nacionalidad"]);
        $ligaActual = $conexion->real_escape_string($_POST["liga_actual"]);

        // Verificar si ya existe un jugador con el mismo nombre
        $check = $conexion->query("SELECT * FROM jugadores WHERE nombre = '$nombre'");
        if ($check->num_rows > 0) {
            echo "<p class='error'>Ya existe un jugador con ese nombre.</p>";
            return;
        }

        $sql_insert = "INSERT INTO jugadores (nombre, apodo, dorsal, edad, posicion, Equipos_Jugados, Campeonatos, nacionalidad, liga_actual) 
                       VALUES ('$nombre', '$apodo', '$dorsal', '$edad', '$posicion', '$equipos', '$campeonatos', '$nacionalidad', '$ligaActual')";

        if ($conexion->query($sql_insert) === TRUE) {
            echo "<p class='success'>Jugador agregado correctamente.</p>";
        } else {
            echo "<p class='error'>Error al agregar jugador: " . $conexion->error . "</p>";
        }
    }
}
insertarJugador($conexion);

// Consultas para selects
$result_edad = $conexion->query("SELECT id, edad FROM edad");
$result_posicion = $conexion->query("SELECT id, posicion FROM posicion");
$result_nacionalidad = $conexion->query("SELECT id, nacionalidad FROM nacionalidad");
$result_ligas = $conexion->query("SELECT id, liga_actual FROM liga_actual");
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
    <meta charset="UTF-8">
    <title>Registro de Jugadores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href="https://fonts.cdnfonts.com/css/atomic-kittens" rel="stylesheet">

<style>
html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: url('https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Arial Black', sans-serif;
            color: #f4f4f4;
        }

body::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.75);
    z-index: -1;
}

.navbar {
    background-color: #A50044;
    border: none;
    padding: 15px;
}

.navbar a {
    color: #FFD700 !important;
    font-weight: bold;
    font-size: 20px;
    text-decoration: none;
}

.jumbotron {
    background-color: transparent;
    text-align: center;
    padding: 40px;
}

h1.display-4 {
    font-size: 42px;
    font-weight: bold;
    color: #004D98;
    text-shadow: 2px 2px 5px black;
}

.container {
    background-color: rgba(20, 20, 20, 0.9);
    padding: 35px;
    border-radius: 15px;
    margin: 30px auto;
    max-width: 960px;
    box-shadow: 0 0 15px rgba(0,0,0,0.9);
}

h2 {
    color: #FFD700;
    border-bottom: 2px solid #A50044;
    padding-bottom: 8px;
}

label {
    font-weight: bold;
    color: #ffffff;
}

input[type="text"], select {
    width: 100%;
    max-width: 500px;
    padding: 10px;
    margin-bottom: 15px;
    background-color: #1d1d1d;
    border: 1px solid #FFD700;
    border-radius: 5px;
    color: white;
}

input[type="submit"] {
    background-color: #A50044;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #7a003c;
}

table {
    width: 100%;
    margin-top: 25px;
    border-collapse: collapse;
    background-color: #002147;
    color: #ffffff;
}

th {
    background-color: #A50044;
    color: white;
    padding: 12px;
    font-size: 16px;
}

td {
    padding: 10px;
    border: 1px solid #444;
    text-align: center;
}

.success {
    color: #00ff7f;
    font-weight: bold;
}

.error {
    color: #ff4d4d;
    font-weight: bold;
}
</style>
</nav>

<div class="jumbotron">
    <h1 class="display-4">PÁGINA AÑADIR JUGADORES</h1>
</div>

<div class="container">
    <h2>Registrar Jugador</h2>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Apodo:</label>
        <input type="text" name="apodo" required><br>

        <label>Dorsal:</label>
        <input type="text" name="dorsal" required><br>

        <label>Edad:</label>
        <select name="edad" required>
            <option value="">Seleccione una edad</option>
            <?php while ($row = $result_edad->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['edad']}</option>";
            } ?>
        </select><br>

        <label>Posición:</label>
        <select name="posicion" required>
            <option value="">Seleccione una posición</option>
            <?php while ($row = $result_posicion->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['posicion']}</option>";
            } ?>
        </select><br>

        <label>Nacionalidad:</label>
        <select name="nacionalidad" required>
            <option value="">Seleccione nacionalidad</option>
            <?php while ($row = $result_nacionalidad->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nacionalidad']}</option>";
            } ?>
        </select><br>

        <label>Liga Actual:</label>
        <select name="liga_actual" required>
            <option value="">Seleccione liga</option>
            <?php while ($row = $result_ligas->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['liga_actual']}</option>";
            } ?>
        </select><br>
        
        <label>Equipos Jugados:</label>
        <input type="text" name="Equipos_Jugados" required><br>

        <label>Nombre de los campeonatos obtenidos:</label>
        <input type="text" name="Campeonatos" required><br>


        <input type="submit" value="Agregar Jugador">
    </form>

    <h2>Lista de Jugadores</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apodo</th>
            <th>Dorsal</th>
            <th>Edad</th>
            <th>Posición</th>
            <th>Equipos Jugados</th>
            <th>Campeonatos</th>
            <th>Nacionalidad</th>
            <th>Liga Actual</th>
        </tr>
        <?php
        $sql = "SELECT j.nombre, j.apodo, j.dorsal, e.edad, p.posicion, j.Equipos_Jugados, j.Campeonatos,
        n.nacionalidad, l.liga_actual
             FROM jugadores j
             JOIN edad e ON j.edad = e.id
             JOIN posicion p ON j.posicion = p.id
             JOIN nacionalidad n ON j.nacionalidad = n.id
             JOIN liga_actual l ON j.liga_actual = l.id";


        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nombre']}</td>
                        <td>{$row['apodo']}</td>
                        <td>{$row['dorsal']}</td>
                        <td>{$row['edad']}</td>
                        <td>{$row['posicion']}</td>
                        <td>{$row['Equipos_Jugados']}</td>
                        <td>{$row['Campeonatos']}</td>
                        <td>{$row['nacionalidad']}</td>
                        <td>{$row['liga_actual']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No hay jugadores registrados.</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
