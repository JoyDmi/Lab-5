<?php

$house = scandir("category/House");
$cars = scandir("category/Cars");
$services = scandir("category/Services");
$other = scandir("category/Other");

echo "House: ";

foreach ($house as $i) {
    if($i > 1)
        echo $i, "<br>";
}

echo "Cars: ";

foreach ($cars as $i) {
    if($i > 1)
        echo $i, "<br>";
}

echo "Services: ";

foreach ($services as $i) {
    if($i > 1)
        echo $i, "<br>";
}

echo "Other: ";

foreach ($other as $i) {
    if($i > 1)
        echo $i, "<br>";
}