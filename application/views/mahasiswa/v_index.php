<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
	<link rel="stylesheet"
		href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tambah Data</a>
      </li>
    </ul>
    <span class="navbar-text">
      Yudha Uhrowi Azim
    </span>
  </div>
</nav>

<div class="alert alert-info" role="alert">
  <p align="center">YUDHA UHROWI AZIM / 1901050006</p>
</div>

<div class="card">
  <div class="card-header">
    Data Mahasiswa
  </div>
 
 <div class="card">
  <div class="card-body">
    
  
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Yudha</td>
      <td>190105006</td>
      <td>Masbagik</td>
      <td>
      	<button type="button" class="btn btn-warning">Edit</button>
      	<button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Raditha</td>
      <td>1901050002</td>
      <td>Cakra</td>
      <td>
      	<button type="button" class="btn btn-warning">Edit</button>
      	<button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ujik</td>
      <td>1901050003</td>
      <td>Mataram</td>
      <td>
      	<button type="button" class="btn btn-warning">Edit</button>
      	<button type="button" class="btn btn-danger">Delete</button>
        </div>
</div>
      </td>
    </tr>
  </tbody>
</table>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

</div>
</body>
</html>