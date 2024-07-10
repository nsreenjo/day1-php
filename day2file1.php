<?php


for ($i = 1; $i <= 10; $i++) {
    echo $i . "-";
}

echo "<hr>";
////////////////

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}

echo "<hr>"; 
////////////////////////////


$sum=0;
for ($i=1;$i<=30;$i++){
    $sum+=$i;
}
echo  $sum;
///////////////////////////////
echo "<hr>"; 

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "*";
    }
    echo "<br>";}
///////////////////////////
echo "<hr>"; 

$num = 5;
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo  $factorial;

///////////////////////////
echo "<hr>"; 

$n = 10;
$fibonacci = [0, 1];
for ($i = 2; $i < $n; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}
echo implode( $fibonacci);
/////////////////////////////
echo "<hr>"; 
$text = "Orange Coding Academy";
$char = "c";
$count = substr_count($text, $char);
echo  $count;
//////////////////////////////////////
echo "<hr>"; 
for ($i = 1; $i <= 5; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        echo '<td>' . $i * $j . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
///////////////////////////
echo "<hr>"; 

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
?>










?>