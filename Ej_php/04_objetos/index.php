<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Objetos en PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header><div class="wrap"><h1>Ejercicio 04 - Objetos en PHP</h1></div></header>

<main class="wrap">
<a class="back" href="../index.php">← Volver al indice</a>

<section>
<h2>1. Objeto renglón de pedido</h2>

<?php
$renglonPedido = new stdClass();

$renglonPedido->codigoArticulo = "ART001";
$renglonPedido->descripcionArticulo = "Mouse";
$renglonPedido->precioUnitario = 25000;
$renglonPedido->cantidad = 2;

echo "<div class='card'><strong>Codigo:</strong> " . $renglonPedido->codigoArticulo . "</div>";
echo "<div class='card'><strong>Descripcion:</strong> " . $renglonPedido->descripcionArticulo . "</div>";
echo "<div class='card'><strong>Precio unitario:</strong> " . $renglonPedido->precioUnitario . "</div>";
echo "<div class='card'><strong>Cantidad:</strong> " . $renglonPedido->cantidad . "</div>";
echo "<div class='card'><strong>Tipo de \$renglonPedido:</strong> " . gettype($renglonPedido) . "</div>";

$renglonPedido2 = new stdClass();
$renglonPedido2->codigoArticulo = "ART002";
$renglonPedido2->descripcionArticulo = "Teclado";
$renglonPedido2->precioUnitario = 52000;
$renglonPedido2->cantidad = 1;

$renglonesPedido = array($renglonPedido, $renglonPedido2);

echo "<h2>2. Array de objetos</h2>";

echo "<table>";
echo "<tr><th>Codigo</th><th>Descripcion</th><th>Precio</th><th>Cantidad</th></tr>";

foreach ($renglonesPedido as $renglon) {
    echo "<tr>";
    echo "<td>" . $renglon->codigoArticulo . "</td>";
    echo "<td>" . $renglon->descripcionArticulo . "</td>";
    echo "<td>" . $renglon->precioUnitario . "</td>";
    echo "<td>" . $renglon->cantidad . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<div class='card'>Tipo de \$renglonesPedido: " . gettype($renglonesPedido) . "</div>";
echo "<div class='card'>Cantidad de renglones: " . count($renglonesPedido) . "</div>";

$renglones = new stdClass();
$renglones->renglonesPedido = $renglonesPedido;
$renglones->cantidadRenglones = count($renglonesPedido);

echo "<h2>3. Objeto con el array y la cantidad</h2>";
echo "<div class='card'>\$renglones->cantidadRenglones = " . $renglones->cantidadRenglones . "</div>";

echo "<h2>4. JSON final</h2>";
echo "<pre>" . htmlspecialchars(json_encode($renglones, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) . "</pre>";
?>
</section>
</main>
</body>
</html>
