<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Project CRUD Data Produk</title>
</head>
<body>
  <h2>Project CRUD Produk</h2>
  <br>
  <?php

    include "koneksi.php";
    
    if($_GET["p"] == "produkadd"){
      include "produkadd.php";
    }else if($_GET["p"] == "produkedit"){
      include "produkedit.php";
    }else if($_GET["p"] == "produkdel"){
      include "produkdel.php";
    }else{
      include "produk.php";
    }
  ?>

<div class="grid">
    <div class="dh12">
      <div class="container3">
        Copyright &copy; Arfan Dwi Sukmajaya, 2020
      </div>
    </div>
  </div>



</body>
</html>