<?php
$input1 = [false, false, true, true];
$input2 = [false, true, false, true];

echo "<p>Tabel Logika 1111</p>";
echo "<table border='2'>";
    echo "<tr>";
        echo "<td>Input true</td>";
        echo "<td>Input 2</td>";
        echo "<td>AND</td>";
        echo "<td>OR</td>";
    echo "</tr>";
    for($i=0; $i < count($input1); $i++){
        $td1 = $input1[$i] == true ? "true" : "false";
        $td2 = $input2[$i] == true ? "true" : "false";
        $td3 = $input1[$i] && $input2[$i] == true ? "1" : "0" ;
        $td4 = $input1[$i] || $input2[$i] == true ? "1" : "0";
        echo "<tr>";
            echo "<td>". $td1 ."</td>";
            echo "<td>". $td2 ."</td>";
            echo "<td>". $td3 ."</td>";
            echo "<td>". $td4 ."</td>";
        echo "</tr>";
    }
echo "</table>";
?>