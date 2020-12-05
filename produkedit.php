<?php 

  $sqlp = mysqli_query($kon, "SELECT * FROM b_produk WHERE idprd = '$_GET[id]'");

  $rp = mysqli_fetch_array($sqlp);


?>

<div class="card">
  <div class="kepalacard">
    Ubah Data Produk
  </div>
  <div class="isicard" style="text-align:center">
  <form action="" method="POST" enctype="multipart/form-data">

<input type="hidden" name="idprd" value="<?= "$rp[idprd]" ?>"/>
<label for="kode">Kode</label>
<input type="text" name="kode" id="kode" value="<?= $rp['kodeprd']; ?>">
<br>
<label for="nama">Nama</label>
<input type="text" name="nama" id="nama" value="<?= $rp['namaprd']; ?>">
<br>
<label for="harga">Harga</label>
<input type="text" name="harga" id="harga" value="<?= $rp['hargaprd']; ?>">
<br>
<label for="stok">Stok</label>
<input type="number" name="stok" id="stok" value="<?= $rp['stokprd']; ?>">
<br>
<label for="">Detail
  <textarea name="detail" id="detail" cols="50" rows="5"><?= $rp['detailprd']; ?></textarea>
</label>
<br>
<label for="berat">Berat</label>
<input type="number" name="berat" id="berat" value="<?= $rp['beratprd']; ?>">
<br>
<label for="jenis">Jenis</label>
<input type="text" name="jenis" id="jenis" value="<?= $rp['jenisprd']; ?>">
<br>
<br>
<?php 
echo "<img src='foto/$rp[fotoprd]' width='300px' >";
?>
<br>
<label for="foto">Foto</label>
<input type="file" name="foto" id="foto">
<br>
<br>
<label>
  <input name="simpan" type="submit"  id="simpan" value="Ubah Produk">
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
      $foto = ", foto='$nmfoto'";
    }else{
      $foto = "";
    }

    $idprd = $_POST['idprd'] ;
    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $detail = $_POST["detail"];
    $berat = $_POST["berat"];
    $jenis = $_POST["jenis"];

    $sql = "UPDATE b_produk SET kodeprd='$kode',
                                namaprd='$nama',
                                hargaprd='$harga',
                                stokprd='$stok',
                                detailprd='$detail',
                                beratprd='$berat',
                                jenisprd='$jenis'
                                $foto
                                WHERE idprd='$idprd' ";



    $sqlp = mysqli_query($kon,$sql);

    
    if($sqlp){
      echo "Data Produk Berhasil disimpan";
    }else{
      "Gagal Menyimpan";
    }
    
    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=produk'>";
    // var_dump($sqlm);
    
  }

?>