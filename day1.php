<?php


$fruit = ["Apple", "Banana", "Cherry", "Strawberry"];

// print_r($fruit);   //1

foreach($fruit as $a) {  
    echo ($a . "\n");
}

echo "<hr>";
// ////

$fruit[] = "banana";
print_r($fruit);
echo "<hr>";
// ////

$delet=array_pop($fruit);

print_r($fruit);


////// ////
echo "<hr>";
$fruitCheck = "banana";
if (in_array($fruitCheck, $fruit)) {
    echo "$fruitCheck no found.\n";     
} else {
    echo "$fruitCheck  found.\n";
};
echo "<hr>";
///// task 2

$user= array(
"Nsreen"=>25,
"amro"=>27,
"momeen"=>28,
"salama"=>39,
"hadeel"=>34,
);

foreach( $user as $key=> $value){
    echo $key . " => " . $value . "\n";
}

echo "<hr>";
/////////////
$user["yasmeen"]= 25;

print_r($user);
echo "<hr>";
//////

array_pop($user);

print_r($user);
echo "<hr>";
//////////////

$check = "Nsreen";

if(array_key_exists($check, $user)){
    echo $check . " is found";
} else {
    echo $check . " isn't found";
};
echo "<hr>";
///////////////////////task 3
$data=array(
array(
"ahmad",24,"software"
),
array(
    "mohammed",27,"software"
),
array(
    "salem",20,"software"
));

print_r($data);

echo "<hr>";

/////////////////////
$newPerson = array("ibraheem", 30, "software");
array_push($data, $newPerson);
print_r($data);
echo "<hr>";
///////////////////////////////

$data[1][2]="Civil Engineering";
print_r($data);
echo "<hr>";
//////////////////////////////
// $a=$data[1][1]
// unset($data , $a)

// print_r($data);
// echo "<hr>";
////////////////////////          task 4 fainaly            :) :)

$fruits2 = array("apple", "banana", "orange");
array_push($fruits2, "strawberry");
print_r($fruits2);
/////////////////////////////
echo "<hr>";

$fruits = array("apple", "banana", "orange");
 array_pop($fruits);
print_r($fruits);
/////////////////////////
echo "<hr>";

$user = array("name" => "John", "age" => 30, "city" => "New York");
$keys = array_keys($user);
print_r($keys);
/////////////////////////
echo "<hr>";
$user = array("name" => "John", "age" => 30, "city" => "New York");
$values = array_values($user);
print_r($values);

/////////////////////////
echo "<hr>";

$number = array(1, 2, 3, 4, 5);
$a= count($number);
echo $a;

/////////////////////////
echo "<hr>";

$array1 = array( "apple","banana");
$array2 = array( "cherry", "date");
$merged_array = array_merge($array1, $array2);
print_r($merged_array);

/////////////////////////
echo "<hr>";
$fruits = array("apple", "banana", "orange");
$key = array_search("banana", $fruits);
echo $key;

/////////////////////////
echo "<hr>";

$numbers = array(4, 2, 8, 1, 6);
sort($numbers);
print_r($numbers);

/////////////////////////
echo "<hr>";

$user = array("name" => "John", "age" => 30, "city" => "New York");
ksort($user);
print_r($user);

/////////////////////////
echo "<hr>";

$user = array("name" => "John", "age" => 30, "city" => "New York");
asort($user);
print_r($user);















?>