<?php   

  echo "<a href='?p=produkadd'>Tambah Data Produk</a>";
  echo "<br>";
  echo "<br>";
  echo "
        <table width='100%' border='1' cellspacing='1' cellpadding='10'>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Produk</th>
            <th>Data Produk</th>
            <th>Aksi</th>
          </tr>";

  $sqlp = mysqli_query($kon, "SELECT * FROM b_produk ORDER BY tglsimpan DESC");
  $no = 1;
  while($rm = mysqli_fetch_array($sqlp)){
    echo "
      <tr>
        <td>$no</td>
        <td><img src='foto/$rm[fotoprd]' width='50px'></td>
        <td>
          Kode : <b>$rm[kodeprd]</b> <br>
          Nama : <b>$rm[namaprd]</b> <br>
          Terdaftar : <b>$rm[tglsimpan]</b> <br>
        </td>
          <td>Harga : <b>$rm[hargaprd]</b> <br>
          Stok : <b>$rm[stokprd]</b> <br>
          Detail : $rm[detailprd]</br>
          Berat : <b>$rm[beratprd]</b> <br>
          Jenis : $rm[jenisprd]</br>
        </td>
        <td>
        <br><br>
          <a href='?p=produkedit&id=$rm[idprd]'>Ubah</a>
          <a href='?p=produkdel&id=$rm[idprd]'>Hapus</a>
        </td>
      </tr>
    ";
    $no++;
  }
  echo "</table>";

?>



