<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>SOAL7B</title>
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
      <td>Soni</td>
      <td>Mobile Legend</td>
      <td>Game</td>
      <td>
        <a href="#" class="fa fa-trash-alt mr-3"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
    <tr>
      <td>Isgi</td>
      <td>Futsal</td>
      <td>Olahraga</td>
      <td>
        <a href="#" class="fa fa-trash-alt mr-3"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
    <tr>
      <td>Iqbal</td>
      <td>Basket</td>
      <td>Olahraga</td>
      <td>
        <a href="#" class="fa fa-trash-alt mr-3"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
    <tr>
      <td>Kiky</td>
      <td>PUBG</td>
      <td>Game</td>
      <td>
        <a href="#" class="fa fa-trash-alt mr-3"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
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
            <button type="button" class="btn position-relative float-right fa fa-times" data-dismiss="modal" data-toggle="modal" data-target="#ModalEdit"></button>
        </div>

        <div class="card-body">
            <input class="form-control mb-4" type="text" placeholder="Name ...">
            <select class="form-control mb-4">
              <option>Hobby ...</option>
            </select>
            <select class="form-control mb-4">
              <option>Category ...</option>
            </select>
            <button type="button" class="btn btn-warning text-white float-right mr-2 mb-2" data-dismiss="modal">ADD</button>
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