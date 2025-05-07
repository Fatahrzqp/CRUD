<?php
$data = [
    ["nama" => "Fatah", "umur" => 19],
    ["nama" => "Ogil", "umur" => 21],
    ["nama" => "Rama", "umur" => 19],
    ["nama" => "Dhio", "umur" => 23],
    ["nama" => "Ropik", "umur" => 18],
    ["nama" => "Firman", "umur" => 22],
    ["nama" => "Anas", "umur" => 25],
    ["nama" => "Dimas", "umur" => 20],
    ["nama" => "Rizqi", "umur" => 19],
    ["nama" => "Elang", "umur" => 24],
    ["nama" => "Hang", "umur" => 21],
    ["nama" => "Jal", "umur" => 22],
    ["nama" => "Resa", "umur" => 20],
    ["nama" => "Alpian", "umur" => 23],
    ["nama" => "Angger", "umur" => 18],
];


$json = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$json</pre>";
