<?php
$rows = 100;
$cols = 100;
echo "<header> Multiplication Table </header><br>";
echo "<table>";
  for($i = 0; $i <= $rows; $i++)
  {
    echo "<tr>";
    for($j = 0; $j <= $cols; $j++)
    {
      if($i == 0 && $j == 0)
      {
        echo "<td>   </td>";
      }
      else if($i == 0)
      {
        $temp = $j;
        echo "<td>" . $temp . "</td>";
      }
      else if($j == 0)
      {
        $temp = $i;
        echo "<td>" . $temp . "</td>";
      }
      else
      {
        echo "<td>" . $i*$j . "</td>";
      }
    }
    echo "</tr>";
  }
echo "</table>";
 ?>
