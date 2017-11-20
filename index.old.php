<?php

echo __DIR__;

// Tableau itératif
$cities = [
    "Paris",
    "Amsterdam",
    "London",
    "Lisboa",
];

// Tableau associatif
$cities = [
    "FR" => [
        "capital"     => "Paris",
        "inhabitants" => 1978868,
    ],
    "NL" => [
        "capital"     => "Amsterdam",
        "inhabitants" => 9787698797,
    ],
    "UK" => [
        "capital"     => "London",
        "inhabitants" => 5657,
    ],
    "PT" => [
        "capital"     => "Lisboa",
        "inhabitants" => 9,
    ],
];

echo "<h1>Cities</h1>";

foreach ($cities as $country => $info) {
    echo "<h2>$country: " .
        $info['capital'] .
        ", " .
        $info['inhabitants'] .
        " inhabitants</h2>"
    ;
    //echo '<h2>' . $city . '</h2>';
}





