<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$username = "root";
$password = "";
$database = "cetis131";

$conexion = new mysqli($host, $username, $password, $database);

if ($conexion->connect_error) {
    die('Error: No es posible establecer la conexión: [' . $conexion->connect_error . ']');
}

// Validar que se recibió el ID por POST
if (isset($_POST['id'])) {
    $id = $conexion->real_escape_string($_POST['id']);
    $extraerdato = $conexion->query("SELECT * FROM equipoazul WHERE id=$id");

    if ($extraerdato && $fetch = $extraerdato->fetch_assoc()) {
        $nombre = $fetch['nombre'];
        $nombre_real = $fetch['nombre_real'];
        $poderes = $fetch['poderes'];
        $primera_aparicion = $fetch['primera_aparicion'];
        $bio = $fetch['bio'];
        $imagen = $fetch['imagen'];
    } else {
        echo "<div class='error'>No se encontró el personaje.</div>";
        exit;
    }
} else {
    echo "<div class='error'>No se recibió el ID del personaje.</div>";
    exit;
}
?>

<div class="personajes">
    <div class="nombre">Nombre Clave: <?php echo htmlspecialchars($nombre); ?><br></div><br>
    <div class="nombre">Nombre Real: <?php echo htmlspecialchars($nombre_real); ?><br></div><br>
    <div class="nombre">Poderes: <?php echo htmlspecialchars($poderes); ?><br></div><br>
    <div class="nombre">Primera Aparición: <?php echo htmlspecialchars($primera_aparicion); ?><br></div><br>
    <div class="nombre">Biografía: <?php echo htmlspecialchars($bio); ?><br></div><br>
    <div class="foto">
        <img class="crop" src="data:image/jpeg;base64,<?php echo base64_encode($imagen); ?>">
    </div>
</div>