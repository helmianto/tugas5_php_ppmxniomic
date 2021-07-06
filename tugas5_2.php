<?php
$input1 = ["Ayo", "Bersama"];
$input2 = ["Belajar", "Niomic"];
$hasil = [];

echo "<h1>Operator String</h1>";
echo "<table border='2'>";
    echo "<tr>";
        echo "<td>Input 1</td>";
        echo "<td>Input 2</td>";
        echo "<td>Hasil</td>";
    echo "</tr>";
    for($i=0; $i < count($input1); $i++){
        $gabungString = $input1[$i] ." ". $input2[$i];
        array_push($hasil, $gabungString);
        echo "<tr>";
            echo "<td>". $input1[$i] ."</td>";
            echo "<td>". $input2[$i] ."</td>";
            echo "<td>". $gabungString ."</td>";
        echo "</tr>";
    }
echo "</table> <br/>";

$gabungan = "";
for($j=0; $j < count($hasil); $j++){
    $gabungan .= $hasil[$j]." ";
}

echo "Gabungan : ".$gabungan." :)";

?>