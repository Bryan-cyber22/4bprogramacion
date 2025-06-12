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
    <link href="https://fonts.cdnfonts.com/css/atomic-kittens" rel="stylesheet">             </nav>
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
                          <a class="dropdown-item" href="http://localhost/Messi/Grupo4BProg/Bryan9.html">practica9</a><br></li></ul></div></div></div></nav></div></div>
</div>
<div class="jumbotron">   
<h1 class="display-4"  style="text-align: center; color: black;font-family: 'Atomic Kittens', sans-serif;">PAGINA PARA MOSTRAR DATOS</h1>   
<?php
         $username = "root";
         $password = "";
         $servername = "localhost";
         $database = "messi";
                  $conexion = new mysqli("localhost", "root", "", "messi");
                  if($conexion->connect_error){
                    die("La conexion fallo: " . $conexion->connect_error);
                  }
                  $sql = "SELECT * FROM uniformes";
                  $resultado = $conexion->query($sql);
  ?>
  <style>
         h2 {
            color:rgb(26, 28, 29);
            text-align: center;
            margin-bottom: 20px;
        }table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 50px;
          border: 5px solid black;
          background-color: #00CEd1;
        }th, td {
          padding: 10px;
          text-align; left;
          border-bottom: 2px solid rgb(2, 22, 22);
        }tr:nth-child(even) {
          background-color:rgb(0, 150, 209);
          color: white;
    }tr:nth-child(odd) {
          background-color:blue;
          color: white;
    }th{
      background-color:rgb(10, 12, 12);
      color: white;
    }
</style><div class="container">
<h2>Datos de la tabla de los uniformes</h2>
  <?php if($resultado->num_rows >0):?>
    <table>
      <tr> 
         <th>id</th>
         <th>equipo</th>
         <th>marca</th>
         <th>tamaño</th>
         <th>cantidad</th>
      </tr>

      <?php while ($fila = $resultado->fetch_assoc()): ?>
      </tr>
           <td><?php echo $fila['id']; ?></td>
           <td><?php echo $fila['equipo']; ?></td>
           <td><?php echo $fila['marca']; ?></td>
           <td><?php echo $fila['tamaño']; ?></td>
           <td><?php echo $fila['cantidad']; ?></td>   
      </tr>
      <?php endwhile; ?>
      </table> 
      <?php else: ?>
        <p>No se encontraron los uniformes</p>
        <?php endif; ?>
      </div>

</div>
</body>
</html>