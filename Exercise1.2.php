<?php
$hamburger=4.95;
$milkshake=1.95;
$cola=0.85;
$salestax_rate=0.075;
$pre_taxtip=0.16;

$hamsubtotal = ($hamburger *2);
$milkshakesubtotal = $milkshake* 1;
$colasubtotal = $cola* 1;
$subtotal = $hamsubtotal + $milkshakesubtotal + $colasubtotal;


$tax = $subtotal * $salestax_rate;
$tip = $subtotal * $pre_taxtip;
$total = $subtotal + $tax + $tip;
// total cost
echo "<h1>Total cost</h1>";
echo "Total = $$total";
echo "<br><hr>";
?>

<table width="80%" border="1" cellspacing="0" cellpadding="4">
<tr>
<th>Item Name </th>
<th>Price</th>
<th>Qty</th>
<th>Subtotal</th>
</tr>
<tr>
<td><?php echo "hamburger";?></td>
<td><?php echo "$4.95";?></td>
<td><?php echo "2";?></td>
<td><?php echo "$hamsubtotal";?></td>
</tr>
<tr>
<td><?php echo "milkshake";?></td>
<td><?php echo "$1.95";?></td>
<td><?php echo "1";?></td>
<td><?php echo "$milkshakesubtotal";?></td>
</tr>
<tr>
<td><?php echo "cola";?></td>
<td><?php echo "$0.85";?></td>
<td><?php echo "1";?></td>
<td><?php echo "$colasubtotal";?></td>
</tr>

<tr>
<td colspan="3" align="right">Subtotal</td>
<td><?php echo "\$$subtotal"; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Tax, 7.5%</td>
<td><?php echo "\$$tax"; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Tip</td>
<td><?php echo "\$$tip"; ?></td>
</tr>
<tr>
<th colspan="3" align="right">Total</th>
<td><?php echo "\$$total"; ?></td>
</tr>
</table> 
