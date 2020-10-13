<?php
$hamburguer=4.95;
$milkshake=1.95;
$cola=0.85;
$salestax_rate=0.075;
$pre_taxtip=0.16;

$subtotal = ($hamburguer * 2) + $milkshake + $cola;
$tax = $subtotal * $salestax_rate;
$tip = $subtotal * $pre_taxtip;
$total = $subtotal + $tax + $tip;

// print each meal price
echo "<h1> Each Price  </h1>";
echo "hamburguer = $hamburguer";
echo "<br>";
echo "milkshake = $milkshake";
echo "<br> ";
echo "cola = $cola";
echo"<br><hr>";

// quanity
echo "<h1> Quanity</h1>";

echo "2 hamburguer";
echo "<br>";
echo "1 milkshake";
echo "<br>";
echo "1 cola";
echo "<br><hr>";

// total cost
echo "<h1>Total cost</h1>";
echo "Total = $$total";
echo "<br><hr>";

?>