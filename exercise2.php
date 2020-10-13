<?php
$array = array(
"New York, NY" => 8175133,
"Los Angeles, CA" => 3792621,
"Chicago, IL" => 2695598,
"Houston, TX" => 2100263,
"Philadelphia, PA" => 1526006,
"Phoenix, AZ" => 1445632,
"San Antonio, TX" => 1327407,
"San Diego, CA" => 1307402,
"Dallas, TX" => 1197816,
"San Jose,CA" => 945942
);
?>
<h4>Populations in all cities</h4>
<table border="1" cellspacing="0" cellpadding="4">
<tr>
<th>City</th>
<th>Population</th>
</tr>
<?php foreach ($array as $key=>$value) {
echo "<tr><td>$key</td><td>".number_format($value)."</td></tr>";
}
echo "<tr><th>Total</th><th>".number_format(array_sum($array))."</th></tr>";
?>
</table>
<h4>Sorted By City</h4>
<table width="35%" border="1" cellspacing="0" cellpadding="4">
<tr>
<th>City</th>
<th>Population</th>
</tr>
<?php ksort($array);
foreach ($array as $key=>$value) {
echo "<tr><td>$key</td><td>".number_format($value)."</td></tr>";
}
echo "<tr><th>Total</th><th>".number_format(array_sum($array))."</th></tr>";
?>
</table>