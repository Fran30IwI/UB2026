<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Variables de servidor</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header><div class="wrap"><h1>Ejercicio 03 - Variables de servidor</h1></div></header>

<main class="wrap">
<a class="back" href="../index.php">← Volver al indice</a>

<section>
<h2>Algunas variables de $_SERVER</h2>

<table>
<tr><th>Clave</th><th>Valor</th></tr>
<?php
$claves = array(
    "SERVER_ADDR",
    "SERVER_NAME",
    "HTTP_HOST",
    "DOCUMENT_ROOT",
    "REMOTE_ADDR",
    "REMOTE_PORT",
    "SCRIPT_NAME",
    "REQUEST_METHOD",
    "REQUEST_URI",
    "QUERY_STRING"
);

foreach ($claves as $clave) {
    $valor = isset($_SERVER[$clave]) ? $_SERVER[$clave] : "(no disponible)";
    echo "<tr><td class='key'>\$_SERVER['$clave']</td><td class='value'>$valor</td></tr>";
}
?>
</table>
</section>

<section>
<h2>Recorrido completo de $_SERVER</h2>

<table>
<tr><th>Clave</th><th>Valor</th></tr>
<?php
foreach ($_SERVER as $clave => $valor) {
    if (is_array($valor)) {
        $valor = json_encode($valor);
    }

    echo "<tr>";
    echo "<td class='key'>$clave</td>";
    echo "<td class='value'>" . htmlspecialchars((string)$valor) . "</td>";
    echo "</tr>";
}
?>
</table>
</section>
</main>
</body>
</html>
