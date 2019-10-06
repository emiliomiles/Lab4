<?php echo '<link href="style.css" rel="stylesheet" type="text/css" />'; ?>
<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$pass = $_POST["pass"];
$guitar = $_POST["guitar"];
$tuner = $_POST["tuner"];
$strings = $_POST["strings"];
$capo = $_POST["capo"];
$picks = $_POST["picks"];
$shipping_value = $_POST['shipping'];
$ship = 0;
if($shipping_value == "$50 Overnight Shipping") $ship = 50.00;
if($shipping_value == "$5 Three-Day") $ship = 5.00;
if($shipping_value == "FREE Seven-Day Shipping") $ship = 0.00;
$gsub = 299.99*$guitar;
$tsub = 8.79*$tuner;
$ssub = 16.99*$strings;
$csub = 9.99*$capo;
$psub = 7.99*$picks;
$tax = ($gsub+$tsub+$ssub+$csub+$psub+$ship)*0.093;
$total = ($gsub+$tsub+$ssub+$csub+$psub+$ship)+$tax;

echo "<p class='receipt'>";
echo "Welcome back: " . $name . "!<br>";
echo "Your password is '" . $pass . "'.<br>";
echo "</p>";
echo "<br><b>- - - - - - - - - - - - - - RECEIPT - - - - - - - - - - - - - - </b><br>";

echo "<div id='block2'>";
$rows = 5;
$cols = 5;
echo "<table>";
  echo "<tr>";
    echo "<th> </th>";
    echo "<th> <b>Quantity</b> </th>";
    echo "<th> <b>Cost Per Item</b> </th>";
    echo "<th> <b>Subtotal</b> </th>";
  echo "</tr>";
  echo "<tr>";
    echo "<td> <b>Guitar</b> </td>";
    echo "<td>" . $guitar . "</td>";
    echo "<td> $299.99 </td>";
    echo "<td>" . $gsub . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td> <b>Tuner</b> </td>";
    echo "<td>" . $tuner . "</td>";
    echo "<td> $8.79 </td>";
    echo "<td>" . $tsub . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td> <b>Strings</b> </td>";
    echo "<td>" . $strings . "</td>";
    echo "<td> $16.99 </td>";
    echo "<td>" . $ssub . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td> <b>Capo</b> </td>";
    echo "<td>" . $capo . "</td>";
    echo "<td> $9.99 </td>";
    echo "<td>" . $csub . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td> <b>Picks</b> </td>";
    echo "<td>" . $picks . "</td>";
    echo "<td> $7.99 </td>";
    echo "<td>" . $psub . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td> <b>Shipping</b> </td>";
    echo "<td> </td>";
    echo "<td>" . $shipping_value . "</td>";
    echo "<td> $" . $ship . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td> <b>Tax</b> </td>";
    echo "<td>  </td>";
    echo "<td> </td>";
    echo "<td>" . round($tax,2) . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td> <b>Total</b> </td>";
    echo "<td> </td>";
    echo "<td> </td>";
    echo "<td>" . round($total,2) . "</td>";
  echo "</tr>";
echo "</div>";
?>