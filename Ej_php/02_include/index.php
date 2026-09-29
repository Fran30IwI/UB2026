<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Include en PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div class="wrap"><h1>Ejercicio 02 - Include</h1></div>
</header>

<main class="wrap">
<a class="back" href="../index.php">← Volver al indice</a>

<section>
<h2>¿Que estamos haciendo?</h2>


<?php
include "asignaciones.php";

echo "<div class='person'>";
echo "<strong>" . $persona1["nombre"] . " " . $persona1["apellido"] . "</strong><br>";
echo "Fecha de nacimiento: " . $persona1["fechaNacimiento"];
echo "</div>";

echo "<div class='person'>";
echo "<strong>" . $persona2["nombre"] . " " . $persona2["apellido"] . "</strong><br>";
echo "Fecha de nacimiento: " . $persona2["fechaNacimiento"];
echo "</div>";

echo "<p>Longitud del primer arreglo: " . count($persona1) . "</p>";
echo "<p>Longitud del segundo arreglo: " . count($persona2) . "</p>";
?>
</section>
</main>
</body>
</html>
