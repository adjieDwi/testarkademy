<?php 
include_once("dbConfig.php");
if ($connect->connect_error) {
    echo "gagal";
} else {
    echo "asd";
}
$name = $_POST['name'];
$hobby = $_POST['hobby'];
$category = $_POST['category'];


$sql = "INSERT INTO nama (name, id_hobby, id_category) VALUES ($name, $hobby, $category)";

if (mysqli_query($connect, $sql)) {
    echo "berhasil";
} else {
    $connect->error;
}

mysqli_close($connect);

?>