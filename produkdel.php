<?php 

  $sqlp = mysqli_query($kon, "DELETE FROM b_produk WHERE idprd='$_GET[id]'");

  // var_dump($sqlp);

  if($sqlp){
    echo "Data Produk Berhasil dihapus";
  }else{
    "Gagal Menghapus";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=produk'>";

?>