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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>SOAL7C</title>
</head>
<body>
<div class="container">
<nav class="navbar ">
  <a href="#" class="navbar-brand mb-0 h1">
    <img src="logo.svg" width="120" height="120">
    ARKADEMY BOOTCAMP
  </a>
</nav>

<button type="button" class="btn btn-warning text-white float-right mr-2 mb-2" data-toggle="modal" data-target="#ModalAdd">ADD</button>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Hobby</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php foreach($result as $data) : ?>
      <td><?= $data[0]; ?></td>
      <td><?= $data[1]; ?></td>
      <td><?= $data[2]; ?></td>
      
      <td>
        <a href="#" class="fa fa-trash-alt mr-3"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
        <?php endforeach; ?>
  </tbody>
</table>
</div>


<!-- Modal Box Add Data-->
<div class="modal fade" id="ModalAdd" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card">

        <div class="d-flex justify-content-between p-2">
          <h5 class="card-title">ADD DATA</h5>
            <button type="button" class="btn position-relative float-right fa fa-times" data-dismiss="modal" data-toggle="modal"></button>
        </div>

        <div class="card-body">
        <form action="addData.php" method="post">

            <input class="form-control mb-4" type="text" name="name" placeholder="Name ...">
            <select class="form-control mb-4" name="hobby">
              <option>Hobby ...</option>
              <option value="1">Koleksi Tas</option>
              <option value="2">InstaStory</option>
            </select>

            <select class="form-control mb-4" name="category">
              <option>Category ...</option>
              <option value="1">Shopping</option>
              <option value="2">Media Sosial</option>
            </select>
            <button type="submit" class="btn btn-warning text-white float-right mr-2 mb-2" >ADD</button>

        </form>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Modal Box Edit Data -->
<div class="modal fade" id="ModalEdit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card">
        
        <div class="d-flex justify-content-between p-2">
            <h5 class="card-title">EDIT DATA</h5>
            <button type="button" class="btn position-relative float-right fa fa-times" data-dismiss="modal" data-toggle="modal2"></button>
        </div>

        <div class="card-body">
            <input class="form-control mb-4" type="text" placeholder="Isgi">
            <input class="form-control mb-4" type="text" placeholder="Futsal">
            <input class="form-control mb-4" type="text" placeholder="Olahraga">
            <button type="button" class="btn btn-warning text-white float-right mr-2 mb-2" data-dismiss="modal">EDIT</button>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>