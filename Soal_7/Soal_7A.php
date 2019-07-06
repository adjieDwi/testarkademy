<?php 

include_once("dbConfig.php");

if ($connect->connect_error) {
    echo "gagal";
}

$sql = "SELECT nama.name, hobi.name, kategori.name 
         FROM ((nama 
         JOIN hobi ON nama.id_hobby = hobi.id)
         JOIN kategori ON nama.id_category = kategori.id)";
$result = $connect->query($sql)->fetch_all();

echo "<table border=1 cellpadding=15 cellspacing=0>";
echo "<tr><th>Name </th><th>Hobby </th><th>Categpry </th></tr>";
    foreach($result as $key) {
        echo "<tr>";
        echo "<td>" . $key[0] . "</td>";
        echo "<td>" . $key[1] . "</td>";
        echo "<td>" . $key[2] . "</td>";
        echo "</tr>";
    }

echo "</table>";
?>