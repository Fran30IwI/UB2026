<?php

$id_usuario = isset($_POST["id_usuario"]) ? $_POST["id_usuario"] : "";
$contrasena = isset($_POST["contrasena"]) ? $_POST["contrasena"] : "";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta del formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="wrap">
            <h1>Respuesta del formulario</h1>
        </div>
    </header>

    <main class="wrap">

        <section>

            <h2>Datos recibidos</h2>

            <div class="result">
                ID usuario: <?= htmlspecialchars($id_usuario) ?><br>
                Contraseña: <?= htmlspecialchars($contrasena) ?>
            </div>

            <a class="back" href="index.html">← Volver al formulario</a>

        </section>

    </main>

</body>

</html>