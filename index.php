<?php
    $url = file_get_contents('https://api.kawalcorona.com/indonesia/');
    $data = json_decode($url, true);

    $positif= $data[0]['positif'];
?>

<!doctype html>
<html lang="en">
  <head>

  <style>
    h4{
        text-align : center;
    }
  </style>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Font AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Informasi Terkini Covid-19</title>
  </head>
  <body>
   
<nav class="navbar navbar-dark navbar-expand bg-dark">
  <div class="container">
    <a href="index.php" class="navbar-brand"><i class="fas fa-home-lg-alt"></i> Beranda</a>
  </div>
</nav>

<div class="container">
    <div class="row mt-4">

        <div class="col-md-12">
            <div class="alert alert-primary" role="alert">
                <strong>Update</strong> Data Virus Corona di Indonesia !
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 mb-3 shadow rounded" style="background-color: #6aa6ff;">
                <div class="card-body">                   
                        <h4 class="card-title">Positif</h4>
                        <p class="card-text text-center display-6 fw-bold text-white"><?= $positif ?></p>                    
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 mb-3 shadow rounded" style="background-color: #42f554;">
                <div class="card-body">                   
                        <h4 class="card-title">Sembuh</h4>
                        <p class="card-text text-center display-6 fw-bold text-white"><?= $data[0]['sembuh']; ?></p>                    
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 mb-3 shadow rounded" style="background-color: #f54242;">
                <div class="card-body">                   
                        <h4 class="card-title">Meninggal</h4>
                        <p class="card-text text-center display-6 fw-bold text-white"><?= $data[0]['meninggal'] ?></p>                    
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 mb-3 shadow rounded" style="background-color: #f2ec44;">
                <div class="card-body">                   
                        <h4 class="card-title">Dirawat</h4>
                        <p class="card-text text-center display-6 fw-bold text-white"><?= $data[0]['dirawat'] ?></p>                    
                </div>
            </div>
        </div>

    <div class="row">
        <div class="coontainer">
        <a href="https://kawalcovid19.id/" target="_blank" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>

    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>


