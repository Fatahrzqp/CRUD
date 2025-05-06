<?php
// Data kelas dengan array 2 dimensi
$array = array(
    "IC" => array("Udin", "Ismail", "Adi"),
    "ID" => array("Ulokma", "Fajri", "Mahmud")
);

// Menampilkan data array
print_r($array);

// Menampilkan kelas IC
print_r($array["IC"]);

// Menampilkan nama kelas ID index 0
echo $array["ID"][0];

// Contoh pemanggilan fungsi
function writeMsg($nama) {
    echo "Nama: " . $nama;
}

// Panggil fungsi
writeMsg("Mahmud");

// Data kelas bisa ditulis juga dengan
$array_simple = [
    "IC" => ["Udin", "Ismail", "Adi"],
    "ID" => ["Ulokma", "Fajri", "Mahmud"]
];
?>
