<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pantalla 3</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
    .img1{
        width: 80%;
    }
    </style>
</head>
<body>
    <h1>Conocido por lanzar barriles</h1>
    <form method="post">
        <label for="nombre_personaje">Nombre del personaje:</label>
        <input type="text" name="nombre_personaje" required><br>

        <label for="nombre_circuito">Nombre de su circuito:</label>
        <input type="text" name="nombre_circuito" required><br>

        <label for="prenda">Que prenda caracteristica usa?</label>
        <input type="text" name="prenda" required><br>

        <input type="submit" value="Enviar">
        <?php
        session_start();

        if (!isset($_SESSION["pantalla2"]) || !$_SESSION["pantalla2"]) {
            header("Location: pantalla2.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre_personaje = $_POST["nombre_personaje"];
            $nombre_circuito = $_POST["nombre_circuito"];
            $prenda = $_POST["prenda"];

            // Validar respuestas
            if ($nombre_personaje == "Donkey Kong" && $nombre_circuito == "Pista de la Jungla de DK" && $prenda == "Corbata") {
                // Respuestas correctas, almacenar en sesión
                $_SESSION["pantalla3"] = true;
                header("Location: final.php");
            } else {
                // Respuestas incorrectas, proporcionar pista
                echo "<br><p>Pista: Es conocido por ser un gorila grande y fuerte. ¿Quién es?</p><br><br>";
                echo '<img class="img1" src="../IMG/logo_DK.jpg" alt="Donkey Kong Logo">';
                echo "<body style='background-color: #663e0d;'>";
                echo "</body>";
            }    
        }
        ?>
    </form>
</body>
</html>