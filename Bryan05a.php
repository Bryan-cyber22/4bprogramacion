<?php
         $username = "root";
         $password = "";
         $servername = "localhost";
         $database = "cetis131";
                  $conexion = new mysqli("localhost", "root", "", "cetis131");
                  if($conexion->connect_error){
                    die("La conexion fallo: " . $conexion->connect_error);
                  }

                  $sql_edad = "SELECT id, edad FROM edades";
                  $result_edad = $conexion->query($sql_edad);

                  $sql_colonia = "SELECT id, colonia FROM colonia";
                  $result_colonia = $conexion->query($sql_colonia);

                  $sql_especialidad = "SELECT id, especialidad FROM especialidad";
                  $result_especialidad = $conexion->query($sql_especialidad);

                  $sql_genero = "SELECT id, genero FROM genero";
                  $result_genero = $conexion->query($sql_genero);


                  function InsertarAlumno($conexion)
                  {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      // Validar que los campos no estén vacíos
                      $campos_requeridos = ["numero_control", "nombre", "apellido_paterno", "apellido_materno", "edad", "colonia", "especialidad", "genero", "correo", "telefono", "fecha_ingreso"];
                      foreach ($campos_requeridos as $campo) {
                          if (empty($_POST[$campo])) {
                              echo "<p class='error'>Error: El campo $campo es obligatorio.</p>";
                              return;
                          }
                        }
                      }
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        var_dump($_POST);
                       $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
                       $nombre = $conexion->real_escape_string($_POST["nombre"]);
                       $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
                       $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
                       $edad = $conexion->real_escape_string($_POST["edad"]);
                       $colonia = $conexion->real_escape_string($_POST["colonia"]);
                       $especialidad = $conexion->real_escape_string($_POST["especialidad"]);
                       $genero = $conexion->real_escape_string($_POST["genero"]);
                       $correo = $conexion->real_escape_string($_POST["correo"]);
                       $telefono = $conexion->real_escape_string($_POST["telefono"]);
                       $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);
     
                      $sql_insert = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso) VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";
                      if ($conexion-> query($sql_insert) === TRUE) {
                          echo "<p class='success'>Nuevo alumno agregado correctamente.</p>";
                          header("location: " . $_SERVER['PHP_SELF']);
                          exit();
                      }else {
                          echo "<p class='error'>Error al agregar el alumno: " . $conexion->error . "</p>";
                      }
                   
                                        }             
                   }
                  InsertarAlumno($conexion);

                  ?><?php
                  ob_start(); // iniciar buffer de salida
                  ?>
                  
                  <!DOCTYPE html>
                  <html lang="en">
                  <head>
                      <meta charset="UTF-8">
                      <meta http-equiv="X-UA-Compatible" content="IE=edge">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
                      <link href="https://fonts.cdnfonts.com/css/atomic-kittens" rel="stylesheet">             
                        <!-- Navbar content -->
                      </nav>
                      <title>Brayan Alexander</title> 
                  </head>
                  <body> 
                  
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
          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan3.php/index.html">practica3</a>
        </div>
      </li>
    </ul>
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
                  <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/personajes.php/index.html">Personajes</a><br>
                  
              </li>
            </ul>
                    <ul class="nav navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="color: white;">unidad 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan7.html">practica7</a><br>
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan8.html">practica8</a><br>
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan9.html">practica9</a><br>
                        </li>
                        </ul>
                        </div>
                        </div>
                      </div>
                      </nav>
                                          </div>
                                          </div>
                                        </div>
                                        </nav>

    <style>
    .container {
      font-family: 'Rialto NF', sans-serif;
                                                  
      justify-content: center;
      align-items: center;
      width: 50%;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
  
    h1, h2 {
      font-family: 'Rialto NF', sans-serif;
                                                  
      text-align: center;
      color: red;
      margin-bottom: 15px;
    }
  
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
      font-family: 'Datalegreya', sans-serif;
      font-size: 24px;
    }
  </style>
</body>
                  
                  
<div class="jumbotron">
<h1 class="display-4"  style="text-align: center; color: black;font-family: 'Atomic Kittens', sans-serif;">PÁGINA-AÑADIR-DATOS</h1> 
<div class="container">
    <h2>Registrar Alumno</h2>
    <form method="POST">
    <label>Número de Control:</label>
    <input type="text" name="numero_control" required><br>

    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label>Apellido Paterno:</label>
    <input type="text" name="apellido_paterno" required><br>

    <label>Apellido Materno:</label>
    <input type="text" name="apellido_materno" required><br>

    <label>Edad:</label>
    <select name="edad" required>
        <option value="">seleccione una edad</option>
        <?php while($row = $result_edad->fetch_assoc()){
            echo "<option value='" . $row["id"] . "'>" . $row["edad"] . "</option>";
        } ?>
    </select><br>

    <label>Colonia:</label>
    <select name="colonia" required>
        <option value="">seleccione una colonia</option>
        <?php while($row = $result_colonia->fetch_assoc()){
            echo "<option value='" . $row["id"] . "'>" . $row["colonia"] . "</option>";
        } ?>
    </select><br>

    <label>Especialidad:</label>
    <select name="especialidad" required>
        <option value="">seleccione una especialidad</option>
        <?php while($row = $result_especialidad->fetch_assoc()){
            echo "<option value='" . $row["id"] . "'>" . $row["especialidad"] . "</option>";
        } ?>
    </select><br>

    <label>Género:</label>
    <select name="genero" required>
        <option value="">seleccione un genero</option>
        <?php while($row = $result_genero->fetch_assoc()){
            echo "<option value='" . $row["id"] . "'>" . $row["genero"] . "</option>";
        } ?>
    </select><br>

    <label>Correo:</label>
    <input type="email" name="correo" required><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required><br>

    <label>Fecha de Ingreso:</label>
    <input type="date" name="fecha_ingreso" required><br>

    <input type="submit" value="Agregar Alumno">
</form>
    </method>
    </div>
<h2>Lista de alumnos</h2>
<table border="1">
  <tr>
    <th>Numero de control</th>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Edad</th>
    <th>Colonia</th>
    <th>Especialidad</th>
    <th>Genero</th>
    <th>Correo</th>
    <th>Telefono</th>
    <th>Fecha de ingreso</th>
  </tr>
  <?php
 $sql_alumnos = "SELECT * FROM alumnos";
 $resultado = $conexion->query($sql_alumnos);
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
                if($resultado->num_rows >0){
                  while ($row = $resultado -> fetch_assoc()){
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
            
?>
</table>
</body>
</html>