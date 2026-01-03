<!DOCTYPE html>
<html>
<head>
    <title>Daftar Menu</title>
</head>
<body>

<h2>Daftar Menu</h2>

<?php

$menu = [
    "Ayam Goreng"   => 13000,
    "Ayam Bakar"    => 15000,
    "Ayam Sayur"    => 13000,
    "Tempe Goreng"  => 1000,
    "Tahu Goreng"   => 1000,
    "Soto"          => 3000,
    "Nasi Putih"    => 5000,
    "Es Teh"        => 4000,
    "Es Tebu"       => 5000
];

echo "<ul>";

foreach($menu as $makanan => $harga){
    echo "<li>$makanan  = Rp. " . number_format($harga, 0, ",", ".") . "</li>";
}

echo "</ul>";

?>

</body>
</html>
