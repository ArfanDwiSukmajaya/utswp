<div class="card">
  <div class="kepalacard">
    Tambah Data Produk
  </div>
  <div class="isicard" style="text-align:center">
  <form action="" method="POST" enctype="multipart/form-data">

<label for="kode">Kode</label>
<input type="text" name="kode" id="kode">
<br>
<label for="nama">Nama</label>
<input type="text" name="nama" id="nama">
<br>
<label for="harga">Harga</label>
<input type="text" name="harga" id="harga">
<br>
<br>
<label for="stok">Stok</label>
<input type="number" name="stok" id="stok">
<br>
<label for="">Detail
  <textarea name="detail" id="detail" cols="50" rows="5"></textarea>
</label>
<br>
<label for="berat">Berat</label>
<input type="number" name="berat" id="berat">
<br>
<label for="jenis">Jenis</label>
<input type="text" name="jenis" id="jenis">
<br>
<label for="foto">Foto</label>
<input type="file" name="foto" id="foto">
<br>
<br>
<label>
  <input name="simpan" type="submit"  id="simpan" value="Tambah Produk">
</label>
</form>
</div>
</div>



<?php 

  if(isset($_POST["simpan"])){

    include "koneksi.php";

    $nmfoto = $_FILES["foto"]["name"];
    $lokfoto = $_FILES["foto"]["tmp_name"];

    if(!empty($lokfoto)){
      move_uploaded_file($lokfoto, "foto/$nmfoto");
    }

    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $detail = $_POST["detail"];
    $berat = $_POST["berat"];
    $jenis = $_POST["jenis"];

    $sql = "INSERT INTO b_produk (kodeprd, namaprd, hargaprd, stokprd, detailprd, beratprd, jenisprd, fotoprd, tglsimpan) VALUES('$kode', '$nama', '$harga', '$stok', '$detail', '$berat', '$jenis', '$nmfoto', NOW())";



    $sqlm = mysqli_query($kon,$sql);

    
    if($sqlm){
      echo "Data Produk Berhasil disimpan";
    }else{
      "Gagal Menyimpan";
    }
    
    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=produk'>";
    // var_dump($sqlm);
    
  }

?>