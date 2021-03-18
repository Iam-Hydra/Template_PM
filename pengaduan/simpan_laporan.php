<?php 
include "../assets/koneksi.php";

  $tgl = 	$_POST['tgl_laporan'];
  $nik = 	$_POST['nik'];
  $lapor = 	$_POST['laporan'];
  $ft = 	$_FILES['foto']['name'];
  $file= $_FILES['foto']['tmp_name'];
  $st=0;
  $sql= mysqli_query($koneksi,"insert into pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$lapor','$ft','$st')");
  move_uploaded_file($file, "../assets/bukti".$ft);

  if ($sql){
    ?>
    <script type="text/javascript">
      alert('Laporan Berhasil DItambhakan Terimakasih Telah Melapor');
      window.location="../masyarakat/index.php";
    </script>

  <?php } ?>


