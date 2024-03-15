<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mario Kart</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <h1>¿Quien es el mayor rival de Luigi?</h1>
    <form method="post">
        <label for="nombre_personaje">Nombre del Personaje:</label>
        <input type="text" name="nombre_personaje" required><br>

        <label for="nombre_circuito">Nombre de su circuito:</label>
        <input type="text" name="nombre_circuito" required><br>
        
        <label for="traje">De que color es su traje:</label>
        <input type="text" name="traje" required><br>

        <input type="submit" value="Enviar">
        <?php

        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre_personaje = $_POST["nombre_personaje"];
            $nombre_circuito = $_POST["nombre_circuito"];
            $traje = $_POST["traje"];

            // Validar respuestas
            if ($nombre_personaje == "Waluigi" && $nombre_circuito == "Pinball Waluigi" && $traje == "Morado") {
                // Respuestas correctas, almacenar en sesión
                $_SESSION["pantalla1"] = true;
                header("Location: ../puzzle/puzzle.html");
            } else {
                // Respuestas incorrectas, proporcionar pista
                echo "<br><p>Pista: Tiene un bigote delgado y viste un traje morado con detalles en negro. ¿Quién es?</p><br><br>";
                echo "<img src=../IMG/logo_waluigi.png>";
                echo "<body style='background-color: purple;'>";
                echo "</body>";
            }
        }
        ?>
    </form>
</body>
</html>
