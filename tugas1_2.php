<!DOCTYPE html>
<html>
<head>
    <title>Daftar Menu</title>
</head>
<body>

<h1 style="text-align:left;">DAFTAR MENU</h1>

<?php 

$menu = [
    ["nama" => "Cireng",   "harga" => 1000],
    ["nama" => "Es Duren", "harga" => 15000],
    ["nama" => "Es Milo",  "harga" => 20000],
    ["nama" => "Es Teh",   "harga" => 5000],
    ["nama" => "Piscok",   "harga" => 1000],
];

echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse:collapse;'>";
echo "<tr>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Harga</th>
      </tr>";

$no = 1;
foreach($menu as $item){
    echo "<tr>
            <td>$no</td>
            <td>{$item['nama']}</td>
            <td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>
          </tr>";
    $no++;
}

echo "</table>";

?>

</body>
</html>
