<!DOCTYPE html>
<html>
<body>
   
<?php
$array = array("aqapa", "amman", "jarash", "ajlon", "tafela", "karak", "Irbid");
 array_reverse($array);
print_r(array_reverse($array));


echo "<hr>";


var_dump("amman");

echo "<hr>";

array_pop($array);

print_r($array);

echo "<hr>";
$array = array("aqapa", "amman", "jarash", "ajlon", "tafela", "karak", "Irbid");
$a = array_slice($array,2);
print_r($a);

echo "<hr>";

////task 2222///////////////////

// $array2= array ("appal"=>3,"oranr"=>2,"banana"=>7);


// foreach ($array2 as $fruit => $price) {
//     echo $fruit . "<br>";
// }

// echo "<hr>";

// foreach ($array2 as $fruit => $price){
//     echo $price . "<br>";
// }

// echo "<hr>";

// $total_sum = 0;
// $num_products = count($array2);
// foreach($array2 as $price);
// $total_sum=+$price;
// $average_price=($num_products/$total_sum);
// echo  number_format($average_price) ;

// echo "<hr>";

// arsort($array2);
// $a =reset($array2);

// echo $a;

// echo "<hr>";




// // Create a multidimensional array to store books (title, author, year)
// $books = array(
//     array(
//         "title" => "The Catcher in the Rye",
//         "author" => "J.D. Salinger",
//         "year" => 2013
//     ),
//     array(
//         "title" => "To Kill a Mockingbird",
//         "author" => "Harper Lee",
//         "year" => 2000
//     ),
//     array(
//         "title" => "1984",
//         "author" => "George Orwell",
//         "year" => 1999
//     ),
//     array(
//         "title" => "The Hobbit",
//         "author" => "J.R.R. Tolkien",
//         "year" => 1937
//     ),
//     array(
//         "title" => "The Da Vinci Code",
//         "author" => "Dan Brown",
//         "year" => 2015
//     )3



// );

// foreach($books as $book){
// if ($book['year']>2010){
//     echo $book['title']
// }

// }



// foreach ($books as $book) {
//     if ($book['year'] > 2010) {
//         echo $book['title'] . " by " . $book['author'] . " (" . $book['year'] . ")\n";
//     }
// }

echo "<hr>";


$new_book = array(
    "title" => "The Hunger Games",
    "author" => "Suzanne Collins",
    "year" => 2008
);
$books[] = $new_book;

echo "<hr>";



foreach ($books as $book) {
    echo $book['title'] . " by " . $book['author'] . " (" . $book['year'] . ")\n";
}

echo "<hr>";


$books[0]['author'] = "J.D. Salinger (updated)";

echo "<hr>";


echo "Updated array with author updated:\n";
foreach ($books as $book) {
    echo $book['title'] . " by " . $book['author'] . " (" . $book['year'] . ")\n";
}

echo "<hr>";


usort($books, function($a, $b) {
    return strcmp($a['title'], $b['title']);
});

echo "<hr>";


echo "Sorted array by title:\n";
foreach ($books as $book) {
    echo $book['title'] . " by " . $book['author'] . " (" . $book['year'] . ")\n";
}

// task 4 


$fruts = array("apple", "banana", "cherry");


$uppercaseWords = array_map(function($str) {
    return strtoupper($str);
}, $fruts);


print_r($uppercaseWords);
///////////////////////////////////////////



$num = array(1, 3, 6, 7, 2, 10);


$filtreNum = array_filter($num, function($n) {
    return $n < 5;
});

// print_r($filtreNum);
var_dump($filtreNum);



$nnum = array(1, 3, 6, 7, 2, 10);

$aa = array_reduce($nnum, function($sum, $item) {
    $sum += $item;
    return $sum;
}, 0); 

var_dump($aa);
?>





















?>














?>









?>

</body>
</html>