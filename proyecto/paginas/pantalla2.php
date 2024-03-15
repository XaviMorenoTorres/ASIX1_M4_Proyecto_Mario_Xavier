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
    <h1>Seras capaz de resolverlo?</h1>
    <img src="../IMG/calculo.jpg" id="calculo">
    <form method="post">
        <input type="number" name="resultado" required><br>
        <input type="submit" value="Enviar"><br>
        <?php
    session_start();

    if (!isset($_SESSION["pantalla1"]) || !$_SESSION["pantalla1"]) {
        header("Location: pantalla1.php");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $resultado = $_POST["resultado"];

        // Validar respuestas
        if ($resultado == "38") {
            // Respuestas correctas, almacenar en sesión
            $_SESSION["pantalla2"] = true;
            header("Location: ../memory/memory.html");
        } else {
            // Respuestas incorrectas, proporcionar pista
            if ($resultado < 38)
            echo "<p>El número es mayor</p>";else{
            echo "<p>El número es menor</p>";
            }
            echo "<body style='background-color: #6f9097;'>";
            echo "</body>";
        }    
    }
    ?>
    </form>
</body>
</html>