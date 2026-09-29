<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Base</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div class="wrap">
<h1>Ejercicio 01 - PHP Base</h1>
</div>
</header>

<main class="wrap">
<a class="back" href="../index.php">← Volver al indice</a>

<section>
<h2>1. Texto fuera de PHP</h2>

Este texto esta escrito en el archivo PHP pero esta fuera de las marcas de PHP.

<hr>

<?php
echo "<p><strong>2. Texto HTML generado desde PHP:</strong> </p>";

echo "<hr>";

$a = "jaguel";
$b = 2;
$c = 3;
$d = $b + $c;

echo "<div class='result'><span class='var'>\$a</span> = <span class='value'>$a</span></div>";
echo "<div class='result'>Tipo de <span class='var'>\$a</span>: <span class='type'>" . gettype($a) . "</span></div>";

echo "<div class='result'><span class='var'>\$b</span> = <span class='value'>$b</span></div>";
echo "<div class='result'>Tipo de <span class='var'>\$b</span>: <span class='type'>" . gettype($b) . "</span></div>";

echo "<div class='result'><span class='var'>\$c</span> = <span class='value'>$c</span></div>";
echo "<div class='result'>Tipo de <span class='var'>\$c</span>: <span class='type'>" . gettype($c) . "</span></div>";

echo "<div class='result'><span class='var'>\$d</span> = <span class='value'>$d</span></div>";
echo "<div class='result'>Tipo de <span class='var'>\$d</span>: <span class='type'>" . gettype($d) . "</span></div>";


echo "<hr>";

$variableE = true;
$variableF = false;

echo "<div class='result'><span class='var'>\$variableE</span> = <span class='value'>$variableE</span></div>";
echo "<div class='result'>Tipo de <span class='var'>\$variableE</span>: <span class='type'>" . gettype($variableE) . "</span></div>";

echo "<div class='result'><span class='var'>\$variableF</span> = <span class='value'>$variableF</span></div>";
echo "<div class='result'>Tipo de <span class='var'>\$variableF</span>: <span class='type'>" . gettype($variableF) . "</span></div>";

echo "<hr>";

const NOMBRE_CONSTANTE = "valor constante";

echo "<div class='result'>Constante: <span class='value'>" . NOMBRE_CONSTANTE . "</span></div>";
echo "<div class='result'>Tipo: <span class='type'>" . gettype(NOMBRE_CONSTANTE) . "</span></div>";

echo "<hr>";

$saludos = array("hola", "hello");
array_push($saludos, "bonjour");
array_push($saludos, "ciao");

echo "<h2>Array numerico de saludos</h2>";
foreach ($saludos as $indice => $saludo) {
    echo "<div class='result'>[$indice] = $saludo</div>";
}

echo "<hr>";

$diccionarioBasico = array(
    array("idioma" => "Español", "saludo" => "hola", "despedida" => "adios", "vivienda" => "casa"),
    array("idioma" => "Ingles", "saludo" => "hello", "despedida" => "goodbye", "vivienda" => "house"),
    array("idioma" => "Frances", "saludo" => "bonjour", "despedida" => "au revoir", "vivienda" => "maison"),
    array("idioma" => "Italiano", "saludo" => "ciao", "despedida" => "arrivederci", "vivienda" => "casa")
);

echo "<h2>Array de dos dimensiones</h2>";
echo "<table>";
echo "<tr><th>Idioma</th><th>Saludo</th><th>Despedida</th><th>Vivienda</th></tr>";

foreach ($diccionarioBasico as $aDiccionarioBasico) {
    echo "<tr>";
    echo "<td>" . $aDiccionarioBasico["idioma"] . "</td>";
    echo "<td>" . $aDiccionarioBasico["saludo"] . "</td>";
    echo "<td>" . $aDiccionarioBasico["despedida"] . "</td>";
    echo "<td>" . $aDiccionarioBasico["vivienda"] . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<p class='small'>Valor de <strong>\$aDiccionarioBasico</strong> luego del foreach:</p>";
echo "<div class='code'>";
print_r($aDiccionarioBasico);
echo "</div>";

echo "<hr>";

$persona = array(
    "nombre" => "Fran",
    "juego" => "Valorant",
    "rol" => "IGL",
    "cantidad" => 1
);

echo "<h2>Array asociativo</h2>";
foreach ($persona as $clave => $valor) {
    echo "<div class='result'><span class='var'>$clave</span> : <span class='value'>$valor</span></div>";
}

echo "<hr>";

$x = 3;
$y = 4;

echo "<h2>Expresiones aritmeticas</h2>";
echo "<div class='result'>\$x = $x | tipo: " . gettype($x) . "</div>";
echo "<div class='result'>\$y = $y | tipo: " . gettype($y) . "</div>";
echo "<div class='result'>Suma: (\$x + \$y) = " . ($x + $y) . "</div>";
echo "<div class='result'>Multiplicacion: (\$x * \$y) = " . ($x * $y) . "</div>";
echo "<div class='result'>Division: (\$x / \$y) = " . ($x / $y) . "</div>";

echo "<hr>";

$n1 = 40;
$n2 = 50;

echo "<h2>Alcance de variables</h2>";
echo "<div class='result'>\$n1 = $n1</div>";
echo "<div class='result'>\$n2 = $n2</div>";
echo "<div class='result'>Suma usando \$GLOBALS: " . $GLOBALS["n1"] . " + " . $GLOBALS["n2"] . " = " . ($GLOBALS["n1"] + $GLOBALS["n2"]) . "</div>";

function mostrarLocal() {
    $variableLocal = "Esta variable existe solamente dentro de la funcion.";
    echo "<div class='result'>$variableLocal</div>";
}

mostrarLocal();
?>
</section>
</main>
</body>
</html>
